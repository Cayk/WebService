<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:45
 */
require_once '../Controlador/ControladorItemReciclado.class.php';

if(isset($_POST['id'])){
    $controlador = new ControladorItemReciclado();
    $controlador->deletarItemReciclado($_POST['id']);
}