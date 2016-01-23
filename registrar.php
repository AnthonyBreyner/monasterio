<?php include ("controllers/funciones.php");?>
<?php require("views/cabecera.php"); ?>
  <style type="text/css">

  </style>
    <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <script src="js/funciones.js"> </script>
  <body>
  	 <br>
        <div class="container">
<?php require("views/menu.php"); ?>
<div class="container">
<div class="jumbotron">
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Usuario</a></li>
    <li><a href="#tabs-2">Proovedor</a></li>
    <li><a href="#tabs-3">Mercancia</a></li>
    <li><a href="#tabs-4">Menu</a></li>
  </ul>
  <div id="tabs-1">
  	<form name="form1" method="post" action="model/insertarusuario.php">
  		<?php
if(isset($_GET['sucess'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Registro de Usuarios</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="username" type="text" id="username" class="form-control" placeholder="Usuario" />
                        </div>
                        </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="full_name" type="text" id="full_name" class="form-control" placeholder="nombre" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="email" type="text" id="email" class="form-control" placeholder="Correo Electronico" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" />
                        </div>
                    </div>
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
   </div>
         </div>
    </div>
    </div>
  <div id="tabs-2">
  <form name="form1" method="post" action="model/insertarproveedor.php">
  		<?php
if(isset($_GET['sucess1'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat1'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb1'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Registrar Proveedor</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Proovedor" />
                        </div>
                        </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="rif" type="text" id="rif" class="form-control" placeholder="Rif" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="telefono" type="text" id="telefono" class="form-control" placeholder="Telefono" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="correo" type="text" id="correo" class="form-control" placeholder="Correo Electronico" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="direccion" type="text" id="direccion" class="form-control" placeholder="Direccion" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input name="marcas" type="text" id="marcas" class="form-control" placeholder="Marcas" />
                        </div>
                    </div>
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
   </div>
         </div>
    </div>
  </div>
  <div id="tabs-3">
  <form name="form1" method="post" action="model/insertarmercancia.php">
  		<?php
if(isset($_GET['sucess1'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat1'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb1'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Registrar Mercancia</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Producto" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <select name="tipo" id="tipo">
                        	<option value="ninguno">----------</option>
							<option value="cocina">Cocina</option>    
							<option value="generico">Generico</option>  
						</select>    
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <select name="presentacion" id="presentacion">
                        	<option value="ninguno">----------</option>
							<option value="gramos">Gramos</option>    
							<option value="kilogramos">Kilogramos</option>    
							<option value="unidad">Unidad</option>   
						</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="cantidad" type="text" id="cantidad" class="form-control" placeholder="Cantidad" />
                        </div>
                    </div>
<div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="fechav" type="text" id="fechav" class="form-control" placeholder="Fecha Venc. A/M/D" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="factura" type="text" id="factura" class="form-control" placeholder="Numero de Factura" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="precioc" type="text" id="precioc" class="form-control" placeholder="Precio Compra" />
                        </div>
                    </div>
                    
                   
                    
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
  </div>
           </div>
    </div>
  </div>
    <div id="tabs-4">
		  <form name="form1" method="post" action="model/insertarmenu.php" enctype="multipart/form-data">
  		<?php
if(isset($_GET['sucess1'])){ 
  echo "<script>alert('Datos Ingresados Correctamente')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat1'])){ 
  echo "<script>alert('Error Al Ingresar los Datos')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb1'])){ 
  echo "<script>alert('No debe de Dejar Campos Vacios')</script>";
  echo "<script>window.location='registros.php'</script>";
}else{ 
echo ""; 
} 
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="width: 60%;left:-10%;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Registrar Plato</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Platillo:	" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <select name="categoria" id="categoria">
                        	<option value="ninguno">Categoria</option>
							<option value="desayunos">desayunos</option>    
							<option value="almuerzos">almuerzos</option>
							<option value="cenas">cenas</option>   
						</select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <textarea id="descripcion" name="descripcion" rows="2" cols="35" placeholder="Breve Descripcion:	"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <textarea id="ingredientes" name="ingredientes" rows="8" cols="35" placeholder="Ingredientes:	"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <textarea id="preparacion" name="preparacion" rows="8" cols="35" placeholder="Preparacion:	"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input name="cantidadpersonas" type="text" id="cantidadpersonas" class="form-control" placeholder="Numero de Personas:	" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                           <input name="archivo" type="file" >
                           </div>
                    </div>
                    </div>
                    <input style="padding: 5px;width: 100%;" type="submit"  value="Registrar"> 
                </div>
                 
 </form>
  </div>
           </div>
    </div>
  </div>
  </body>
</html>
