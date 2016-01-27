<?php include("config/config.php");?>
<?php include "config/funciones.php";?>
<?php require("views/cabecera.php"); ?>
<style type="text/css" xmlns="http://www.w3.org/1999/html">
.table{
	margin:0 auto;
	padding: 10px;
	width: 40%;
}
.table td{
	margin:0 auto;
}
  </style>
  <script src="js/functions.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">

		<?php 
		 $cantidad = ($_POST['nombre']);
       echo "$cantidad";
		?>
		
		<?php
$nombre = $_POST['nombre'];
		print('<pre>');
		foreach($_POST as $clave=>$valor){

			if($valor=='on'){

				$elemento=explode('_',$clave);
				$id= $_POST['id_'.$elemento[1]];
				$cantidad= $_POST['cantidad_'.$elemento[1]];
				if($cantidad=='')$cantidad=0;
				$sql = "update mercancia set existencia=existencia-$cantidad where id =$id";
				//echo $sql.$cantidad."<br>";
				$sqlquery = mysql_query($sql) or die("No se pudo realizar la consulta");
				echo mysql_error();
			}

		}


?>
		Gracias por su Despacho.
		<a href="mispedidos.php"> Volver a mis pedidos.</a>

	</form>
</table>
	
</div>
</div>
</body>
</html>
