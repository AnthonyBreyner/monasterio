<?php
include('../config.php');
	if(isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['cantidad']) && !empty($_POST['cantidad'])) 
    {
        $producto = htmlentities($_POST['name']);
		$cantidad = htmlentities($_POST['cantidad']);
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);	
        mysql_query("INSERT INTO solicitudes (nombre,cantidad)
        VALUES ('{$producto}','{$cantidad}')",$link);
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