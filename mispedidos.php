<?php require("views/cabecera.php"); ?>
  <style type="text/css">

  </style>
    <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
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
    <li><a href="#tabs-1">Productos por Comprar</a></li>
     <li><a href="#tabs-2">Productos por Despachar</a></li>
     <li><a href="#tabs-3">Ingredientes por Despachar</a></li>
  </ul>
  <div id="tabs-1">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Productos por Comprar</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from pedidos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Motivo</th>";
echo "<th>Cantidad</th>";
echo "<th>Status</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo"<td><a href='porcomprar.php?nombre=".$row[1]."'>Comprado...</a></td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
	?>
   </div>
         </div>
    </div>
    </div>
        <div id="tabs-2">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Productos por Despachar</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from solicitudes';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='mispedidos.php' method='post'>";
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Cantidad</th>";
echo "<th>Status</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo"<td><a href='pordespachar.php?nombre=".$row[1]."&cantidad=".$row[2]."'>Despachado...</a></td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo "</form>";
	?>
   </div>
         </div>
    </div>
      </div>
       <div id="tabs-3">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Ingredientes por Despachar</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from platospedidos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='mispedidos.php' method='post'>";
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Plato</th>";  
echo "<th>Status</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    echo "<td>$row[1]</td>";
		echo"<td><a href='guardamenu.php?nombre=".$row[1]."'>Seleccionar y Despachar...</a></td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo "</form>";
	?>
   </div>
   </div>
   </div>
   </div>
  </body>
</html>
