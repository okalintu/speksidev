<?php 
header("Content-Type: text/html; charset=utf-8");
?><p>
DANSE MACABRE johdattaa katsojan mystisten holvien, räiskyvien toiveiden ja kiellettyjen tunteiden verkkoon 1700-luvun Espanjan inkvisition valtapelin pyörteissä. Eletään maailmassa, joka elää ja hengittää turmeltuneista elämäntavoista. Näyttämöllä nähdään teatteria, tanssia, taikuutta ja live-musiikkia. Jokainen näytös on ainutlaatuinen, sillä esitys syntyy osittain improvisaatioteatterista ja vuorovaikutuksesta katsojiin. Kuolemantanssi imee vahvimmatkin pyörteisiinsä.
</p>

<p>
Tervetuloa lumoutumaan Danse Macabresta!
</p>

<div id="bg_wrapper">

<div id="ostaliput" class="featherlink">
    <a href="http://teekkarispeksi.fi/kauppa/">OSTA&nbsp;LIPUT</a>
</div>

<div id="showtimes">

<h2>Esitysajat</h2>

<table>
    <?php 
    $shows = array(
        array("17.3.", "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("19.3.", "18" ,"Hällä-teatteri", "Tampere", "https://www.facebook.com/events/283305311819504/"),
        array("21.3.", "18" ,"Pohjankartanon juhlasali", "Oulu", "https://www.facebook.com/events/409506519196160/"),
        array("23.3.", "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("24.3.", "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("25.3.", "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("28.3.", "19" ,"Louhisali", "Espoo", "https://www.facebook.com/events/1392546947674354/"),
        array("29.3.", "16" ,"Louhisali", "Espoo", "https://www.facebook.com/events/1392546947674354/"),
        array("30.3.", "16" ,"Louhisali", "Espoo", "https://www.facebook.com/events/1392546947674354/"),
        array("7.4.",  "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("8.4.",  "19" ,"Aleksanterin teatteri", "Helsinki", "https://www.facebook.com/events/411492175662901/"),
        array("12.4.", "19" ,"Sigyn-sali", "Turku", "https://www.facebook.com/events/654399877956050/"),
        array("14.4.", "18" ,"Kaupunginteatteri", "Lappeenranta", "https://www.facebook.com/events/237273236451890/"),
    );
    foreach($shows as $s) {
        echo '
        <tr>
            <td class="pvm">'.$s[0].'</td>
            <td class="time">'.$s[1].':00</td>
            <td class="kaupunki">'.$s[3].'</td>  
            <td class="paikka">'.$s[2].'</td>
            <td class="ficon"><a href="'.$s[4].'"><img src="img/ficon.png"></a></td>  
        </tr>';
    }
    ?>
</table>

</div>

</div>
<?php include('sponsorbanner.php');?>

