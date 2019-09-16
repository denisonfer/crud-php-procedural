<?php 
//importação do header
  include_once '../includes/header.php';
?>
<section class="container page-create">
  <div class="row inputs">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Adicionar Cliente</h3>

      <form action="../controllers/db-create.php" method="POST">
        <div class="input-field col s6">
          <input type="text" name="nome" id="nome" required>
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="sobrenome" id="sobrenome" required>
          <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
          <input type="email" name="email" id="email" required>
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="idade" id="idade" required>
          <label for="idade">idade</label>
        </div>

        <div class="botoes">
          <div class="col s12 m12 l10">
            <button class="btn green" name="btn-cadastrar">
              <i class="material-icons right">check</i>
              Cadastrar
            </button>
            <button class="btn yellow darken-3" type="reset">
              <i class="material-icons right">clear</i>
              Limpar
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