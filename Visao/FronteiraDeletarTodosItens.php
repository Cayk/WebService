<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:46
 */

require_once '../Controlador/ControladorItemReciclado.class.php';

if(isset($_POST['id_usuario'])){
    $controlador = new ControladorItemReciclado();
    json_encode($controlador->deletarTodosItens($_POST['id_usuario']));
}else{
    echo json_encode("-6");
}