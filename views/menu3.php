
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Monastericccco v1.0</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="inicio.php">Inicio</a></li>
            	<li><a href="solicitudes.php">Solcitudes</a></li>
            	<li><a href="mispedidos.php">Mis Pedidos</a></li>
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