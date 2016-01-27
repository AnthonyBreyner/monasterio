<?php include("config/config.php");?>
<?php include("config/funciones.php");?>
<?php require("views/cabecera.php"); ?>
  <style type="text/css">

  </style>
    <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script src="js/funciones.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Solcitud de Nueva Mercancia</a></li>
    <li><a href="#tabs-2">Solicitar Mercancia</a></li>
  </ul>
  <div id="tabs-1">
  	<form name="form1" method="post" action="model/solicitudmercancianueva.php">
  		<?php
if(isset($_GET['sucess1'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat1'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb1'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                       Solicitud de Nueva Mercancia</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="producto" type="text" id="producto" class="form-control" placeholder="Producto" />
                        </div>
                        </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="cantidad" type="text" id="cantidad" class="form-control" placeholder="Cantidad" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="observaciones" type="text" id="observaciones" class="form-control" placeholder="observaciones" />
                        </div>
                    </div>
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
   </div>
         </div>
    </div>
    </div>
  <div id="tabs-2">
  <form name="form1" method="post" action="model/solicitudmercancia.php">
  		<?php
if(isset($_GET['sucess1'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat1'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb1'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='solicitudes.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Solicitar Mercancia</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <?php
	$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
  
echo "<select name='name' id='select'>";
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
    echo "<option value='".$fila['nombre']."'>".$fila['nombre']."</option>";
}
echo "</select>";
	?>
                         </div>
                        </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="cantidad" type="text" id="cantidad" class="form-control" placeholder="cantidad" />
                        </div>
                    </div>
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
   </div>
         </div>
   </div>
  </div>
  </body>
</html>
