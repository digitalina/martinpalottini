<?php
	include('includes/head.inc'); 
	include('includes/navegacion.inc'); 
?>
<section>
<h3><?php echo $xmlLang->getElement("contactos") ?></h3>
	<form id="form1" method="post" action="http://www.martinpalottini.com.ar/cgi-sys/formmail.cgi">	  
	<fieldset>
		<input name="redirect" type="hidden" value="http://www.martinpalottini.com.ar/secciones.php?contenido=contactos&amp;msg=<?php echo $xmlLang->getElement("mensajeenvio") ?>"/>
		<input name="recipient" type="hidden" value="contactos@martinpalottini.com.ar"/> 
		<input name="subject" type="hidden" value="[site]"/>
		<input name="email" type="hidden" value="http://www.martinpalottini.com.ar"/>
		<legend>Enviame tu inquietud por mail</legend>
		<p><label for="nombre"><?php echo $xmlLang->getElement("nombre") ?></label><br/>
		<input type="text" id="nombre" name="Nombre_y_Apellido" maxlength="20"/>
		</p>
		<p><label for="from"><?php echo $xmlLang->getElement("email") ?></label><br/>
		<input type="text" id="from" maxlength="40" onchange="validateEmail(this, 'invalid', true);" name="Correo_Electronico" />
		</p>
		<p><label for="titulo"><?php echo $xmlLang->getElement("telefono") ?></label><br/>
		<input type="text" id="titulo" name="Telefono" />
		</p>
		<p><label for="mensaje"><?php echo $xmlLang->getElement("mensaje") ?></label><br/>
		<textarea rows="6"  cols="16" id="mensaje" name="Mensaje"></textarea>
		</p>
		<p class="right"><input id="submit" type="submit" value="<?php echo $xmlLang->getElement("enviar") ?>"/></p>
	</fieldset>	
     </form>
	<span id="invalid">&nbsp;</span>
	<?php (isset($_GET['msg']))?"<p>".$_GET['msg']."</p>":""?>
    <p><?php echo $xmlLang->getElement("telefonoestudio") ?>: 4361-7052</p>
	<p><?php echo $xmlLang->getElement("email") ?><a href="mailto:contactos@martinpalottini.com.ar">contactos@martinpalottini.com.ar</a></p>
</section>
