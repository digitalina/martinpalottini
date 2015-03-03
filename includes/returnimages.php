<?php
function returnimages($dirname){
	
	include($dirname."info.php");
	
	$pattern="\.(jpg|jpeg|png|gif|bmp)$";
	$files = array();
	$i = 0;
	if($handle = opendir($dirname)) {
		while(false !== ($file = readdir($handle))){
			if(eregi($pattern, $file)){
				$files[]=$file;
			}
		}
		closedir($handle);
	}

	sort($files);

	foreach ($files as $key => $value) {
		$titulo = $title['default'];
		if ($title[$value]!='')
			$titulo .= " - ".$title[$value];
		echo "<a class='thumb lightbox-enabled' rel='lightbox-mygallery' title='$titulo' href='$dirname$value' alt='$alt'>
				<img src='$dirname$value' alt='$alt' title='$titulo'/></a>";
	}
}
returnimages();
?>
