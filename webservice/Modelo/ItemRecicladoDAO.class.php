<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:36
 */
include_once '../Conexao/Conexao.class.php';
include_once 'ItemReciclado.class.php';

class ItemRecicladoDAO
{
    private $conexao;
    private $nao_tem_itens = -5;
    private $deletou_tens = 5;
    private $n_deletou_iten = -7;
    public function __construct(){
        $this->conexao = new Conexao();
        $this->conexao = $this->conexao->getConnection();
    }

    public function adicionarItemReciclado(ItemReciclado $itemReciclado){
        $sql = "insert into item_reciclado (id_usuario, categoria, quantidade, pontuacao_obtida, localizacao) values(?,?,?,?,?)";

        $query = $this->conexao->prepare($sql);

        $query->bindParam(1, $itemReciclado->getIdUsuario());
        $query->bindParam(2, $itemReciclado->getCategoria());
        $query->bindParam(3, $itemReciclado->getQuantidade());
        $query->bindParam(4, $itemReciclado->getPontuacaoObtida());
        $query->bindParam(5, $itemReciclado->getLocalizacao());

        $query->execute();
    }

    public function atualizarItemReciclado(ItemReciclado $itemReciclado){
        //TODO
    }

    public function deletarItemReciclado($id){
        $sql = "delete from item_reciclado where id_item=?";

        $query = $this->conexao->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
    }

    public function deletarTodosItens($id_usuario){
        try {
            $sql = "delete from item_reciclado where id_usuario=?";
            $query = $this->conexao->prepare($sql);
            $query->bindParam(1, $id_usuario);
            $query->execute();
            return $this->deletou_tens;
        }catch(ErrorException $e){
            return $this->n_deletou_iten;
        }
    }

    public function listarTodosItensReciclados($id_usuario){
        $sql = "select * from item_reciclado where id_usuario=?";
        $query = $this->conexao->prepare($sql);
        $query->bindParam(1, $id_usuario);
        $query->execute();

        if($query->rowCount() > 0) {
            $resultado = array();

            while ($resultadoBusca = $query->fetchObject()) {
                array_push($resultado, $resultadoBusca);
            }
            return $resultado;
        }
        else{
            return $this->nao_tem_itens;
        }
    }
}