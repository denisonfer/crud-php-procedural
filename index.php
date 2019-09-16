<?php 
//importação do header
  include_once './includes/header.php';
?>

<section>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method= "POST" action="./controllers/db-login.php">
      <div class="input-container">
        <input type="text" id="nome" name="login" required/>
        <label for="nome">Login de usuário</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" name="senha" required/>
        <label for="senha">senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="btn-user-login"><span>Logar</span></button>
      </div>
      <div class="footer"><a href="#">@denisonfer</a></div>
    </form>
  </div>

  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Registro
      <div class="close"></div>
    </h1>
    <form method= "POST" action="./controllers/db-login.php">
      <div class="input-container">
        <input type="text" id="nome" name="nome" required/>
        <label for="nome">Nome</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="login" name="login" required/>
        <label for="login">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" name="senha" required/>
        <label for="senha">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="btn-user-create"><span>Acessar</span></button>
      </div>
    </form>
  </div>
</div>
</section>


<?php 
//importação do footer
  include_once './includes/footer.php';
?>


