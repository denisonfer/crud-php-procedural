<?php
//sessão para exibir mensagem
  session_start();
  if(isset($_SESSION['sucesso'])) {
?>
<!-- script para Toast efeito -->
<script>
  window.onload = () => {
    M.toast({html: '<?php echo $_SESSION['sucesso']; ?>', classes: 'green' });
  };
</script>
<?php    
  } elseif (isset($_SESSION['falha'])) {
?>    
<!-- script para Toast efeito -->
<script>
  window.onload = () => {
    M.toast({html: '<?php echo $_SESSION['falha']; ?>', classes: 'red' });
  };
</script>
<?php 
  } elseif ($_SESSION['logado'] == true) {
      
  } else {
   header('location: ../index.php');
  };
  unset($_SESSION['sucesso']);
  unset($_SESSION['falha']);
?>  