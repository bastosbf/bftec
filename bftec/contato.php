<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>BFTec formação de profissionais de TI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  <style id="holderjs-style" type="text/css"></style></head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="inicio.html">Início</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li class="active"><a href="#">Contato</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tecnologias <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation" class="dropdown-header">Java</li>
                    <li><a href="tecnologias/java_se.html">Java SE</a></li>
                    <li><a href="tecnologias/servlets_jsp.html">Servlets & JSP</a></li>
                    <li><a href="tecnologias/struts2.html">Struts 2</a></li>
                    <li><a href="tecnologias/hibernate.html">Hibernate</a></li>
                    <li><a href="tecnologias/spring.html">Spring</a></li>
                    <li role="presentation" class="dropdown-header">Apresentação</li>
                    <li><a href="tecnologias/jquery.html">JQuery</a></li>
                    <li><a href="tecnologias/html5.html">HTML 5</a></li>
                    <li role="presentation" class="dropdown-header">Dispositivos Móveis</li>
                    <li><a href="tecnologias/android.html">Android</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Para Você">
          <div class="container">
            <div class="carousel-caption">
              <h1>Treinamento</h1>
              <p>Treine novos funcionários nas tecnologias utilizadas por sua empresa.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Nossos cursos</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Para Você">
          <div class="container">
            <div class="carousel-caption">
              <h1>Reciclagem</h1>
              <p>Treine funcionários em novas tecnologias que são amplamente utilizadas no mercado.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Nossos cursos</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

<div class="container">
<div class="row">
  <div class="col-md-12">
  	<?php
  	if($_POST[sucesso] == 1) {
  		echo '<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Mensagem enviada com sucesso!</strong></div>';
    }
    if($_POST[erro] == 1) {   
    	echo '<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Erro! Por favor verifique os dados informados...</strong></div>';
    }
    ?>
  </div>
  <form role="form" action="enviar_email.php" method="post" >
    <div class="col-lg-6">
      <div class="form-group">
        <label for="nome">Nome</label>
        <div class="input-group">
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
          <span class="input-group-addon"><i class="form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <div class="input-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required  >
          <span class="input-group-addon"><i class="form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="msg">Mensagem</label>
        <div class="input-group">
          <textarea name="msg" id="msg" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="form-control-feedback"></i></span>
        </div>
      </div>
      <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-info pull-right">
    </div>
    <div class="col-lg-6">
	<h3>Entre em contato por e-mail para saber mais informações sobre nossos cursos!</h3>
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
</div>

</div>

     
      <footer>
        <!--<p class="pull-right"><a href="http://getbootstrap.com/examples/carousel/#">Back to top</a></p>-->
        <!--<p>© 2014 Learning. · <a href="http://getbootstrap.com/examples/carousel/#">Privacy</a> · <a href="http://getbootstrap.com/examples/carousel/#">Terms</a></p>-->
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1404307167876">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1404307167876" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div></body></html>
