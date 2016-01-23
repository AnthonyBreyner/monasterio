<?php
include('../config.php');
	if(isset($_POST['producto']) && !empty($_POST['producto']) &&
    isset($_POST['cantidad']) && !empty($_POST['cantidad']) &&
    isset($_POST['observaciones']) && !empty($_POST['observaciones'])) 
    {
        $producto = htmlentities($_POST['producto']);
		$cantidad = htmlentities($_POST['cantidad']);
		$observaciones = htmlentities($_POST['observaciones']);
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);	
        mysql_query("INSERT INTO pedidos (nombre,cantidad,observaciones)
        VALUES ('{$producto}','{$cantidad}','{$observaciones}')",$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) {
            header ("Location: ../solicitudes.php?errordat1");
        } else {
             header ("Location: ../solicitudes.php?sucess1");
        }

    } else {
         header ("Location: ../solicitudes.php?errordb1");
    }
?>