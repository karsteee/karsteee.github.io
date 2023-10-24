<?php
require_once('../Modelo/Domicilios.php');
if($_POST){
    $ModeloDomicilio=new Domicilio();
    $idDomicilio=$_POST["idDomicilio"];
    $horaDomicilio=$_POST["horaDomicilio"];
    $estadoDomicilio=$_POST["estadoDomicilio"];
    $idPedidoFK=$_POST["idPedidoFK"];
    $idDomiciliarioFK=$_POST["idDomiciliarioFK"];
    $ModeloDomicilio->Actualizar( $idDomicilio,$horaDomicilio, $estadoDomicilio,$idPedidoFK,$idDomiciliarioFK);
    }else{
        header('Location:../Vista/Domicilios.php');
    }
