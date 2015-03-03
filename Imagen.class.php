<?php

class Imagen {

    function Imagen() {
    }
    
    function comprimir($nombre){
    $x = 35;
    $y = 33;
    $quality = 65;
	$path_imagen = substr($nombre, 0, (strlen($nombre)-4))."_thumb.jpg";
	if (!file_exists($path_imagen)){
	    $original = imagecreatefromjpeg($nombre);
	    $thumb = imagecreatetruecolor($x,$y);
   	    $ancho = imagesx($original);
	    $alto = imagesy($original);
   	    imagecopyresampled($thumb,$original,0,0,0,0,$x,$y,$ancho,$alto);
	    imagejpeg($thumb,$path_imagen,$quality);
	}
	//echo $path_imagen;
	return $path_imagen;
    }
    
    /* EJEMPLO		    
     *	$img = comprimir('foto.jpg');
     *	<img src='<?php echo comprimir('foto.jpg');?>'/>
    */
    
    function getSize($nombre){
		return filesize($nombre);
    }
}
?>