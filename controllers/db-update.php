<?php 
//conexão com banco 
  require_once '../database/db_connect.php';
//sessão
  session_start();  
//verifica se botão foi clicado
  if (isset($_POST['btn-atualizar'])) {
    //recebe os dados com filtro de segurança
    $id = mysqli_escape_string($conexao, $_POST['id']);
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);
    //sql para atualizar o cliente no banco de dados
    $sql = "UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', idade='$idade' WHERE id=$id";
    if (mysqli_query($conexao, $sql)) {
      $_SESSION['sucesso'] = "Cadastro atualizado com sucesso!";
      header('location: ../pages/home.php');
    } else {
      $_SESSION['falha'] = "Erro ao atualizar cadastro!";
      header('location: ../pages/home.php');
    }
  }
  
?>