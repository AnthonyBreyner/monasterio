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
	<h3 style="	color:#A94442;
	font-weight: bold;">
		<?php
			$nombre = $_GET['nombre'];
			echo $nombre;
		?>
	</h3>
	<?php
		echo"Ingredientes: ";
		$ingredientes = $_GET['ingredientes'];
		echo $ingredientes;
	?>



	<br>
<table class="table" cellpadding="10" width="100">
<td style="width: 100px;">Seleccion de ingredientes:
 <?php
$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='procesaringredientes.php' method='post'>";
echo "<table id='tablaresultado' style='width:300px;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Cantidad #</th>";
echo "<th>Producto</th>";  
echo "<th>Cantidad a Elegir</th>";
echo "<th>Unidad de Manejo</th>";
echo "</tr>";
$i=0;
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	echo"<input name='id_$i' type='hidden' id='id_$i' value='$fila[0]' />";
		echo"<td><input name='numero' disabled type='text' id='nombre_$fila[0]' value='$fila[3]' /></td>";
		echo"<td><input name='nombre2' disabled type='text' id='nombre' value='$fila[1]' /></td>";
		echo"<td><input name='cantidad_$i' type='text' id='cantidad_$i' value='' /></td>";
		echo"<td><input name='presentacion_$fila[0]' disabled type='text' id='presentacion_$fila[0]' value='$fila[9]' /></td>";
	echo"<td><input type='checkbox' name='condiciones_$i' /></td>";
	echo "</tr>";
	$i++;
}
echo "</tr>";
echo"<td><input type='submit' name='Submit' value='Despachar'></td>";
echo "</table>";
echo "</form>";
	?>
</td>
	</table>
	</form>
</table>
	
</div>
</div>
</body>
</html>
