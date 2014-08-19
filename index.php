<?php include("topo.php"); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="imgs/cover_build.png" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Monte seus Cursos</h1>
          <p>Monte cursos personalizados para sua empresa.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="imgs/cover_training.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Treine seus Funcionários</h1>
          <p>Treine seus funcionários em novas ferramentas.</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="imgs/cover_retraining.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Recicle seus Funcionários</h1>
          <p>Recicle seus funcionários com novas ferramentas.</p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<div class="container marketing">
  <div class="row">
    <div class="col-lg-4">
      <img src="imgs/java.png" alt="Java" style="height: 140px;">
      <h2>Programação Java para Web</h2>
      <p>Voltado para o desenvolvimento de sites dinâmicos utilizando a linguagem de programação Java.</p>
      <p><a class="btn btn-default" href="cursos/java_web.php" role="button">Mais detalhes »</a></p>
    </div>
    <div class="col-lg-4">
      <img src="imgs/aspnet.png" alt="ASP.NET" style="height: 140px;">
      <h2>Desenvolvimento de aplicações ASP.Net</h2>
      <p>Voltado para o desenvolvimento de aplicações ASP.Net com C#.</p>
      <p><a class="btn btn-default" href="cursos/asp_net.php" role="button">Mais detalhes »</a></p>
    </div>
    <div class="col-lg-4">
      <img src="imgs/html5.png" alt="HTML 5" style="height: 140px;">
      <h2>jQuery, HTML 5 & CSS 3</h2>
      <p>Voltado para o desenvolvimento de layouts de páginas web utilizando JQuery, HTML 5 e CSS 3.</p>
      <p><a class="btn btn-default" href="cursos/jquery_html5_css3.php" role="button">Mais detalhes »</a></p>
    </div>
  </div>
</div>

<?php include("rodape.php"); ?>
