<?php
	include_once("../model/EntityProductos.php");
	include_once("controllerGenerarProforma.php");
	
	if(isset($_GET['q']))
	{
		//echo "ok";
		$descripcion=$_GET['q'];
		if(strlen($descripcion)==0){
			$objcontroller = new controllerGenerarProforma;
			$productos = $objcontroller->obtenerProductos();
			echo (json_encode($productos));
		}
		else
		{
			$objcontroller = new controllerGenerarProforma;
			$productos = $objcontroller->obtenerproductobuscado($descripcion);
			echo (json_encode($productos));
		}
		
		
	}
	

?>
