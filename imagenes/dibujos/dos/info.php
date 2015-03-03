<?php /*guampas*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("guampas");
$alt=$xmlLang->getElement("guampas");
?>