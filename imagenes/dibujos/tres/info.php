<?php /*supropiedadsensual*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("supropiedadsensual").", ".$xmlLang->getElement("oleoylapizsobretela")." 180 x 110 cm.";
$alt=$xmlLang->getElement("supropiedadsensual");
?>
