<?php
	include('includes/head.inc'); 
	include('includes/navegacion.inc'); 
?>
<section class="scroll clear">
<h3><?php echo $xmlLang->getElement("cv") ?></h3>
	<p>
		<?php echo $xmlLang->getElement("bio") ?>
	</p>	
<h3><?php echo $xmlLang->getElement("premios") ?></h3>		
<?php echo $xmlLang->getElement("contenidopremios") ?>
<h3><?php echo $xmlLang->getElement("muestras") ?></h3>
<?php echo $xmlLang->getElement("contenidomuestras") ?><br/>
<?php echo $xmlLang->getElement("contenidocolecciones") ?>
</section> 
