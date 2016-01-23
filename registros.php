<?php 
session_start();
if(!isset($_SESSION["s_username"])) {
	header("location:login.php");
} else {
?>
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
	<h3>Registros /  Consultas</h3>
	<br>
<table class="table" cellpadding="10">
	<tr>
		<td>
			<a href="registrar.php">
				<img src="images/registrar.jpeg" width="100" />
			</a>	
		</td>
		<td>
			<a href="consultaregistros.php">
			<img src="images/editar.jpeg" width="100"/>
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="registrar.php">Registrar</a></td>
		<td><a href="consultaregistros.php">Consultar Registros</a></td>
	</tr>
</table>	
</div>
</div>
<?php
}
?>
