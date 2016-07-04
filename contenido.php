<?php
       if (isset($_GET['contenido']) && $_GET['contenido'] !== '') {
               include('includes/'.$_GET['contenido'].'.inc');
       } else {
               //$_GET['contenido'] = 'dibujos';
             //  $_REQUEST['dirname'] = 'otroLadoTapiz';
               include('includes/inicio.inc'); 
       }
?>
