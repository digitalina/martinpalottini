<?php
	if(isset($_GET['contenido']))
	{
		include('includes/'.$_GET['contenido'].'.inc');
	}else{
		include('includes/dibujos.inc'); 
		$_GET['contenido'] = 'dibujos'.$_REQUEST["dirname"]=="pulmonaria" ;
	}
?>
