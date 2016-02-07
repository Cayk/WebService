<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 23/01/16
 * Time: 12:08
 */
require_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['id'], $_POST['nivel'], $_POST['exp'])){
    $controlador = new ControladorUsuario();
    echo json_encode($controlador->subirDeNivel($_POST['id'], $_POST['nivel'], $_POST['exp']));
}