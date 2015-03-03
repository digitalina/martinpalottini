<?php
	if(isset($_GET['contenido']))
	{
		include('includes/'.$_GET['contenido'].'.inc');
	}else{
		include('includes/chooselang.inc'); 
		$_GET['contenido'] = 'chooselang';
	}
?>
