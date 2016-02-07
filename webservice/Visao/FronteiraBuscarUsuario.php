<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:24
 */
require_once '../Controlador/ControladorUsuario.class.php';
$erro = "-3";
if(isset($_POST['email'], $_POST['senha'])){
    $controlador = new ControladorUsuario();
    echo json_encode($controlador->buscarUsuario($_POST['email'], $_POST['senha']));
}
else{
    echo json_encode($erro);
}