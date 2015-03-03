<?php /*otroLadoTapiz*/
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title= $xmlLang->getElement("otroLadoTapiz").", ".$xmlLang->getElement("lapizsobrepapel");
$alt=$xmlLang->getElement("otroLadoTapiz");
?>
