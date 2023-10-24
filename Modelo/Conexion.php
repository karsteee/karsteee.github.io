<?php
class Conexion{
        public static function StartUp()
    {
        //VARIABLE PDO PARA CONECTARSE 
        $pdo = new PDO('mysql:host=localhost;dbname=gestiondomicilios;charset=utf8', 'root' , '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//APLICA ATRIBUTOS DE ERRORES
        return $pdo;
    }      
}

?>
