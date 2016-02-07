<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:23
 */
require_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['id'])){
    $controlador = new ControladorUsuario();
    $controlador->deletarUsuario($_POST['id']);
}