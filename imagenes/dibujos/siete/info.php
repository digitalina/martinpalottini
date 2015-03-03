<?php /*acariciameelpelo*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("acariciameelpelo");
$alt=$xmlLang->getElement("acariciameelpelo");
?>