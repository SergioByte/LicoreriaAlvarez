<?php
	
	class formCambiarContrasenia
	{
		public function formCambiarContraseniaShow($login)
		{
			
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>CAMBIAR CONTRASEÑA</title>
			</head>
			
			<body>
			<table  align="center" width="200" border="0">
			<form method="post" action="getPassword.php">
			 <tr>
			 	
				<td><label>Usuario:</label><?php echo $login; ?></td>
			  </tr>
			  <tr>
				<td><label>Contraseña Actual:</label><input  name="apassword" type="password" placeholder="ingrese contraseña actual"/></td>
			  </tr>
			  <tr>
				<td><label>Nueva Contraseña:</label><input  name="npassword" type="password" placeholder="ingrese nueva contraseña"/></td>
			  </tr>
			  <tr>
				<td><label>Confirme Contraseña:</label><input  name="cnpassword" type="password" placeholder="Confirme Contraseña"/>
				  <label>
				  <input type="submit"  id="btncc" name="btncc" value="Cambiar Contrase&ntilde;a" />
			    </label></td>
			  </tr>
			  
			  </form> 
			</table>

			</body>
			</html>
			<?php
			//echo ($login);
		}
	}
?>


