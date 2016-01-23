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
<table class="table" cellpadding="10" width="100">
<td style="width: 100px;">Seleccion de ingredientes:
 <?php 
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='procesaringredientes.php'>";
echo "<table id='tablaresultado' style='width:300px;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Pedido #</th>";
echo "<th>Producto</th>";  
echo "<th>Cantidad a Elegir</th>";
echo "<th>Unidad de Manejo</th>";
echo "</tr>";

while($fila=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
		echo"<td><input name='numero' type='text' id='nombre' value='$fila[0]' /></td>";
		echo"<td><input name='nombre2' type='text' id='nombre' value='$fila[1]' /></td>";
		echo"<td><input name='cantidad' type='text' id='cantidad' value='' /></td>";
		echo"<td><input name='presentacion' type='text' id='presentacion' value='$fila[9]' /></td>";
		echo "</tr>";
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
