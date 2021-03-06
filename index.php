<?php
session_start();
if(time() < 1391594400 && $_SESSION['cheat-timer'] != 1) {
	header("Location: /teaser/", 302);
	die();
} 
header("Content-Type: text/html; charset=utf-8");
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Teekkarispeksi 2014</title>

	<link rel="stylesheet" href="css/reset.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/js1.js"></script>

	<script src="js/spark-lib.js"></script>
	<script src="js/spark-init.js"></script>

	<meta property="og:image" content="http://teekkarispeksi.fi/2014/img/facebook_preview_large.png" />
	<meta property="og:title" content="Teekkarispeksi 2014: Danse Macabre" />
	<meta property="og:url" content="http://teekkarispeksi.fi/2014/" />
	<meta property="og:description" content="Suomen suurin opiskelijamusikaali. Liput myynnissä nyt." />

</head>
<body onload="init('<?php $url= explode('/',$_SERVER['REQUEST_URI']);echo($url[2])?>')">
<div id="content">
	<div id="banner" onclick="bannerClick();"> 
		<img id="banner_img" alt="teekkarispeksi 2014 banner" src="img/banner.png"></img>
	</div>


	<table id="navbar">
		<tr>
			<td><a class="inside-link" id="macabre" href="macabre">DANSE MACABRE</a></td>
			<td><a class="inside-link" id="hahmot" href="hahmot">HAHMOT</a></td>
			<td><a class="inside-link" id="trailer" href="trailer">TRAILERI</a></td>
			<td><a id="liput" href="http://teekkarispeksi.fi/kauppa/">LIPUT</a></td>
			<td><a class="inside-link" id="speksi" href="speksi">SPEKSI?</a></td>
			<td><a class="inside-link" id="tekijat" href="tekijat">TEKIJÄT</a></td>
			<td><a class="inside-link" id="blogi" href="blogi">BLOGI</a></td>
			<td><a class="inside-link" id="yhteistyo" href="yhteistyo">YHTEISTYÖSSÄ</a></td>
		</tr>
	</table>

	<div id="story">
    </div>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7094567-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    </div>
</body>
</html> 
