<?php /*varios*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("varios").", ".$xmlLang->getElement("oleosobretela");
$alt=$xmlLang->getElement("varios");
?>
