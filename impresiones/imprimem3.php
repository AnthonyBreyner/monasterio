<?php include("../includes/connection.php"); ?>	
<?php 
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from proveedor';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table>";
echo "<tr>"; 
echo "<td colspan='2'>"; 
echo "<img style='width:14%;' src='escudoart.jpg'/>Legionarios de Cristo."; 
echo "<td>"; 
echo "</tr>";
echo "</table>";
echo "<table  style='width:1000px;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Nombre</th>";  
echo "<th>Rif</th>";
echo "<th>Telefono</th>";  
echo "<th>Correo</th>";  
echo "<th>Direccion</th>";  
echo "<th>Marcas</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    	echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo "</form>";
	?>
