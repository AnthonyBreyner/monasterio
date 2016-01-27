<?php require("views/cabecera.php"); ?>
  <style type="text/css">

  </style>
    <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script src="js/funciones.js"> </script>
<script src="js/jquery.printPage.js"> </script>
 <script>

 $(document).ready(function() {
    $(".btnPrint").printPage();
  });
  </script>

  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Mercancia Existente</a></li>
     <li><a href="#tabs-2">Mercancia Egresada</a></li>
     <li><a href="#tabs-3">Proveedores</a></li>
<li><a href="#tabs-4">Mercancia por Agotarse</a></li>
  </ul>
  <div id="tabs-1">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Mercancia Existente</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from mercancia';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Existencia</th>";
echo "<th>Factura</th>";
echo "<th>Precio de Compra</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    echo "<td>$row[1]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[7]</td>";
echo "<td>$row[8]</td>";
		
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo"<td><a class='btnPrint' href='impresiones/imprimem2.php?registrar=$".$row[1]."'>Imprimir</a></td>";
	?>
   </div>
         </div>
    </div>
    </div>
        <div id="tabs-4">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Productos Por Vencerce</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monasterio3",$link);
$fecha = date('d-m-y');
$consulta_mysql="select * from mercancia ORDER BY fechav";
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='mispedidos.php' method='post'>";
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Cantidad</th>";
echo "<th>Fecha Vencimimiento</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    	echo "<td>$row[1]</td>";
		echo "<td>$row[3]</td>";
		echo "<td  style='color:red;'>$row[4]</td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo"<td><a class='btnPrint' href='impresiones/imprimem4.php?registrar=$".$row[1]."'>Imprimir</a></td>";
echo "</form>";
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
                        Productos Despachados</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from egresos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='mispedidos.php' method='post'>";
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Cantidad</th>";
echo "<th>Fecha Entregado</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    	echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo"<td><a class='btnPrint' href='impresiones/imprimem4.php?registrar=$".$row[1]."'>Imprimir</a></td>";
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
                <div class="panel-body" style="width: 100%;margin: 0 auto;">
                    <h5 class="text-center">
                        Proveedores Disponibles</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from proveedor';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
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
echo"<td><a class='btnPrint' href='impresiones/imprimem3.php?registrar=$".$row[1]."'>Imprimir</a></td>";
echo "</form>";
	?>
   </div>
   </div>
   </div>
<div id="tabs-4">
    <div class="row"
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body" style="width: 50%;margin: 0 auto;">
                    <h5 class="text-center">
                        Productos Despachados</h5>
                   <?php 
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("monasterio3",$link);
$consulta_mysql='select * from egresos';
$resultado_consulta_mysql=mysql_query($consulta_mysql,$link);
echo "<form name='registerform' id='registerform' action='mispedidos.php' method='post'>";
echo "<table id='tablaresultado'  style='width:100%;font-size:13px;'>";  
echo "<tr>";  
echo "<th>Producto</th>";  
echo "<th>Cantidad</th>";
echo "<th>Fecha Entregado</th>";  
echo "</tr>";

while($row=mysql_fetch_array($resultado_consulta_mysql)){
		echo "<tr>";
	    	echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "</tr>";
}
echo "</tr>";
echo "</table>";
echo"<td><a class='btnPrint' href='impresiones/imprimem4.php?registrar=$".$row[1]."'>Imprimir</a></td>";
echo "</form>";
	?>
   </div>
         </div>
    </div>
      </div>
   </div>
  </body>
</html>
