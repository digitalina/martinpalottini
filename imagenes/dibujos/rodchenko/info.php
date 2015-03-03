<?php /*rodchenko*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("tra-rodchenko").", ".$xmlLang->getElement("lapizsobrepapel");
$alt=$xmlLang->getElement("tra-rodchenko");
?>
