<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 23:32
 */
class ItemReciclado
{
    private $id;
    private $id_usuario;
    private $categoria;
    private $quantidade;
    private $pontuacao_obtida;
    private $localizacao;

    /**
     * ItemReciclado constructor.
     * @param $id_usuario
     * @param $categoria
     * @param $quantidade
     * @param $pontuacao_obtida
     * @param $localizacao
     */
    public function __construct($id_usuario, $categoria, $quantidade, $pontuacao_obtida, $localizacao)
    {
        $this->id_usuario = $id_usuario;
        $this->categoria = $categoria;
        $this->quantidade = $quantidade;
        $this->pontuacao_obtida = $pontuacao_obtida;
        $this->localizacao = $localizacao;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getPontuacaoObtida()
    {
        return $this->pontuacao_obtida;
    }

    /**
     * @param mixed $pontuacao_obtida
     */
    public function setPontuacaoObtida($pontuacao_obtida)
    {
        $this->pontuacao_obtida = $pontuacao_obtida;
    }

    /**
     * @return mixed
     */
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * @param mixed $localizacao
     */
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;
    }

}