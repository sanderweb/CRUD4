<?php

// ----- CARREGA A CLASSE DE CONEXÃO COM O BANCO DE DADOS
//  ----- //
require_once('Conexao.php');

class Usuario {

    // ----- ATRIBUTOS NA NOSSA CLASSE ----- //
    
    Private $nome;
    Private $email;
    Private $senha;

    // ----- FUNÇÃO DE INCLUSÃO DE DADOS ----- //
    
    public function incluir($nome, $email, $senha) { 

        $insert = 'insert into usuario(nome, email, senha)values("' . $nome . '","' . $email . '","' . $senha . '")';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }
    
    // ----- FUNÇÃO DE CONSULTA DE DADOS ----- //

    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    // ----- FUNÇÃO DE EXCLUSÃO DE DADOS ----- //
    
    public function excluir($id) {

        $delete = 'delete from usuario where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

    // ----- FUNÇÃO DE EDIÇÃO DE DADOS ----- //
    
    public function alterar($nome, $email, $senha, $id) {

        $update = 'update usuario set nome="' . $nome . '", email="' . $email . '" , senha="' . $senha . '" where id="' . $id . '"';

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

}
