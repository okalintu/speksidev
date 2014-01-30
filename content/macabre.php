<p>
DANSE MACABRE johdattaa katsojan mystisten holvien, räiskyvien toiveiden ja kiellettyjen tunteiden verkkoon. Näyttämöllä nähdään teatteria, tanssia, taikuutta ja live-musiikkia. Jokainen näytös on ainutlaatuinen, sillä esitys syntyy osittain improvisaatioteatterista ja vuorovaikutuksesta katsojiin. Kuolemantanssi imee vahvimmatkin pyörteisiinsä.
</p>
<p style="margin-bottom:50px;">
Tervetuloa lumoutumaan Danse Macabresta!
</p>

<h3>Esitysajat</h3>

<table id="showtimes">
    <?php 
    $shows = array(
        array("17.3.", "Aleksanterin teatteri", "Helsinki"),
        array("19.3.", "Hällä-teatteri", "Tampere"),
        array("21.3.", "Pohjankartanon juhlasali", "Oulu"),
        array("25.3.", "Aleksanterin teatteri", "Helsinki"),
        array("24.3.", "Aleksanterin teatteri", "Helsinki"),
        array("23.3.", "Aleksanterin teatteri", "Helsinki"),
        array("28.3.", "Louhisali", "Espoo"),
        array("29.3.", "Louhisali", "Espoo"),
        array("30.3.", "Louhisali", "Espoo"),
        array("8.4.",  "Aleksanterin teatteri", "Helsinki"),
        array("7.4.",  "Aleksanterin teatteri", "Helsinki"),
        array("12.4.", "Sigyn-sali", "Turku"),
        array("14.4.", "Kaupunginteatteri", "Lappeenranta"),
    );
    foreach($shows as $s) {
        echo '
        <tr>
            <td class="pvm">'.$s[0].'</td>
            <td class="kaupunki">'.$s[2].'</td>  
            <td class="paikka">'.$s[1].'</td>   
        </tr>';
    }
    ?>
</table>

<img id="front_page_feather" src="img/feather_glitter.jpg" alt="Glitter Feather">
