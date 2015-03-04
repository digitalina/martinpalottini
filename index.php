<?php
	error_reporting(false);
	session_start();
	require_once("lang/XMLParser.class.php");
	$lang = $_GET["lang"];
	if ($lang=="" && $_SESSION["LANG"]==""){
	    $_SESSION["LANG"]= "es";
	    $lang= "es";
	}else if ($lang != "" ){
	    $_SESSION["LANG"] = $lang;
	}else{
	    $lang = $_SESSION["LANG"];
	}
	$xmlLang = new XMLParser();
	$xmlLang->openXML("lang/".$lang.".xml");
?>
<!DOCTYPE html>
<html lang="es">
 <head>
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
  	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Charcoal-Chinnici"/>
    <meta name="rating" content="General"   />
    <meta name="owner"  content="Digitalina"/>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  	<title>Mart&iacute;n Palottini - dibujos y pinturas</title>
  	<meta name="keywords" content="Martín, Palottini, dibujos, pinturas, drawings, paintings, Buenos Aires, Argentina" />
  	<meta name="verify-v1" content="pAkjKY/PQL7tPCzW3N5ipYbP6R55j08mIVbaF/OAPdY=" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>  
    <script type="text/javascript" src="js/jquery.lightbox.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
		
			$("#idiomaEs").click(function(){
				window.location.href = getUrl() + "&lang=es";
			});
			
			$("#idiomaEn").click(function(){
				window.location.href = getUrl() + "&lang=en";
			});
			
		});
		
		function getUrl(){
			var url = window.location.pathname+"?";
			var vars = [], hash;
			var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			for (var i = 0; i < hashes.length; i++){
				hash = hashes[i].split('=');
				if (hash[0]!="lang"){
					vars.push(hash[0]);
					if (i>0)
						url += "&";
					url += hash[0]+"="+hash[1];
				}
			}
			return url;
		}
	</script>
    <!--[if IE]>
        <script src="js/html5.js"></script>
    <![endif]-->    
 	<style type="text/css" media="all">
		@import url(css/2015.css);
	</style>
 </head>
 <body class="wrap">
    <!-- aca va el include de contenido-->
        <?php include('contenido.php'); ?>
    <!-- hasta aca va el include de contenido-->
    <footer> 
        <small class="text-center">Todas las obras expuestas  &copy; Martín Palottini 2008 / 2011:: <a href="http://palottini.blogspot.com" rel="external">siga mi blog</a> :: webdesign: 
        <a href="javascript:void(0);" onclick="window.open('http://www.digitalinaweb.com.ar')">digitalinaweb.com.ar</a></small>
    </footer>    
 <script>
	//$('.toggle').click(function(){
    //	$(this).siblings('ul').toggle('fast');
	//});
</script>	
  </body>
</html>
