<?php

/**
 * Created by PhpStorm.
 * User: kerran
 * Date: 22/01/16
 * Time: 13:03
 */
require_once '../Conexao/Conexao.class.php';
require_once 'Usuario.class.php';

class UsuarioDAO{
    private $conexao;
    private $emailExiste = -1;
    private $emailNExiste = 1;
    private $senhaMudada = 2;
    private $erroMudarSenha = -10;
    private $erroNoBanco = -8;
    private $usuarioNaoCadastrado = -9;
    public function __construct(){
        $this->conexao = new Conexao();
        $this->conexao = $this->conexao->getConnection();
    }

    public function cadastrarUsuario(Usuario $usuario){

        $sql = "insert into usuario (nome, senha, email, nivel, exp) values (?,?,?,?,?)";

        $query = $this->conexao->prepare($sql);

        $query->bindParam(1, $usuario->getNome());
        $query->bindParam(2, $usuario->getSenha());
        $query->bindParam(3, $usuario->getEmail());
        $query->bindParam(4, $usuario->getNivel());
        $query->bindParam(5, $usuario->getExp());


        $query->execute();
    }

    public function atualizarUsuario($id, $nome, $senha, $email){
        $sql = "update usuario set nome=?, senha=?, email=? where id=?";

        $query = $this->conexao->prepare($sql);

        $query->bindParam(1, $nome);
        $query->bindParam(2, $senha);
        $query->bindParam(3, $email);
        $query->bindParam(4, $id);

        $query->execute();

        /*$sql1 = "select * from usuario where id=?";
        $query1 = $this->conexao->prepare($sql1);
        $query1->bindParam(1, $id);
        $query1->execute();

        $resultadoBusca = $query1->fetchObject();
        return $resultadoBusca;*/
    }

    public function deletarUsuario($id){
        $sql = "delete from usuario where id=?";
        
        $query = $this->conexao->prepare($sql);
        $query->bindParam(1, $id);

        $query->execute();
    }

    public function buscarUsuario($email, $senha){
        $sql = "select * from usuario where email=? and senha=?";
        try {
            $query = $this->conexao->prepare($sql);

            $query->bindParam(1, $email);
            $query->bindParam(2, $senha);
            $query->execute();

            $resultadoBusca = $query->fetchObject();
            if($query->rowCount() == 1){
                return $resultadoBusca;
            }else{
                return $this->usuarioNaoCadastrado;
            }

        }catch(Exception $e){
            return $this->erroNoBanco;
        }
    }

    public function buscarTodosUsuarios(){
        $sql = "select * from usuario order by nivel DESC";
        try{
            $query = $this->conexao->prepare($sql);
            $query->execute();

            $resultado = array();
                while ($resultadoBusca = $query->fetchObject())
                    array_push($resultado, $resultadoBusca);
                return $resultado;
        }catch(Exception $e){
            return $this->erroNoBanco;
        }
    }

    public function subirDeNivel($id, $nivel, $exp){
        $sql = "update usuario set nivel=?, exp=? where id=?";

        $query = $this->conexao->prepare($sql);

        $query->bindParam(1, $nivel);
        $query->bindParam(2, $exp);
        $query->bindParam(3, $id);

        $query->execute();

    }

    public function verificarEmail($email){
        $sql = "select * from usuario where email=?";

        $query = $this->conexao->prepare($sql);
        $query->bindParam(1, $email);
        $query->execute();

        if($query->rowCount() > 0)
            return $this->emailExiste;
        return $this->emailNExiste;
    }

    public function esqueciSenha($email){
        $sql = "update usuario set senha=? where email=?";
        $senha = "Arroz";
        try {
            $query = $this->conexao->prepare($sql);
            $query->bindParam(1, $senha);
            $query->bindParam(2, $email);
            $query->execute();

            return $this->senhaMudada;
        }catch(Exception $e){
            return $this->erroMudarSenha;
        }
    }
}