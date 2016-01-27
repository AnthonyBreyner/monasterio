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
$cantidad = $_GET['cantidad'];
$fecha=date("d-m-y");  
 mysql_select_db($dbname,$link);	
        mysql_query("INSERT INTO egresos (nombre,existencia,fecha)
        VALUES ('{$nombre}','{$cantidad}','{$fecha}')",$link);
        $my_error = mysql_error($link);
$sql = "delete from solicitudes where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
echo mysql_error();
$query = "SELECT existencia FROM mercancia WHERE nombre='$nombre'";
    $result2 = mysql_query($query);  
    while ($registro = mysql_fetch_array($result2)){
$existefinal= $registro['existencia']- $cantidad;
$sql2="UPDATE mercancia SET existencia ='$existefinal' WHERE  nombre='$nombre'";
$result2=mysql_query($sql2);}
?> 



</table>
	
</div>
</div>
</body>
</html>
