<?php /*lapajadeltrigo*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("lapajadeltrigo").", ".$xmlLang->getElement("lapizsobrepapel")." 35 x 25cm.";
$title['foto1.jpg'] = $xmlLang->getElement("coleccionparticular");
$title['foto8.jpg'] = $xmlLang->getElement("coleccionparticular");

$alt=$xmlLang->getElement("lapajadeltrigo");
?>
