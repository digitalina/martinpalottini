<?php /*pulmonaria*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("pulmonaria").", ".$xmlLang->getElement("oleoylapizsobretela");
$alt=$xmlLang->getElement("pulmonaria");
?>
