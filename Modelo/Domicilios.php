<?php
require_once('Conexion.php');
class Domicilio{
    private $pdo;//VARIABLE PARA CONEXION 
    public $idDomicilio;
    public $horaDomicilio;
    public $estadoDomicilio;
    public $idPedidoFK;
    public $idDomiciliarioFK;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Conexion::StartUp(); // SE CONECTA CON L BASE DE DATOS A
            //TRAVES DE LA FUNCION STARTUP
        }
        catch(Exception $e)
        {   echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }

public function Listar(){
    $rows=null;
    $stm=$this->pdo->prepare("Select * from domicilio");
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
}
public function Agregar($idDomicilio, $horaDomicilio, $estadoDomicilio, $idPedidoFK, $idDomiciliarioFK)
{
    $stm = $this->pdo->prepare("INSERT INTO domicilio (idDomicilio, horaDomicilio, estadoDomicilio, idPedidoFK, idDomiciliarioFK)
    VALUES (:idDomicilio, :horaDomicilio, :estadoDomicilio, :idPedidoFK, :idDomiciliarioFK)");

    $stm->bindParam(':idDomicilio', $idDomicilio);
    $stm->bindParam(':horaDomicilio', $horaDomicilio);
    $stm->bindParam(':estadoDomicilio', $estadoDomicilio);
    $stm->bindParam(':idPedidoFK', $idPedidoFK);
    $stm->bindParam(':idDomiciliarioFK', $idDomiciliarioFK);

    if ($stm->execute()) {
        header('Location:../Vista/Domicilios.php');
    } else {
        header('Location:../Vista/AgregarDomicilio.php');
    }
}


         
//METODO PARA OBTENER EL ID DE UN USUARIO
public function Obtener ($idDomicilio){
    $rows=null;
    $stm=$this->pdo->prepare("SELECT * FROM domicilio where idDomicilio =:idDomicilio");
    $stm->bindParam(':idDomicilio',$idDomicilio);
    $stm->execute();
    while($result=$stm->fetch()){
        $rows[]=$result;
    }
    return $rows;
} 

//METODO PARA ACTUALIZAR USUARIO
public function Actualizar($idDomicilio,$horaDomicilio,$estadoDomicilio,$idPedidoFK,$idDomiciliarioFK){
    $stm=$this->pdo->prepare("UPDATE DOMICILIO
    SET idDomicilio=:idDomicilio,
    horaDomicilio=:horaDomicilio,
    estadoDomicilio=:estadoDomicilio,
    idPedidoFK=:idPedidoFK,
    idDomiciliarioFK=:idDomiciliarioFK,
    WHERE idDomicilio=:idDomicilio");
    $stm->bindParam(':idDomicilio', $idDomicilio);
    $stm->bindParam(':horaDomicilio', $horaDomicilio);
    $stm->bindParam(':estadoDomicilio', $estadoDomicilio);
    $stm->bindParam(':idPedidoFK', $idPedidoFK);
    $stm->bindParam(':idDomiciliarioFK', $idDomiciliarioFK);
    if($stm->execute()){
    header('Location:../Vista/Domicilios.php');
    }else{
    header('Location:../Vista/EditarDomicilio.php');
    }
}
//METODO PARA ELIMINAR UN USUARIO
public function Eliminar($idDomicilio){
    $stm=$this->pdo->prepare("DELETE FROM domicilio WHERE idDomicilio=:idDomicilio");
    $stm->bindParam(':idDomicilio',$idDomicilio);
    if($stm->execute()){
        header('Location:../Vista/Domicilios.php');
    }else{
    header('Location:../Vista/EliminarDomicilio.php');
    }
}

}
?>