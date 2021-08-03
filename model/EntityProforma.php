<?php
	include_once("conexion_singleton.php");
	class EntityProforma
	{
		public function insertarproforma($datos)
		{
			conexion_singleton::getInstancia();
			$serie = $datos[0]['serie'];
			$cliente = $datos[0]['cliente'];
			$fecha=$datos[0]['fecha'];
			$hora=$datos[0]['hora'];
			$sql = "insert into proformas (serie,cliente,fecha,hora,estado) values('$serie','$cliente','$fecha','$hora',0)";
			$resultado = mysql_query($sql);
			return $resultado;
		}
	}
?>
