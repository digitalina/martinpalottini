<?php /*paisajeMudo*/
$title = array();
$lang = $_SESSION["LANG"];
$xmlLang = new XMLParser();
$xmlLang->openXML("lang/".$lang.".xml");

$title['default'] = $xmlLang->getElement("paisajeMudo")/*.", ".$xmlLang->getElement("lapizsobrepapel")." ";*/;
$title['paisaje1.jpg'] = $xmlLang->getElement("paisajeMudo").", ".$xmlLang->getElement("lapizyacrilicosobrepapel").", 50 x 50 cmts.";
$title['paisaje2.jpg'] = $xmlLang->getElement("paisajeMudo").", ".$xmlLang->getElement("lapizycobrealahojasobrepapel").", 54 x 48 cmts.";
$title['paisaje3.jpg'] = $xmlLang->getElement("paisajeMudo").", ".$xmlLang->getElement("lapizypapelsobrepapel").", 100 x 100cmts.";
$title['cuarentaEscudos.jpg'] = $xmlLang->getElement("cuarentaEscudos").", ".$xmlLang->getElement("lapizsobrepapel").", 50 x 50 cmts.";
$title['lamanoizquierda.jpg'] = $xmlLang->getElement("lamanoizquierda").", ".$xmlLang->getElement("lapizsobrepapel").", 70 x 80 cmts.";
$title['munioz1.jpg'] = $xmlLang->getElement("munioz").", ".$xmlLang->getElement("lapizsobrepapel")." ";
$title['munioz2.jpg'] = $xmlLang->getElement("munioz").", ".$xmlLang->getElement("lapizbordaycobreydoradoalahojasobrepapel").", 62 x 48cmts. ";
$title['paisajeconflores.jpg'] = $xmlLang->getElement("paisajeconflores").", ".$xmlLang->getElement("lapizsobrepapel").", 62 x 48cmts. ";
$title['volcan.jpg'] = $xmlLang->getElement("volcan").", ".$xmlLang->getElement("lapizybordadosobrepapel").", 120 x 90cmts. ";



$alt=$xmlLang->getElement("paisajeMudo");
?>

