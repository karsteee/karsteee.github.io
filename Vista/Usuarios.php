<?php
require_once('../Modelo/Usuarios.php');
require_once('../Modelo/Login.php');
$ModeloLogin=new Login();
$ModeloLogin->validateSession();
$model=new Usuario();
?>
<!DOCTYPE html>
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
<!--
    
TemplateMo 559 KARSTE

https://templatemo.com/tm-559-zay-shop

-->
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <img class="img-fluid" src="img/logo.jpg"width="200" height="200"/>


            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <body>
            <div class="container-form sign-up"> <!-- Un contenedor principal con una clase llamada "container-form" y "sign-up" -->
            <div class="welcome-back"> <!-- Un contenedor con la clase "welcome-back" -->
        
            <div class="message"> <!-- Un contenedor con la clase "message" -->
 
         <center>   <div class="logo"> <!-- Un contenedor con la clase "logo" -->
            <img src="img/555.jpg"> <!-- Una imagen circular con una clase "circle-image" y una ruta de origen ("src") -->
                
            </div> <!-- Fin del contenedor "logo" -->
            
            <h1>USUARIOS</h1> <br> <!-- Encabezado de nivel 1 (h1) con el texto "Bienvenido a karste" -->
<br>
<br>
            <div class="well well-sm text-right">

            <a class="btn btn-success" href="AgregarUsuario.php">Nuevo Usuario</a><!--INDICA QUE EL CONTROLADOR Y QUE ACCION EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO AGREGARUSUARIO.PHP---> <br>
            <br>
            <br>
            <a class="btn btn-success" href="reportePro.php">Generar Reporte</a><br>
            <br>
            <br>
            <a class="btn btn-success" href="shop.php">Inicio</a><!--PERMITE VOLVER A LA VISTA EL MENU---> <br></center>
            <br>
            <br>
</div>
</div> <!-- Fin del contenedor "message" -->
            
</div>
<center> <table class="formulario">
<thead>
    <tr>
        <th style="width:0px";>Id</th>
        <th style="width:150px;">Tipo Doc</th>
        <th style="width:150px;">Numero Doc</th>
        <th style="width:100px";>Nombre </th>
        <th style="width:150px";>Apellido</th>
        <th>Direccion</th>
        <th style="width:100px;">Telefono</th>
        <th style="width:100px;">Correo</th>
        <th style="width:100px;">Contraseña</th>
        <th style="width:130px;">Estado</th>
        <th style="width:60px;">Rol Usuario</th>
        <th style="width:60px;"></th>

<?php
$Usuario=$model->Listar();
if($Usuario!=null){
    foreach ($Usuario as $r){
/* LA VARIABLE model ES UNA INSTANCIA DE LA CLASE USUARIO Y SU VEZ LLAMA A LA FUNCION
LISTAR DE USUARIO.PHP DE LA CARPETA MODELO*/?>
<tr>
    <td><?php echo $r['idUsuario']; ?></td>
    <td><?php echo $r['tipoDocUsuario']; ?></td>
    <td><?php echo $r['numdocUsuario']; ?></td>
    <td><?php echo $r['nombreUsuario']; ?></td>
    <td><?php echo $r['apellidoUsuario']; ?></td>
    <td><?php echo $r['direccionUsuario']; ?></td>
    <td><?php echo $r['telefonoUsuario']; ?></td>
    <td><?php echo $r['correoUsuario']; ?></td>
    <td><?php echo $r['passwordUsuario']; ?></td>
    <td><?php echo $r['estadoUsuario'] == 1 ? 'Activo' :  'Inactivo'; ?></td>
    <td><?php echo $r['id_RolUsuario_fk']; ?></td>
        <td> <!-- Agregamos un espacio horizontal utilizando la entidad HTML &nbsp; -->
    &nbsp;
    &nbsp;

    </td>
    <td>
        <a class="btn btn-success" href="EditarUsuario.php?idUsuario=<?php echo $r['idUsuario'];?>">Editar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION EJECUTAR,
        EN ESTE CASO LLAMARIA AL ARCHIVO EDITAUSUARIO.PHP PASANDO EL ID COMO PARAMETRO---> 
    </td>
    <td> <!-- Agregamos un espacio horizontal utilizando la entidad HTML &nbsp; -->
    &nbsp;
    &nbsp;

    </td>
    <td>
        <a class="btn btn-success" href="EliminarUsuario.php?idUsuario=<?php echo $r['idUsuario'];?>">Eliminar</a><!--INDICA QUE CONTROLADOR Y QUE ACCION
        EJECUTAR, EN ESTE CASO LLAMARIA AL ARCHIVO ELIMINARUSUARIO.PHP PASANDO
        EL ID COMO PARAMETRO---> 
    </td>
    </tr>
    <?php
    }

    }
    ?>

    </center></tbody>
</table>
<hr />
  <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <img class="img-fluid" src="img/555.jpg"width="200" height="200"/>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">3213240773-3193696553</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">karste327@gmail.com</a>
                        </li>
                    </ul>
                </div>

              

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                      
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Script -->
</body>
</div>
</div>
</body>
</html>