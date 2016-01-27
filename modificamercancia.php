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
	<br>
<table class="table" cellpadding="10">
<?php
$nombre = $_GET['nombre'];  
$sql = "select * from mercancia where nombre ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta"); 
while($row = mysql_fetch_array($sql)) 
{	 
	?>

	<form  method=Post name=frm action="model/modificamercancia.php">
	    <table>
		<tr>
		<td colspan=2>
		Formulario de Modificación</td>
	    </tr>
	  <tr>
	    <td> Nombre</td>
	    <td><input name='nombre'  type='text' maxlength='20' value="<?php echo $row['nombre']; ?>"></td>
	    </tr>
		
	    <td> Existencia</td>
	    <td><input name='existencia'  type='text' maxlength='20' value="<?php echo $row['existencia']; ?>"></td>
	    </tr>  
	    <tr>
	    <td>&nbsp;</td>
	    <td><input name='id' type='hidden' value='<?php echo $row['id']; ?>'></td>
	  </tr>
	  <tr>
	    <td>&nbsp;</td>
	    <td><input name='submit' type='submit' value='Modificar'></td>
	  </tr>
	  
	</table>
	</form>

	<?php
	}
?> 


</table>
	
</div>
</div>
</body>
</html>
