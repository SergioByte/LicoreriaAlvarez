<?php

		if(isset($_POST['btnGestionarProductos']))
		{
			include_once("../model/EntityProductos.php");
			$objEntityProductos = new EntityProductos;
			$productos = $objEntityProductos->obtenerProductos();

            include_once("formProductos.php");
            $objformProductos = new formProductos;
            $objformProductos->formGestionarProductoShow($productos);
		}
		else
		{
	
			include_once("../shared/formMensajeSistema.php");
			$objNuevoMensaje = new formMensajeSistema;
			$objNuevoMensaje->formMensajeSistemaShow("ACCESO DENEGADO","<a href='../index.php'>Ir al inicio</a>");	
		
		}
	

?>