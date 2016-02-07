<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:47
 */
require_once '../Controlador/ControladorItemReciclado.class.php';

if(isset($_POST['id_usuario'])){
    $controlador = new ControladorItemReciclado();
    echo json_encode($controlador->listarTodosItensReciclados($_POST['id_usuario']));
}
else{
    echo json_encode("-6");
}