<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 13:57
 */
require_once '../Modelo/UsuarioDAO.class.php';
require_once '../Modelo/Usuario.class.php';

class ControladorUsuario{
    private $usuarioDAO;

    public function __construct(){
        $this->usuarioDAO = new UsuarioDAO();
    }

    public function cadastrarUsuario($nome, $senha, $email, $nivel, $exp){

        $usuario = new Usuario($nome, $senha, $email, $nivel, $exp);
        $this->usuarioDAO->cadastrarUsuario($usuario);
    }

    public function atualizarUsuario($id, $nome, $senha, $email){
        $this->usuarioDAO->atualizarUsuario($id, $nome, $senha, $email);
    }

    public function deletarUsuario($id){
        $this->usuarioDAO->deletarUsuario($id);
    }

    public function buscarUsuario($email, $senha){
        return $this->usuarioDAO->buscarUsuario($email, $senha);
    }

    public function buscarTodosUsuarios(){
        return $this->usuarioDAO->buscarTodosUsuarios();
    }

    public function subirDeNivel($id, $nivel, $exp){
        return $this->usuarioDAO->subirDeNivel($id, $nivel, $exp);
    }

    public function verificarEmail($email){
        return $this->usuarioDAO->verificarEmail($email);
    }

    public function esqueciSenha($email){
        $resultado = $this->usuarioDAO->esqueciSenha($email);
        if($resultado != -10){
            $assunto = "Nova Senha";
            $senha = "Nova senha: Arroz";
            mail($email, $assunto, $senha);
        }
        return $resultado;
    }
}