<?php /*figura*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("figura").", ".$xmlLang->getElement("oleosobretela");
$alt=$xmlLang->getElement("figura");
?>
