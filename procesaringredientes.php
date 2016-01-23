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
		 $cantidad = ($_POST['nombre']);
       echo "$cantidad";
		?>
		
		<?php
$link = mysql_connect("localhost", "root", "root"); 	
mysql_select_db("monasterio3",$link);
$nombre = $_POST['nombre'];
 mysql_select_db($dbname,$link);	
$sql = "delete from platospedidos where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
echo mysql_error();
?> 
	</h3>
	<br>
Gracias por su Despacho
volver a mis pedidos:

	</form>
</table>
	
</div>
</div>
</body>
</html>
