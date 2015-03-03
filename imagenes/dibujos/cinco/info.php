<?php /*ahoraveniybesamelaboca*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");
$title['default'] = $xmlLang->getElement("ahoraveniybesamelaboca").", ".$xmlLang->getElement("lapizsobrepapel")." 100 x 70 cm.";
$alt=$xmlLang->getElement("ahoraveniybesamelaboca");
?>
