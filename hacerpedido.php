<?php include ("controllers/funciones.php");?>
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
	<h3>
		<?php 
		echo "<p>Nuevo Pedido Para Menu</p>";
		$nombre = $_GET['nombre']; 
echo $nombre;  
		?>
	</h3>
	<br>
<table class="table" cellpadding="10">
<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = $_GET['nombre']; 
mysql_query("INSERT INTO platospedidos (nombre)
        VALUES ('{$nombre}')",$link);
$sql = mysql_query($sql) or die("Gracias por realizar el pedido..."); 
$my_error = mysql_error($link);
echo $my_error(); 
?> 


</table>
	
</div>
</div>
</body>
</html>
