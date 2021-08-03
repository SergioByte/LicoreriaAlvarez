<?php
	include_once("../shared/formularioGeneral.php");
	class formProductos extends formularioGeneral
	{
		
		public function formGestionarProductoShow($productos)
		{
			$s_productos = $productos;
			$this->cabezaShow("PRODUCTOS");
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<style type="text/css">
			
				#contentproductos{
					float: right;
					margin-right:100px;
				}
				#nuevoProducto{
					float: left;
					margin-left:150px;
				}
				#Ventana{
					background:#FFFFFF;
					position:absolute;
					left:34%;
					top: 30%;
					display:none;
				}
				h2{
					text-align:center
				}
			</style>
			<title>PRODUCTOS</title>
			</head>
			<body>
			<div id="nuevoProducto">
				<table>
					<tr><td>Nombre del Producto</td></tr>
					<tr><td><textarea name="NombreProducto" id="NombreProducto"></textarea></td></tr>
					<tr><td>Precio</td></tr>
					<tr><td><input name="Precio" type="number" id="Precio"/></td></tr>
					<tr>
						<td>Stock</td>
						<td><input name="Stock" type="number" id="Stock"/></td>
					</tr>
					<tr>
						<?php $numfilas=sizeof($productos)+1?>
						<td><input name="btnGuardar" type="submit" onclick="guardarProducto(<?php echo($numfilas); ?>)" value="Guardar"/></td>
						<td><button id="btnLimpiar" onclick="limpiar()">Limpiar</button></td>
					</tr>
					<tr><td><form  method="post" action="../moduloSeguridad/getUsuario.php"><input type="submit" name="btnvolvermenu" value="Volver" /></form></td></tr>
				</table>
			</div>	
			<!-- este contenedor contendr� la tabla de productos -->
			<div id="contentproductos">
				<table width="534" border="1" cellpadding="5">
			  		<tr>
						<td width="87">C&oacute;d.Producto</td>
						<td width="36">Stock</td>
						<td width="177">Descripci&oacute;n</td>
						<td width="39">Precio</td>
						<td width="52">Editar</td>
			  		</tr>
			  		<?php
			  		$numfilas = sizeof($productos); 
			  		for($i=0;$i<$numfilas;$i++)
			  		{
			  		?>
					<tr>
				 		<td id="codigo<?php echo($i);?>"><?php echo($productos[$i]['codigo']); ?></td>
						<td id="stock<?php echo($i);?>"><?php echo($productos[$i]['stock']); ?></td>
						<td id="descripcion<?php echo($i);?>"><?php echo($productos[$i]['descripcion']); ?></td>
						<td id="precio<?php echo($i);?>"><?php echo($productos[$i]['precio']); ?></td>
						<td><button onclick="editar(<?php echo($i); ?>)">Editar</button></td>
			 	 	</tr>
			  		<?php	 
			  		}
			  		?>
				</table>  
			</div>
			<div id="Ventana">
			<h2>EDITAR PRODUCTOS</h2>
				<table>
					<tr><td id="codigoActualizar"><td></tr>
					<tr><td>Nombre del Producto</td></tr>
					<tr><td><textarea name="NombreProductoActualizar" id="NombreProductoActualizar"></textarea></td></tr>
					<tr>
						<td>Precio</td>
						<td>Stock</td>
					</tr>
					<tr>
						<td><input name="PrecioActualizar" type="number" id="PrecioActualizar"/></td>
						<td><input name="StockActualizar" type="number" id="StockActualizar"/></td>
					</tr>
					<tr>
						<td><input name="btnActualizar" type="submit" onclick="actualizar()" value="Actualizar"/></td>
						<td><button onclick="Volver()">Volver</button>
					</tr>
				</table>
			</div>  
			</body>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
			<script type="text/javascript" src="../scripts/GestionarProductoscript.js"></script>
			</html>
			<?php
		}		
	}
?>