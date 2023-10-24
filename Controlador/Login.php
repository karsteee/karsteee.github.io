<?php
require_once('../Modelo/Login.php');
    if($_POST){
                $Usuario = $_POST['correoUsuario'];
                $Password = $_POST['passwordUsuario'];
                //SE CREA UNA VARIABLE PARA RECIBIR LO QUE DEVULEVE LA FUNCION LOGIN AL MODELO
                $model = new Login();
                $entrada= $model->login($Usuario, $Password);
                if ($entrada != false){
                 //SI EXISTE EL USUARIO, LO REDIRIGE A LA VISTA DE MENU DE ACUERDO AL ROL

                header ('Location: ../Vista/Menu.php');
                }
                // SI NO EXISTE EL USUARIO VUELVE A MOSTRAR LA VISTA LOGIN
                else{

                    header('Location: ../Vista/Login.php');
                  }
            }
?>