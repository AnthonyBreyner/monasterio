<?php 
session_start();
if(!isset($_SESSION["s_username"])) {
	header("location:index.php");
} else {
?>
<?php
	if(isset($_SESSION['s_username'])){
		switch ($_SESSION['s_username']){
			case 'admin':
				include("views/menu1.php");
				break;
			case 'cocina':
				include("views/menu2.php");
				break;
			case 'almacen':
				include("views/menu3.php");
				break;
		}
	}
	?>
	<?php
}
?>