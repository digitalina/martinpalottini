<?php /*otroLadoTapiz*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");
$title['default'] = $xmlLang->getElement("otroLadoTapiz").", ".$xmlLang->getElement("lapizehilosobrepapel")." 50 x 50 cm.";
$alt=$xmlLang->getElement("otroLadoTapiz");
?>
