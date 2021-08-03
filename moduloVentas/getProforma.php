<?php
	
	include_once("controllerGenerarProforma.php");
	
	if(isset($_GET['i']))
	{
		$serie = $_GET['i'];
		$lista=json_decode($_GET['json'],true);

		include_once("controllerGenerarProforma.php");
		$objcgp=new controllerGenerarProforma;
		
		$resultado = $objcgp->insertardetalleproforma($serie,$lista);
		
		if($resultado==true)
		{
			echo "ok";
		}
		else if($resultado == false)
		{
			echo "error";
		}
		
		
	}
	else if(isset($_GET['jsondatos']))
	{
		$datos=json_decode($_GET['jsondatos'],true);
		//for($i=0;$i<sizeof($datos);$i++){
		//	echo $datos[$i]['cliente'];
		//}
		include_once("controllerGenerarProforma.php");
		$objcgp=new controllerGenerarProforma;
		$resultado = $objcgp->insertarproforma($datos);
		if($resultado==true)
		{
			echo "ok";
		}
		else
		{
			echo "error";
		}
	}
	
	
?>