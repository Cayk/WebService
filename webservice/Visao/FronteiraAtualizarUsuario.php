<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:23
 */
require_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['id'], $_POST['nome'], $_POST['senha'], $_POST['email'])){

    $controlador = new ControladorUsuario();
    $controlador->atualizarUsuario($_POST['id'], $_POST['nome'], $_POST['senha'], $_POST['email']);
}
else{
    echo json_encode("Erro nos param");
}