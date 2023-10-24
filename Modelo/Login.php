<?php 
// Verifica si la sesión no está iniciada antes de iniciarla
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Iniciar sesión si no está activa
}

require_once('Conexion.php');

class Login {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = Conexion::StartUp();
        } catch (Exception $e) {
            echo "HAY PROBLEMAS DE CONEXION";
            die($e->getMessage());
        }
    }

    public function Login($Usuario, $Password) {
        $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE correoUsuario = :correoUsuario AND passwordUsuario = :passwordUsuario");
        $stm->bindParam(':correoUsuario', $Usuario);
        $stm->bindParam(':passwordUsuario', $Password);
        $stm->execute();

        if ($stm->rowCount() == 1) {
            $result = $stm->fetch();
        
            $_SESSION['passwordUsuario'] = $result["passwordUsuario"];
            $_SESSION['id'] = $result['idUsuario'];
            $_SESSION['tipoDocUsuario']= $result['tipoDocUsuario'];

            return $result['idUsuario'];
        }
        return false;
    }

    public function validateSession() {
        // Verifica si $_SESSION['id'] está definida y no es igual a null
        if ($_SESSION['id'] == null) {
            header('Location:../vista/Login.php');
        }
    }
}
?>
