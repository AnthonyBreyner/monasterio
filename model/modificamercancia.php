<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = ($_POST['nombre']);
$existencia = ($_POST['existencia']);
$id = ($_POST['id']);
$sql="update mercancia set nombre='$nombre',existencia='$existencia' where id='$id'";
  mysql_query($sql);
  echo "<script>alert('Datos Modificados Correctamente')</script>";
  echo "<script>window.location='../consultaregistros.php'</script>";
?>
