<html lang="es">
	<head>

		<body>
			 <h3 style="text-align:center">MODIFICAR REGISTRO</h3>

<?php
	
	$file = $_POST['id'];
	
	if(is_file($file)){
		echo "juand ";
		chmod($file,0777);
		if(!unlink($file)){
		echo false;
		}
	}
	
?>
		</body>>

		
  

  </html>


