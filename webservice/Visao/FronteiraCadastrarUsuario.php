<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 13:38
 */
require_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['nome'], $_POST['senha'], $_POST['email'], $_POST['nivel'], $_POST['exp'])){
    $controlador = new ControladorUsuario();
    $resulado = $controlador->verificarEmail($_POST['email']);
    if( $resulado == -1){
        echo json_encode($resulado);
    }
    else {
        $controlador->cadastrarUsuario($_POST['nome'], $_POST['senha'], $_POST['email'], $_POST['nivel'], $_POST['exp']);
        echo json_encode("1");
    }
}
