<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:42
 */
include_once '../Modelo/ItemRecicladoDAO.class.php';
include_once '../Modelo/ItemReciclado.class.php';

class ControladorItemReciclado{
    private $itemRecicladoDAO;

    public function __construct(){
        $this->itemRecicladoDAO = new ItemRecicladoDAO();
    }

    public function adicionarItemReciclado(ItemReciclado $itemReciclado){
        $this->itemRecicladoDAO->adicionarItemReciclado($itemReciclado);
    }

    public function atualizarItemReciclado(ItemReciclado $itemReciclado){
        //TODO
    }

    public function deletarItemReciclado($id){
        $this->itemRecicladoDAO->deletarItemReciclado($id);
    }

    public function deletarTodosItens($id_usuario){
        return $this->itemRecicladoDAO->deletarTodosItens($id_usuario);
    }

    public function listarTodosItensReciclados($id_usuario){
        return $this->itemRecicladoDAO->listarTodosItensReciclados($id_usuario);
    }
}