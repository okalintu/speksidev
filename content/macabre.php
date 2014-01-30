<p>
DANSE MACABRE johdattaa katsojan mystisten holvien, räiskyvien toiveiden ja kiellettyjen tunteiden verkkoon. Näyttämöllä nähdään teatteria, tanssia, taikuutta ja live-musiikkia. Jokainen näytös on ainutlaatuinen, sillä esitys syntyy osittain improvisaatioteatterista ja vuorovaikutuksesta katsojiin. Kuolemantanssi imee vahvimmatkin pyörteisiinsä.
</p>
<p style="margin-bottom:50px;">
Tervetuloa lumoutumaan Danse Macabresta!
</p>

<h3>Esitysajat</h3>

<table id="showtimes">
    <?php 
    $shows = [
        ["17.3.", "Aleksanterin teatteri", "Helsinki"],
        ["19.3.", "Hällä-teatteri", "Tampere"],
        ["21.3.", "Pohjankartanon juhlasali", "Oulu"],
        ["25.3.", "Aleksanterin teatteri", "Helsinki"],
        ["24.3.", "Aleksanterin teatteri", "Helsinki"],
        ["23.3.", "Aleksanterin teatteri", "Helsinki"],
        ["28.3.", "Louhisali", "Espoo"],
        ["29.3.", "Louhisali", "Espoo"],
        ["30.3.", "Louhisali", "Espoo"],
        ["8.4.",  "Aleksanterin teatteri", "Helsinki"],
        ["7.4.",  "Aleksanterin teatteri", "Helsinki"],
        ["12.4.", "Sigyn-sali", "Turku"],
        ["14.4.", "Kaupunginteatteri", "Lappeenranta"],
    ];
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
