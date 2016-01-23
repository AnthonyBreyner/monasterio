<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Usuarios v2.0</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style type="text/css">
  body{background: #000;}

     .media
    {
        /*box-shadow:0px 0px 4px -2px #000;*/
        margin: 20px 0;
        padding:30px;
    }
    .dp
    {
        border:10px solid #eee;
        transition: all 0.2s ease-in-out;
    }
    .dp:hover
    {
        border:2px solid #eee;
        transform:rotate(360deg);
        -ms-transform:rotate(360deg);  
        -webkit-transform:rotate(360deg);  
        /*-webkit-font-smoothing:antialiased;*/
    }
  </style>
  <body>
    <br>
        <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistema v2.0</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="inicio.php">Inicio</a></li>
              <li class="active"><a href="usuarios.php">Usuarios</a></li>
              <li class="active"><a href="carro/catalogo.php">carro</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="">Fecha:
              	<?php
              	// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
              	date_default_timezone_set('UTC');
              	//Imprimimos la fecha actual dandole un formato
              	echo date("d / m / Y");
              	?></a></li>
              <li><a href="cerrar.php">Salir</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
<div class="row">


    <div class="col-lg-5">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object dp img-circle" src="images/jesuxherrera.jpg" style="width: 100px;height:100px;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">Jesux Herrera <small> México</small></h4>
                <h5>Blogger en  <a href="http://www.pilaresdelcodigo.wordpress.org">Pilares Del Codigo</a></h5>
                <hr style="margin:8px auto">

                <span class="label label-default">HTML5/CSS3</span>
                <span class="label label-default">jQuery</span>
                <span class="label label-info">Wordpress</span>
            </div>
        </div>

    </div>

    

</div>
      </div>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>