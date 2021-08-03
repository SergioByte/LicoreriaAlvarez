<?php
	include_once("../shared/formularioGeneral.php");
	
	class formMenuPrincipal extends formularioGeneral
	{
		
		public function formMenuPrincipalShow($privilegios)
		{
			$this->cabezaShow("MENU PRINCIPAL");
			$numeroPrivilegios = sizeof($privilegios);
			///echo ($numeroPrivilegios);
			
			for($i=0;$i<$numeroPrivilegios;$i++)
			{
			?>
				
				<table align="center"  width="394" border="1">
				 
				  <tr>
					<td width="388">
					<form action="<?php echo($privilegios[$i]['path']);?>" method="post">
						<label><?php echo($privilegios[$i]['label']);?></label>
						<input type="submit" name="<?php echo($privilegios[$i]['btn']);?>" id="<?php echo($privilegios[$i]['btn']);?>" value="->" />
					</form>
					</td>
				
				  </tr>
		
				</table>

				<?php
				
			} 
			
			 //echo $_SESSION['login'];
			
		}
	}
?>
