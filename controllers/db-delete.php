<?php 
//conexão com banco 
  require_once '../database/db_connect.php';
//sessão
  session_start();  
//verifica se botão foi clicado
  if (isset($_POST['btn-deletar'])) {
    //recebe os dados com filtro de segurança
    $id = mysqli_escape_string($conexao, $_POST['id']);
    //sql para deltar do banco
    $sql = "DELETE FROM clientes WHERE id=$id";
    if (mysqli_query($conexao, $sql)) {
      $_SESSION['sucesso'] = "Cliente deletado com sucesso!";
      header('location: ../pages/home.php');
    } else {
      $_SESSION['falha'] = "Erro ao deletar cliente!";
      header('location: ../pages/home.php');
    }
  }
  
?>