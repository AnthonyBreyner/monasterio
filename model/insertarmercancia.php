<?php
include('../config.php');
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['tipo']) && !empty($_POST['tipo']) &&
    isset($_POST['presentacion']) && !empty($_POST['presentacion']) &&
    isset ($_POST['cantidad']) && !empty($_POST['cantidad'])) 
    {
        $nombre = htmlentities($_POST['nombre']);
		$tipo = htmlentities($_POST['tipo']);
		$presentacion = htmlentities($_POST['presentacion']);
		$cantidad = ($_POST['cantidad']);
		$precioc = ($_POST['factura']);
		$factura = ($_POST['precioc']);
$fechav = ($_POST['fechav']);
		$fecha = date('d-m-y');
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);	
		$queEmp = "SELECT nombre FROM mercancia WHERE nombre='$nombre' && factura='$factura'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "La Mercancia ya Existe";
		exit();
		}
        mysql_query("INSERT INTO mercancia (nombre,tipo,existencia,fechav,dia_creacion,factura,preciocompra,Presentacion)
        VALUES ('{$nombre}','{$tipo}','{$cantidad}','{$fechav}','{$fecha}','{$factura}','{$precioc}','{$presentacion}')",$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) {
            header ("Location: ../registrar.php?errordat1");
        } else {
             header ("Location: ../registrar.php?sucess1");
        }

    } else {
         header ("Location: ../registrar.php?errordb1");
    }
?>
