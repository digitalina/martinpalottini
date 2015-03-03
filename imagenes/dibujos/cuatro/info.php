<?php /*elrestoesperdida*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("elrestoesperdida");
$alt=$xmlLang->getElement("elrestoesperdida");
?>