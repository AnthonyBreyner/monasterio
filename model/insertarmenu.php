<?php
include('../config.php');
    // Primero comprobamos que ning�n campo est� vac�o y que todos los campos existan.
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['categoria']) && !empty($_POST['categoria']) &&
	isset($_POST['descripcion']) && !empty($_POST['descripcion']) &&
	isset($_POST['ingredientes']) && !empty($_POST['ingredientes']) &&
	isset($_POST['preparacion']) && !empty($_POST['preparacion']) &&
	isset($_POST['cantidadpersonas']) && !empty($_POST['cantidadpersonas'])
	) 
    {  
        // Si entramos es que todo se ha realizado correctamente
        $nombre = ($_POST['nombre']);
		$categoria = ($_POST['categoria']);
		$descripcion = ($_POST['descripcion']);
		$ingredientes = ($_POST['ingredientes']);
		$preparacion = ($_POST['preparacion']);
		$cantidadpersonas= ($_POST['cantidadpersonas']);
		$archivo=($_FILES['archivo']['name']);
		
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);
		
		$queEmp = "SELECT nombre FROM recetas WHERE nombre='$nombre'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "el proveedor ya esta disponible";
		exit();
		}
		
        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO recetas (nombre,categoria,descripcion,imagen,ingredientes,preparacion,cantidadpersonas)
        VALUES ('{$nombre}','{$categoria}','{$descripcion}','{$archivo}','{$ingredientes}','{$preparacion}','{$cantidadpersonas}')",$link);

        // Ahora comprobaremos que todo ha ido correctamente
        $my_error = mysql_error($link);

        if(!empty($my_error)) {

            header ("Location: ../registrar.php?errordat1");

        } else {

             header ("Location: ../registrar.php?sucess1");
$ruta="../images/";//ruta carpeta donde queremos copiar las imágenes
$uploadfile_temporal=$_FILES['archivo']['tmp_name'];
$uploadfile_nombre=$ruta.$_FILES['archivo']['name'];
if (is_uploaded_file($uploadfile_temporal))
{
    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);
    return true;
}
        }

    } else {

         header ("Location: ../registrar.php?errordb1");

    }

?>