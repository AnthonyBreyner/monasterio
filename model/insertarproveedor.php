<?php
include('../config.php');
    // Primero comprobamos que ning�n campo est� vac�o y que todos los campos existan.
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['rif']) && !empty($_POST['rif']) &&
    isset($_POST['telefono']) && !empty($_POST['telefono']) &&
    isset ($_POST['correo']) && !empty($_POST['correo']) &&
    isset ($_POST['direccion']) && !empty($_POST['direccion']) &&
	isset ($_POST['marcas']) && !empty($_POST['marcas']) ) 
    {
        // Si entramos es que todo se ha realizado correctamente
        $nombre = htmlentities($_POST['nombre']);
		$rif = htmlentities($_POST['rif']);
		$telefono = htmlentities($_POST['telefono']);
		$correo = htmlentities($_POST['correo']);
		$direccion = htmlentities($_POST['direccion']);
		$marcas = htmlentities($_POST['marcas']);
		
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);
		
		$queEmp = "SELECT nombre FROM proveedor WHERE nombre='$nombre'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "el proveedor ya esta disponible";
		exit();
		}
		
		$queEmp = "SELECT correo FROM proveedor WHERE correo='$correo'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "El mail ingresado ya esta asignado a un proveedor";
		exit();
		}
		
        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO proveedor (nombre,rif,telefono,correo,direccion,marcas)
        VALUES ('{$nombre}','{$rif}','{$telefono}','{$correo}','{$direccion}','{$marcas}')",$link);

        // Ahora comprobaremos que todo ha ido correctamente
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