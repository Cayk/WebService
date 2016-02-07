<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:25
 */
require_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['busca'])){
    $controlador = new ControladorUsuario();
    echo json_encode($controlador->buscarTodosUsuarios());
}
else{
    json_encode("-9");
}