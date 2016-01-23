<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = ($_POST['nombre']);
$email = ($_POST['email']);
$name = ($_POST['name']);
$id = ($_POST['id']);
$sql="update usuarios set full_name='$nombre',email='$email',username='$name' where id='$id'";
  mysql_query($sql);
  echo "<script>alert('Datos Modificados Correctamente')</script>";
  echo "<script>window.location='../consultaregistros.php'</script>";
?>
