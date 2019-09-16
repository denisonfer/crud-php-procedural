<?php 
//conexão com banco 
  require_once '../database/db_connect.php';
//sessão
  session_start();  
//verifica se botão foi clicado
  if (isset($_POST['btn-cadastrar'])) {
    //recebe os dados com filtro de segurança
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_escape_string($conexao, $_POST['email']);
    $idade = mysqli_escape_string($conexao, $_POST['idade']);
    //sql para inserir no banco
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    if (mysqli_query($conexao, $sql)) {
      $_SESSION['sucesso'] = "Cadastro realizado com sucesso!";
      header('location: ../pages/home.php');
    } else {
      $_SESSION['falha'] = "Erro ao realizar cadastro!";
      header('location: ../pages/home.php');
    }
  }
  
?>