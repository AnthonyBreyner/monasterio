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
	<h3>Recetarios</h3>
	<br>
<table class="table" cellpadding="10">
	<tr>
		<td>
			<a href="desayunos.php">
				<img src="images/desayunos.jpeg" width="100" />
			</a>	
		</td>
		<td>
			<a href="almuerzos.php">
			<img src="images/almuerzos.jpeg" width="100"/>
			</a>
		</td>
		<td>
			<a href="cenas.php">
			<img src="images/cenas.jpeg" width="100"/>
			</a>
		</td>
	</tr>
	<tr>
		<td><a href="desayunos.php">Desayunos</a></td>
		<td><a href="almuerzos.php">Almuerzos</a></td>
		<td><a href="cenas.php">Cenas</a></td>
	</tr>
</table>
	
</div>
</div>
</body>
</html>
