<?php include("topo.php"); ?>

<div class="container">
  <h1 class="page-header">Contato</h1>
  <div class="row">
    <div class="col-md-12">
      <?php
        if ($_POST[sucesso] == 1) {
          echo '<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Mensagem enviada com sucesso!</strong></div>';
        }
        if ($_POST[erro] == 1) {   
          echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Erro! Por favor verifique os dados informados...</strong></div>';
        }
      ?>
    </div>
    <div class="col-lg-6">
      <form role="form" action="enviar_email.php" method="post" >
        <div class="form-group">
          <label for="nome">Nome</label>
          <div class="input-group">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
            <span class="input-group-addon"><i class="form-control-feedback"></i></span>
          </div>
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <div class="input-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required  >
            <span class="input-group-addon"><i class="form-control-feedback"></i></span>
          </div>
        </div>
        <div class="form-group">
          <label for="msg">Mensagem</label>
          <div class="input-group">
            <textarea name="msg" id="msg" class="form-control" rows="5" required></textarea>
            <span class="input-group-addon"><i class="form-control-feedback"></i></span>
          </div>
        </div>
        <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-info pull-right">
      </form>
    </div>
    <div class="col-lg-6" align="justify">
      <h3>Entre em contato conosco para saber mais informações sobre nossos cursos.</h3>
    </div>
    <hr class="featurette-divider hidden-lg">
  </div>
</div>

<?php include("rodape.php"); ?>
