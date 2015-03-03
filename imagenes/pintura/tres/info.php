<?php /*castigomediotumano*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default']= $xmlLang->getElement("castigomediotumano").", ".$xmlLang->getElement("oleosobretela");
$alt=$xmlLang->getElement("castigomediotumano");
?>
