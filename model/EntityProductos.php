<?php
	
	include_once("conexion_singleton.php");
	class EntityProductos
	{
		public function obtenerProductos()
		{
			conexion_singleton::getInstancia();
			$SQL = "select * from productos";
			$resultado = mysql_query($SQL);
			
			$filas = mysql_num_rows($resultado);
			for( $i=0;$i<$filas;$i++)
			{
				$linea[$i] = mysql_fetch_array($resultado);
			}
			
			return($linea);
			
		}
		
		public function obtenerproductobuscado($descripcion)
		{
			conexion_singleton::getInstancia();
			$SQL = "select * from productos where descripcion like '%$descripcion%'";
			$resultado = mysql_query($SQL);
			
			$filas = mysql_num_rows($resultado);
			for( $i=0;$i<$filas;$i++)
			{
				$linea[$i] = mysql_fetch_array($resultado);
			}
			
			return($linea);
			
		}

		public function guardarproducto($cod,$stock,$precio,$descripcion)
		{
			
			conexion_singleton::getInstancia();
			$SQL = "insert into productos values(NULL,'$cod',$stock,$precio,'$descripcion')";
			$resultado = mysql_query($SQL);
			
				
		}
		 
		public function editarProducto($cod,$stock,$precio,$descripcion)
		{
			
			conexion_singleton::getInstancia();
			$SQL = "update productos set stock = $stock, descripcion = '$descripcion', precio=$precio where codigo='$cod'";
			$resultado = mysql_query($SQL);
			
				
		}
		
		 
	}

?>
