<?php
	
	class formMensajeSistema
	{
		public function formMensajeSistemaShow($mensaje,$enlace)
		{
			
		?>
			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
			<title>Mensaje del Sistema</title>
			</head>
			
			<body>
			<p align="center">
			<strong>
				<?php echo $mensaje;?>
				
			</strong>
			</p>
			<p align="center">
				<?php echo $enlace;?>  
					
			</p>
			</body>
			</html>
		<?php
		}
	}
?>
