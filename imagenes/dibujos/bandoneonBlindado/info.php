<?php /*bandoneonblindado*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("bandoneonBlindado").", ".$xmlLang->getElement("lapizsobrepapel"). " 35cm x 25cm";
$alt=$xmlLang->getElement("bandoneonBlindado");
$title['aaaaatn.jpg'] = $xmlLang->getElement("tapalibro");

?>

<!-- Bandoneón blindado. lapiz sobre papel 35x25  -->
