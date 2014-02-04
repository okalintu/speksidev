<?php
session_start();
if(time() < 1391594400 && $_SESSION['cheat-timer'] != 1) {
	header("Location: /teaser/", 302);
	die();
} 
header("Content-Type: text/html; charset=utf-8");
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Teekkarispeksi 2014</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/js1.js"></script>

	<script src="js/spark-lib.js"></script>
	<script src="js/spark-init.js"></script>

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
			<td><a id="liput" href="http://teekkarispeksi.fi/kauppa/">LIPUT</a></td>
			<td><a class="inside-link" id="speksi" href="speksi">MIKÄ SPEKSI?</a></td>
			<td><a class="inside-link" id="tekijat" href="tekijat">TEKIJÄT</a></td>
			<td><a class="inside-link" id="yhteistyossa" href="yhteistyossa">YHTEISTYÖSSÄ</a></td>
		</tr>
	</table>

	<div id="story">
    </div>
	
	
</div>
</body>
</html> 
