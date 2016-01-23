<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = $_GET['nombre'];
$sql = "delete from usuarios where full_name = '$nombre'";
  mysql_query($sql);
  echo "<script>alert('Datos Eliminados Correctamente')</script>";
  echo "<script>window.location='consultaregistros.php'</script>";
?>
