<?php
	include('includes/head.inc'); 
	include('includes/navegacion.inc'); 
?>
<section>
	<?php include('includes/returnimages.php'); 
		returnimages("imagenes/pintura/".$_REQUEST["dirname"]."/");
	?>
</section>