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
	<h3 style="	color:#A94442;
	font-weight: bold;">
		<?php 
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
$sql = "select * from recetas where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta"); 
while($row = mysql_fetch_array($sql)) 
{
echo "<table class='resultados' border='0'>";
echo "<tr>";
echo "<td>";
echo '<img src="images/'.$row["imagen"].'">'; 
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<span style='color:#A94442;'>Cantidad:&nbsp;</span>".$row['cantidadpersonas']."&nbsp;personas";
echo "<hr/>"; 
echo "</td>";
echo"</tr>";
echo "<tr>";
echo "<td>";
echo "<span style='color:#A94442;'>Ingredientes:&nbsp;</span>".$row['ingredientes'];
echo "<hr/>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "<span style='color:#A94442;'>Preparacion:&nbsp;</span>".$row['preparacion'];
echo "<hr/>"; 
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo"<a href='hacerpedido.php?nombre=".$row['nombre']."'>Hacer Pedido</a>";
echo "<hr/>";
echo "</td>";
echo "</tr>";

echo "</table>";
} 
echo mysql_error(); 
?> 


</table>
	
</div>
</div>
</body>
</html>
