<?php 
//importação do header
  include_once '../includes/header.php';
//importação da mensagem
  include_once '../includes/message.php';
//conexão com banco 
  require_once '../database/db_connect.php';
//verificar se tem usuário na sessão


//select para listar todos os clientes
  $sql = "SELECT * FROM clientes";
  $resultado = mysqli_query($conexao, $sql);
?>
<section class="botao-acao">
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">settings</i>
    </a>
    <ul>
      <li><a href="../controllers/db-logout.php" data-position="left" data-tooltip="Sair do sistema"
            class="btn-floating red tooltipped">
            <i class="material-icons">exit_to_app</i>
            </a>
      </li>
      <li><a class="btn-floating yellow darken-1 disabled"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green disabled"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue disabled"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
</section>

<section class="container">
  <div class="row">
    <div class="col s12 m6 push-m3">
      <h3 class="light">Lista de Clientes</h3>
        <table class="highlight">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Sobrenome</th>
              <th>E-mail</th>
              <th>idade</th>
            </tr>
          </thead>

          <tbody>
          <?php   while ($dados = mysqli_fetch_array($resultado)) { ?>
            <tr>
              <td><?php echo $dados['nome']; ?></td>
              <td><?php echo $dados['sobrenome']; ?></td>
              <td><?php echo $dados['email']; ?></td>
              <td><?php echo $dados['idade']; ?></td>
              <td>
                <a href="./update.php?id=<?php echo $dados['id']; ?>"
                   class="btn-floating orange" title="editar cliente" alt="deletar cliente">
                  <i class="material-icons right">edit</i>
                </a>
              </td>
              <td>
                <a href="#modal<?php echo $dados['id']; ?>"
                  class="btn-floating red modal-trigger"
                  title="deletar cliente" alt="deletar cliente">
                  <i class="material-icons right">delete</i>
                </a>
              </td>
            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal bottom-sheet">
              <div class="modal-content">
                <h3>Opa!</h3>
                <h4>Tem certeza que deseja excluir este cliente?</h4>
              </div>
              <div class="modal-footer">
                <form action="../controllers/db-delete.php" method="post">
                  <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">
                  <button class="modal-close btn green"
                    type="submit" name="btn-deletar">Sim, excluir Agora</button>
                  <a href="#!" class="modal-close btn red">Não, cancelar</a>
                </form>
              </div>
            </div>

            </tr>
          <?php } ; ?>
          </tbody>

        </table>

      <div class="container-botoes">
        <a href="./create.php" class="btn green">
          <i class="material-icons right">add</i>
          Cadastrar Cliente
        </a>
      </div>

    </div>
  </div>
</section>


<?php 
//importação do footer
  include_once '../includes/footer.php';
?>