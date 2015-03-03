<?php /*trincheraHonor*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("trincheraHonor").", ".$xmlLang->getElement("lapizsobrepapel")." 200 x 200cm.";
$title['foto13.jpg'] = ", ".$xmlLang->getElement("lapizypapelsobretela");
$title['foto14.jpg'] = ", ".$xmlLang->getElement("lapizypapelsobretela")." 200 x 150cm.";
$title['foto15.jpg'] = ", ".$xmlLang->getElement("lapizypapelsobretela")." 200 x 150cm.";

$alt=$xmlLang->getElement("trincheraHonor");
?>

<!-- (Homenaje a K.K). lapiz sobre papel 200x200 Trinchera de Honor -->
