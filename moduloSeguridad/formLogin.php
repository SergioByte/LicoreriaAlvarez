<?php

	class formLogin
	{
		public function formLoginShow()
		{
			?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>Login</title>
			</head>
			
			<body>
			<form name="Login" method="post" action="./moduloSeguridad/getUsuario.php">
			  <table width="236" border="0" align="center">
                <tr>
                  <td colspan="2" align="center">Login</td>
                </tr>
                <tr>
                  <td width="65">Usuario</td>
                  <td width="171"><label>
                    <input name="usuario" type="text" id="usuario" size="20" />
                  </label></td>
                </tr>
                <tr>
                  <td>Contrase&ntilde;a</td>
                  <td><input name="contrasenia" type="password" id="contrasenia" size="20" /></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="right"><label>
                    <input name="btnIngresar" type="submit" id="btnIngresar" value="Ingresar" />
                  </label></td>
                </tr>
              </table>
			</form>
			</body>
			</html>
			<?php
		}
	}
?>