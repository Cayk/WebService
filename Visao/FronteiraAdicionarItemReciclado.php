<?php
/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:44
 */
require_once '../Modelo/ItemReciclado.class.php';
require_once '../Controlador/ControladorItemReciclado.class.php';

if(isset($_POST['id_usuario'], $_POST['categoria'], $_POST['quantidade'], $_POST['pontuacao_obtida'], $_POST['localizacao'])){
    $itemReciclado = new ItemReciclado($_POST['id_usuario'], $_POST['categoria'], $_POST['quantidade'], $_POST['pontuacao_obtida'], $_POST['localizacao']);
    $controlador = new ControladorItemReciclado();
    $controlador->adicionarItemReciclado($itemReciclado);
}