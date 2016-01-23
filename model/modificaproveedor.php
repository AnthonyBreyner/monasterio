<?php
$link = mysql_connect("localhost", "root", "root"); 
mysql_select_db("monasterio3",$link);
$nombre = ($_POST['nombre']);
$rif= ($_POST['rif']);
$telefono= ($_POST['telefono']);
$correo= ($_POST['email']);
$direccion= ($_POST['direccion']);
$marcas = ($_POST['marcas']);
$id = ($_POST['id']);
$sql="update proveedor set nombre='$nombre',rif='$rif',
telefono='$telefono',correo='$correo',direccion='$direccion',
marcas='$marcas' where id='$id'";
  mysql_query($sql);
  echo "<script>alert('Datos Modificados Correctamente')</script>";
  echo "<script>window.location='../consultaregistros.php'</script>";
?>
