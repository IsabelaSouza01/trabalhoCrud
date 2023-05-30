<?php
    include_once "../model/CadastroModel.php";
    if(isset($_POST['add'])){
      adicionar();
      header('Location: CadastroController.php');

    }else if(isset($_POST['atualiza'])){
      editar();
      header('Location:CadastroController.php');

    }else if(isset($_POST['exclui'])){
        $cadastro = buscar($_POST['id']);
        include_once("../view/confirma.php");

    }else if(isset($_GET['sim'])){
      $id = $_GET['sim'];
      excluir($id);
      header('Location:CadastroController.php');
      
    }else if(isset($_GET['id'])){
      $cadastro = buscar($_GET['id']);
      include_once '../view/atualiza_cadastro.php';
    }else{
      index();
    }
      function adicionar(){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        inserir($nome, $endereco);
      }

      function editar(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        atualizar($id,$nome,$endereco);
      }
      function index(){
        $listaCadastro = listar();
        include_once "../view/home.php";  
      }
?>

