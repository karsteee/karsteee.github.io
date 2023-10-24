<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
// SI SE LLEGASE A ACOPIAR LA URL DE ESTA PAGINA, PRIMERO VERIFICA CON LA FUNCION DE VALIDATESSION
//DE LO CONTRARIO REDIRECCION AL LOGIN Y SALE DE LA APLICACION
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Usuario();
$model->idUsuario=$_GET["idUsuario"];
?>
<!DOCTYPE html>
<html lang="es">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link rel="stylesheet" href="css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="css/fontawesome.min.css">
<body>
    <div class="container">
           <center> <div class="logo"> <!-- Un contenedor con la clase "logo" -->
            <img src="img/555.jpg"><!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div>
        
  

<h2 class="page-header">USUARIOS</h2>

<div class="well well-sm text-right">
<a class="btn btn-success" href="Usuarios.php">Volver</a><!--PERMITE VOLVER A LA VISTA DONDE SE LISTAN LOS USUARIOS---> 
<form id="grm-usuario" action="../Controlador/EliminarUsuario.php" method="post"enctype="multipart/form-data">
    <P>Esta a punto de eliminar un registro¿Desea Continuar?</P>
    <input type="hidden" name="idUsuario" value="<?php echo $model->idUsuario;?>">
<!--CON EL VALOR DEL ID DE USUARIO SE PUEDE LLAMAR AL CONTROLADOR
ELIMINARUSUARIOS.PHP---> 
<div class="text-center">
    <button class="btn btn-success">Eliminar</button> </center>
</div>
</div>
</form>
<hr />
</div>
</div>
</body>
</html>