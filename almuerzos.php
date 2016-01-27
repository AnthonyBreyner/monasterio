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
.resultados table tr td{
	margin:0 auto;
	font-size: 12px;
	color: #444;
}
  </style>
  <script src="js/funciones.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
	<h3>Registros /  Modificaciones</h3>
	<br>
<table class="table" cellpadding="10">
		<style>
		.resultados{
			width: 60%;
			margin: 0 auto;
		}
		.resultadosimg{
			width: 22%;
			margin: 0 auto;
		}
		.resultadosletras{
	color:#A94442;
	font-weight: bold;
}
	</style>
	 <?php
$sql = "select * from recetas where categoria = 'almuerzos'";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta"); 
while($row = mysql_fetch_array($sql)) 
{
echo "<table class='resultados' border='0'>";
echo "<tr>";
echo "<td rowspan='4'class='resultadosimg'>";
echo '<img  src="images/'.$row["imagen"].'">'; 
echo "</td>";
echo "<tr>";
echo "<td class='resultadosletras'>".$row["nombre"]."<td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo $row['descripcion']; 
echo "</td>";
echo "</tr>";
echo"<td><a href='generico.php?nombre=".$row['nombre']."'>Ver Receta.</a></td>";
echo "<tr>";
echo "<td colspan='2'>&nbsp;</td>";
echo "</tr>";
echo "<hr style='color: #0056b2;'/>";
echo "</table>";
} 
echo mysql_error(); 
?> 
</table>
	
</div>
</div>
</body>
</html>
