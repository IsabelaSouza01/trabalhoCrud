<?php
    include_once 'database.php';

    function listar(){
        $con = conectar();
        $sql = "SELECT * FROM cadastro";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc()){
            $dados[] = $d;
        }
        return $dados;
    }
    function inserir($nome, $endereco){
        $con = conectar();
        $sql = "INSERT INTO cadastro (nome, endereco) VALUES('$nome','$endereco')";
        $con->query($sql);
    }
    function buscar($id) {
        $con = conectar();
        $sql = "SELECT * FROM cadastro WHERE id='$id'";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc()){
            $dados[] = $d;
        }
        return $dados[0];
    }
    function atualizar($id, $nome, $endereco) {
        $con = conectar();
        $sql = "UPDATE cadastro SET nome= '$nome', endereco= '$endereco' WHERE id='$id'";
        $con->query($sql);
    }

    function excluir($id){
        $con = conectar();
        $sql = "DELETE FROM cadastro WHERE id='$id'";
        $con->query($sql);
    }
?>