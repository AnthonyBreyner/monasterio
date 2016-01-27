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
    <li><a href="#tabs-1">Listar Productos</a></li>
   </ul>
  <div id="tabs-1" style="height: 50px;overflow-y:scroll;">
   </div>
   	<?php
	$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th> </th>";
echo "<th>Nombre </th>";  
echo "<th>Tipo</th>";  
echo "<th>Existencia</th>";
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
	echo "<td>$row[4]</td>";
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "</tr>"; 
}
echo "</tr>";
echo "</table>";
	?>
  </div>
         </div>
       </div>
    </div>
  </div>
  </body>
</html>
