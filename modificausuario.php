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
<table class="table" cellpadding="10">
<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = $_GET['nombre'];  
$sql = "select * from usuarios where full_name ='$nombre' ";
$sql = mysql_query($sql) or die("No se pudo realizar la consulta"); 
while($row = mysql_fetch_array($sql)) 
{	 
	?>

	<form  method=Post name=frm action="model/modificausuario.php">
	    <table>
		<tr>
		<td colspan=2>
		Formulario de Modificación</td>
	    </tr>
	  <tr>
	    <td> Nombre</td>
	    <td><input name='nombre'  type='text' maxlength='20' value="<?php echo $row['full_name']; ?>"></td>
	    </tr>
		
	    <td> Email</td>
	    <td><input name='email'  type='text' maxlength='20' value="<?php echo $row['email']; ?>"></td>
	    </tr>
	  <tr>
	    <td> Nombre de Usuario</td>
	    <td><input name='name'  type='text' maxlength='20' value="<?php echo $row['username']; ?>"></td>
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
