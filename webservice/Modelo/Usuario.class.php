<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 13:00
 */
class Usuario{
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $nivel;
    private $exp;

    /**
     * Usuario constructor.
     * @param $nome
     * @param $senha
     * @param $email
     * @param $nivel
     * @param $exp
     */
    public function __construct($nome, $senha, $email, $nivel, $exp)
    {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->nivel = $nivel;
        $this->exp = $exp;
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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * @param mixed $exp
     */
    public function setExp($exp)
    {
        $this->exp = $exp;
    }
}