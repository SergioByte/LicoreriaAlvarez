<?php
	include_once("../shared/formularioGeneral.php");
	class formGenerarProforma extends formularioGeneral
	{
		
		public function formGenerarProformaShow($productos)
		{
			$s_productos = $productos;
			$this->cabezaShow("GENERAR PROFORMA");
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<style type="text/css">
				#padre{
				
					display:flex;
					flex-direction:column;
				}
				#contenttablas{
					display:flex;
					flex-direction:row;
					justify-content:space-evenly;
					
				}
			
				#contentproductos{
					float:left;
					
				}
				#contentproductoslista{
					float:right;
					
				}
				#cantidadcelda{
					width:10%;
					height:auto;
				}
				#ventana{
					background:#FFFFFF;
					position:absolute;
					left:34%;
					display:none;
				}
				#botones{
					margin-left:50%;
					margin-top:25%;
					
				}
				#botones1{
					display:flex;
					flex-direction:row;
					justify-content:center;
				}
			</style>
			<title>GENERAR PROFORMA</title>
			</head>
			<body>
			<div id="padre">
			<table width="542" border="0" align="center">
              <tr>
                <td width="102"></td>
                <td width="153">Cliente:</td>
                <td width="185">Nombre del producto </td>
                <td width="84">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input name="txtcliente" type="text" id="txtcliente" />
                </label></td>
                <td><label>
                  <input name="txtproducto" type="text" id="txtproducto" />
                </label></td>
                <td><label>
                  <button  onclick="listarproductos()">Buscar</button>
                  </label></td>
              </tr>
            </table>
			<div id="contenttablas">
			 
			<!-- este contenedor contendrá la tabla de productos -->
			<div id="contentproductos">
			<table width="534" border="1" cellpadding="5" align="left">
			
			  <tr>
			    <td width="87">id.Producto</td>
				<td width="87">C&oacute;d.Producto</td>
				<td width="36">Stock</td>
				<td width="177">Descripci&oacute;n</td>
				<td width="39">Precio</td>
				<td width="55">Cantidad</td>
				<td width="52">Agregar</td>
			  </tr>
			  <?php
			  $numfilas = sizeof($productos); 
			  for($i=0;$i<$numfilas;$i++)
			  {
			  ?>
			  	 <tr>
				 	<td id="idproducto<?php echo($i);?>"><?php echo($productos[$i]['idproducto']); ?></td>
				 	<td id="codigo<?php echo($i);?>"><?php echo($productos[$i]['codigo']); ?></td>
					<td id="stock<?php echo($i);?>"><?php echo($productos[$i]['stock']); ?></td>
					<td id="descripcion<?php echo($i);?>"><?php echo($productos[$i]['descripcion']); ?></td>
					<td id="precio<?php echo($i);?>"><?php echo($productos[$i]['precio']); ?></td>
					<td id="cantidadcelda"><input type="number"  min="1" id="cantidad<?php echo($i);?>"/></td>
					<td><button onclick="agregar(<?php echo($i); ?>)">+</button></td>
			 	 </tr>
			  <?php	 
			  }
			  ?>
			 
			
			</table>
			</div>
			<!-- *********************************************** -->
			
			<!-- este contenedor contendrá la tabla de productos en lista -->
			
			<div id="contentproductoslista">
			<table width="444" border="1" cellpadding="5" align="right">
				<tbody id="tbodyproductoslista">
				
				
				</tbody>
			</table>
			</div>
			<!-- *********************************************** -->
			
			</div>
			<div id="ventana">
		
			</div>
			<div id="botones1">
			  <form  method="post" action="../moduloSeguridad/getUsuario.php"> <input type="submit" name="btnvolvermenu" value="Volver" /></form>
			
			  <input type="submit" name="Submit" value="Visualizar Proforma" onclick="visualizarProforma()" />
		    </div>
			</div>
			
			
			
			</body>
			<script
			  src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
			<script src="../scripts/html2pdf.bundle.min.js"></script>
			<script type="text/javascript" src="../scripts/emitirproformascript.js"></script>
			</html>
			<?php
		}
		
		
	}
?>



