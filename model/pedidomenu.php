<?php
include('../config.php');
$nombre = $_GET['nombre'];
echo $nombre . "<br>";
mysql_query("INSERT INTO solicitudes (nombre)
        VALUES ('{$nombre}')",$link);
        $my_error = mysql_error($link);
        if(!empty($my_error)) {

            header ("Location: ../generico.php?errordat1");

        } else {

             header ("Location: ../generico.php?sucess1");
        }
?>