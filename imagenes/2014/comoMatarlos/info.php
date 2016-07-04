<?php /*comoMatarlos*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("comoMatarlos").", ".$xmlLang->getElement("lapizsobrepapel")." ";

$alt=$xmlLang->getElement("comoMatarlos");

?>

