<?php include ("controllers/funciones.php");?>
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
    <li><a href="#tabs-1">Listar Usuarios</a></li>
    <li><a href="#tabs-2">Listar Proovedores</a></li>
    <li><a href="#tabs-3">Listar Mercancia</a></li>
    <li><a href="#tabs-4">Listar Platos</a></li>
  </ul>
  <div id="tabs-1" style="height: 200px;overflow-y:scroll;">
  	<?php
  	$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
	$consulta_mysql='select * from usuarios';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Nombre </th>";  
echo "<th></th>";  
echo "<th>Email</th>"; 
echo "<th>Nombre Usuario</th>";
echo "<th>Editar</th>";
echo "<th>Eliminar</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo"<td><a href='modificausuario.php?nombre=".$row[1]."'><img width=20;  src='images/editar.png' /></a></td>";	
	echo"<td><a href='eliminarusua.php?nombre=".$row[1]."'><img width=20; src='images/eliminar.png' /></a></td>";
	echo "</tr>"; 
}
echo "</tr>";
echo "</table>";
	?>
  </div>
  <div id="tabs-2" style="height: 200px;overflow-y:scroll;">
  	<?php
	$consulta_mysql='select * from proveedor';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Nombre </th>";  
echo "<th>Rif</th>";  
echo "<th>Telefono</th>"; 
echo "<th>Correo</th>";  
echo "<th>Direccion</th>";
echo "<th>Editar</th>";
echo "<th>Eliminar</th>";
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo"<td><a href='modificaproveedor.php?nombre=".$row[1]."'><img width=20; src='images/editar.png' /></a></td>";
	echo"<td><a href='eliminarpro.php?nombre=".$row[1]."'><img width=20; src='images/eliminar.png' /></a></td>";
		
	 echo "</tr>";
}
echo "</tr>";
echo "</table>";
	?>
  </div>
    <div id="tabs-3" style="height: 200px;overflow-y:scroll;">
  	<?php
	$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th> </th>";
echo "<th>Nombre </th>";  
echo "<th>Categoria</th>";  
echo "<th>Existencia</th>";
echo "<th>Editar</th>";
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
	echo "<td>$row[4]</td>";
    echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo"<td><a href='modificamercancia.php?nombre=".$row[1]."'><img width=20; src='images/editar.png' /></a></td>";
	
	 echo "</tr>"; 
}
echo "</tr>";
echo "</table>";
	?>
  </div>
      <div id="tabs-4" style="height: 200px;overflow-y:scroll;">
  	<?php
	$consulta_mysql='select * from recetas';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado' style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Imagen</th>";
echo "<th>Receta </th>";  
echo "<th>Categoria</th>";  
echo "<th>Descripcion</th>"; 
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
	echo "<tr>";
	echo "<th><img src='images/$row[4]' /> </th>";
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
