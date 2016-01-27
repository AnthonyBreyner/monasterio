<?php include("config/config.php");?>
<?php include("config/funciones.php");?>
<?php require("views/cabecera.php"); ?>
  <style type="text/css">
.table{
	margin:0 auto;
	padding: 10px;
	width: 40%;
}
.table td{
	margin:0 auto;
}
  </style>
  <script src="js/funciones.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
	<h4>
		<?php 
		
		$nombre = $_GET['nombre']; 
echo "La solicitud de:"; echo "<br>";
echo $nombre;echo "<br>";  
echo "Fue procesada con exito.";
		?>
	</h4>
<a href="mispedidos.php">Volver a mis pedidos</a>
	<br>
<table class="table" cellpadding="10">
<?php
$nombre = $_GET['nombre'];  
$sql = "delete from pedidos where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta"); 
while(mysql_fetch_array($sql)) 
{
echo "gracias";
} 
echo mysql_error(); 
?> 



</table>
	
</div>
</div>
</body>
</html>
