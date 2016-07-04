<?php /*retratoSinManos*/
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title= $xmlLang->getElement("retratoSinManos").", ".$xmlLang->getElement("lapizsobrepapel");
$alt=$xmlLang->getElement("retratoSinManos");
?>
