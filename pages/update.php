<?php 
//importação do header
  include_once '../includes/header.php';
//conexão com o banco de dados
  require_once '../database/db_connect.php';  
//consulta o cliente no banco
  $id = mysqli_escape_string($conexao, $_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id=$id";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);
?>
<section class="container page-create">
  <div class="row inputs">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Atualizar Cliente</h3>

      <form action="../controllers/db-update.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">
        <div class="input-field col s6">
          <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" >
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>"  >
          <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
          <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>" >
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>" >
          <label for="idade">idade</label>
        </div>

        <div class="botoes">
          <div class="col s12 m12 l10">
            <button class="btn green" name="btn-atualizar">
              <i class="material-icons right">check</i>
              atualizar
            </button>
          </div>
          <div class="col s12 m12 l2">
            <a href="./home.php" class="btn-floating">
              <i class="material-icons">home</i>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


<?php 
//importação do footer
  include_once '../includes/footer.php';
?>