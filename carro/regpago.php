<?php 
session_start(); 
//Asignamos todos los valores guardados en la sesi�n a la variable $carro, como hicimos en las p�ginas anteriores 
$carro=$_SESSION['carro']; 
//$products es la variable que usaremos para mostrar los productos en esta p�gina (separados por '+') 
$products=''; 
//$products2 es la que usaremos para enviar a Paypal (separados por ',') 
$products2=''; 
 foreach($carro as $k => $v){ 
 $unidad=$v['cantidad'];
	  $unidad=$v['nombre']; 
 } 
//eliminamos el �ltimo '+': 
$products=substr($products,0,(strlen($products)-1)); 
//eliminamos la �ltima coma y el espacio que sigue a la misma: 
$products2=substr($products2,0,(strlen($products2)-2)); 
?>

<?php require("../views/cabecera.php"); ?>
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
  <script src="../js/funciones.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("../views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
	<h4>
		<?php 
		
		$nombre = $_GET['nombre']; 
echo "La solicitud del platos:"; echo "<br>";
echo $nombre;echo "<br>";  
echo "Fue procesada con exito.";
		?>
	</h4>
<a href="mispedidos.php">Volver a mis pedidos</a>
	<br>
<table class="table" cellpadding="10">
<?php
$link = mysql_connect("localhost", "root", "za63qj2p"); 
mysql_select_db("monasterio2",$link);
$nombre = $v['nombre'];
$cantidad = $v['cantidad'];  
$sql = "delete from solicitudes where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
echo mysql_error(); 
$link = mysql_connect("localhost", "root", "za63qj2p"); 
mysql_select_db("monasterio2",$link);
$nombre = $v['nombre'];
$cantidad = $v['cantidad'];  
$sql = "delete from solicitudes where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta");
echo mysql_error();
$query = "SELECT existencia FROM mercancia WHERE nombre='$nombre'";
    $result2 = mysql_query($query);  
    while ($registro = mysql_fetch_array($result2)){
$existefinal= $registro['existencia']- $cantidad;
$sql2="UPDATE mercancia SET existencia ='$existefinal' WHERE  nombre='$nombre'";
$result2=mysql_query($sql2);}
?> 
</table>
	
</div>
</div>
</body>
</html>





 
<html> 
<head> 
<title>Finalizar Compra</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!--  
.tit { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #FFFFFF; 
} 
.prod { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #333333; 
} 
h1 { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 20px; 
 color: #990000; 
} 
--> 
</style> 
</head> 
 
<body> 
<!--  Creamos el formulario para enviar a Paypal --> 
<form action="https://www.paypal.com/cgi-bin/webscr" name="f1" id="f1" method="post"> 
<fieldset> 
 <legend class="prod"><strong>Finalizar la Compra</strong> <a href="#" onclick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=400, height=350');"><img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PP.gif" alt="Solution Graphics" border="0" align="absmiddle"></a></legend> 
<input type="hidden" name="shipping" value="0"> 
<input type="hidden" name="cbt" value="Presione aqu� para volver a www.nuestrositio.com >>"> 
<input type="hidden" name="cmd" value="_xclick"> 
 <input type="hidden" name="rm" value="2"> 
 <input type="hidden" name="bn" value="nombre de la empresa vendedora"> 
<input type="hidden" name="business" value="maildelvendedor@dominio.com"> 
<input type="hidden" name="item_name" value="<?php echo $products; ?>"> 
<input type="hidden" name="item_number" value="Nombre del comprador"> 
<input type="hidden" name="amount" value="<?php echo number_format($_GET['costo'],2) ?>"> 
<input type="hidden" name="custom" value="<?php echo $_GET['costo'] ?>"> 
<input type="hidden" name="currency_code" value="USD"> 
<input type="hidden" name="image_url" value=""> 
<input type="hidden" name="return" value="http://www.nuestrodominio.com/ipn_success.php"> 
<input type="hidden" name="cancel_return" value="http://www.nuestrodominio.com/ipn_error.php"> 
<input type="hidden" name="no_shipping" value="0"> 
<input type="hidden" name="no_note" value="0"> 
<!--  Mostramos el detalle de la compra --> 
<table width="50%" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#EABB5D" style=" border-color:#000000; border-style:solid;border-width:1px;"> 
<tr> 
<td align="left" valign="top"><span class="prod"><strong>Detalle de los Productos Seleccionados</strong>:</span><br> 
<span class="texto1negro"> </span><span class="prod"><strong>Productosfffff:</strong> <?php echo $products; ?><br> 
<strong>Pecio Total:</strong> $<?php echo number_format($_GET['costo'],2) ?> </span></td> 
</tr> 
</table> 
<input type="submit" name="Submit" value="Enviar"> 
</fieldset> 
</form> 
 
</body> 
</html> 