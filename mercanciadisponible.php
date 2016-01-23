<?php 
session_start();
if(!isset($_SESSION["s_username"])) {
	header("location:login.php");
} else {
?>
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
	<h3>Registros /  Consultas</h3>
	<br>
<table class="table" cellpadding="10">
	<tr>
		<td>
<?php
	$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:80%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Nombre </th>";  
echo "<th>Clave</th>";
echo "<th></th>";  
echo "<th></th>"; 
echo "<th></th>"; 
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo"<td><a href='modificausua.php?nombre=".$row[1]."'><img width=20; src='img/editar.png' /></a></td>";	
	echo"<td><a href='eliminarusua.php?nombre=".$row[1]."'><img width=20;  src='img/eliminar.png' /></a></td>"; 
	echo"<td><a class='btnPrint' href='impresiones/imprimeu2.php?registrar=$row[1]'><img width=20;  src='img/imprimir.png' /></a></td>"; 
	echo "</tr>"; 
}
echo "</tr>";
echo "</table>";
	echo"<td><a class='btnPrint' href='impresiones/imprimeu.php'><img width=20;  src='img/imprimir.png' /></a></td>";echo "</tr>"; 
	?>		
</td>
	</tr>
</table>	
</div>
</div>
<?php
}
?>
