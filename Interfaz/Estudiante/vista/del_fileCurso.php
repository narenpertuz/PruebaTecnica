<?php
	
	$file = $_POST['idregistro'];
	
	if(is_file($file)){
		chmod($file,0777);
		if(!unlink($file)){
		echo false;
		}
	}
	
?>