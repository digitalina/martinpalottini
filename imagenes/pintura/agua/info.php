<?php /*agua*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("agua").", ".$xmlLang->getElement("oleosobretela");
$alt=$xmlLang->getElement("agua");
?>
