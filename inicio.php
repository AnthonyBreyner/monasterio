<?php 
session_start();
if(!isset($_SESSION["s_username"])) {
    header("location:index.php");
} else {
?>
<?php require("views/cabecera.php"); ?>
  <body>
  	 <br>
        <div class="container"">
<?php
	if(isset($_SESSION['s_username'])){
		switch ($_SESSION['s_username']){
			case 'admin':
				require("views/menu1.php");
				break;
				case 'cocina':
				require("views/menu2.php");
				break;
				case 'almacen':
				require("views/menu3.php");
				break;
		}
	}
	?>
      <div class="jumbotron"style="background: #F8F8F8;">
        <h3>Sistema de Control v1.0</h3>
        <p>
        	Bienvenido Usuario.	
     </p>
      </div>
    </div>
  </body>
</html>
<?php
}
?>