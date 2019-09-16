<?php 
//conexão com banco 
  require_once '../database/db_connect.php';
//sessão
  session_start();  
//ação do botão login
  if(isset($_POST['btn-user-login'])) {
    $login = mysqli_escape_string($conexao, $_POST['login']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);
    $sql = "SELECT * FROM usuarios WHERE login='$login' AND senha=md5('$senha')";
    $resultado = mysqli_query($conexao, $sql);
    
    if (mysqli_num_rows($resultado) > 0) {
      $dados = mysqli_fetch_array($resultado);
      $_SESSION['logado'] = true;
      $_SESSION['id_usuario'] = $dados['id'];
      header('location: ../pages/home.php');
    } else {
     echo "login inexistente";
    }
    
  }

//ação do botão registro
  if(isset($_POST['btn-user-create'])) {
    $nome = mysqli_escape_string($conexao, $_POST['nome']);
    $login = mysqli_escape_string($conexao, $_POST['login']);
    $senha = mysqli_escape_string($conexao, $_POST['senha']);
    $sql = "INSERT INTO usuarios (nome, login, senha) VALUES ($nome, $login, md5($senha)) ";
    $resultado = mysqli_query($conexao, $sql);
    
    if (mysqli_affected_rows($conexao) != 0) {
      $dados = mysqli_fetch_array($resultado);
      $_SESSION['logado'] = true;
      $_SESSION['id_usuario'] = $dados['id'];
      header('location: ../pages/home.php');
    } else {
     echo "alert(Erro ao cadastrar usuário)";
    }
    
  }

?>