<?php /*dafne*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("dafne").", ".$xmlLang->getElement("oleosobretela");
$alt=$xmlLang->getElement("dafne");
?>
