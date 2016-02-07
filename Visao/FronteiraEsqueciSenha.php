<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 25/01/16
 * Time: 20:33
 */
include_once '../Controlador/ControladorUsuario.class.php';

if(isset($_POST['email'])){
    $controlador = new ControladorUsuario();
    $resultado = $controlador->verificarEmail($_POST['email']);
    if($resultado == "1") {
        echo json_encode($resultado);
    }
    else{
        echo json_encode($mudarSenha = $controlador->esqueciSenha($_POST['email']));
    }
}
else{
    echo json_encode("-2");
}