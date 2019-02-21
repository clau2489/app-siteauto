<!--
Este es el layout principal, a partir de este layout o plantilla se muestran el resto de "vistas"
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?=Html::title('Web - Autoadiministrable');?>
    <?=Html::link('res/bootstrap/css/bootstrap.css'); ?>
    <?=Html::link('res/css/micss.css'); ?>
    <?=Html::link('res/font-awesome/css/fontawesome-all.min.css'); ?>
    <?=Html::script('res/js/jquery.min.js'); ?>
    <?=Html::script('res/js/function.js'); ?>
  </head>

  <body>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><b>Sitio Autoadministrable</b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">Inicio</a></li>
        <li><a href="./?view=blog">Noticias</a></li>
        <li><a href="admin/index.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="cuerpo">
  <?php 
    View::load("index");
  ?>  
</div>
<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aligncenter">
            <a href="#"><i class="foot fa fa-rss"></i></a>
            <a href="#"><i class="foot fa fa-facebook"></i></a>
            <a href="#"><i class="foot fa fa-instagram"></i></a>
            <a href="#"><i class="foot fa fa-youtube"></i></a>
            <br>
            <p>
              &copy; clublosaromos - Todos los derechos reservados
            </p>
            <div class="credits">
              Sitio creado por <a href="http://www.oestedev.com/">Oeste-DEV</a>
            </div>
          </div>
        </div>                             
      </div>
    </div>
</footer>
<?= Html::script('res/bootstrap/js/bootstrap.min.js'); ?>
  </body>
</html>
