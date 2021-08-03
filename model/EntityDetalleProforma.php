<?php
	include_once("conexion_singleton.php");
	class EntityDetalleProforma
	{
		public function insertardetalleproforma($serie,$lista)
		{
			
			$sql = "select idproforma from proformas where serie = '$serie'";
			conexion_singleton::getInstancia();
			$resultado = mysql_query($sql);
			$idproforma = mysql_result($resultado,0);
			for($i = 0;$i<sizeof($lista);$i++)
			{
				
				$idproducto = $lista[$i]['idproducto'];
				$cantidad = $lista[$i]['cantidad'];
				$monto = $lista[$i]['total'];
				
				$insert = "insert into detalleproforma (idproducto,cantidad,monto,idproforma) values($idproducto,$cantidad,$monto,$idproforma)";
				$respuesta = mysql_query($insert);
				
			}
			return $respuesta;
		}
	}
?>