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
        array("17.3.", "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("19.3.", "18" ,"Hällä-teatteri", "Tampere"),
        array("21.3.", "18" ,"Pohjankartanon juhlasali", "Oulu"),
        array("23.3.", "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("24.3.", "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("25.3.", "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("28.3.", "19" ,"Louhisali", "Espoo"),
        array("29.3.", "16" ,"Louhisali", "Espoo"),
        array("30.3.", "16" ,"Louhisali", "Espoo"),
        array("7.4.",  "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("8.4.",  "19" ,"Aleksanterin teatteri", "Helsinki"),
        array("12.4.", "19" ,"Sigyn-sali", "Turku"),
        array("14.4.", "18" ,"Kaupunginteatteri", "Lappeenranta"),
    );
    foreach($shows as $s) {
        echo '
        <tr>
            <td class="pvm">'.$s[0].'</td>
            <td class="time">'.$s[1].':00</td>
            <td class="kaupunki">'.$s[3].'</td>  
            <td class="paikka">'.$s[2].'</td>   
        </tr>';
    }
    ?>
</table>

</div>

</div>
<?php include('sponsorbanner.php');?>

