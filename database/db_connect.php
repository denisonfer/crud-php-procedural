<?php 
//conexão com banco PHPMYADMIN 
  $hostname = "localhost";
  $user = "root";
  $password = "";
  $database = "crud";

  $conexao = mysqli_connect($hostname, $user, $password, $database);
  mysqli_set_charset ($conexao, "utf8");
  if(mysqli_connect_error()) {
    echo "Falha ao conectar no banco: ". mysqli_connect_error();
  }
?>