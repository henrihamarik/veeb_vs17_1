<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 8.01.2018
 * Time: 10:38
 */
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Kasutaja: <input type="text" name="kasutaja"><br />
        Parool: <input type="password" name="parool"><br />
        <input type="submit" value="Saada"> 
    </form>
';

echo $_SERVER['PHP_SELF'];

echo '<hr />';
if (count($_POST) > 0) {
    foreach ($_POST as $element){
        if(strlen($element) == 0){
            echo 'Tuleb täita väljad<br />';
            exit;
        }
    }
    echo '<pre>';
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    echo '</pre>';

    echo '<hr />';

    echo $_POST['kasutaja'] . '<br />';
    echo $_POST['parool'] . '<br />';
}
/*
 * Koosta mäng, kus kasutaja saab ära arvata programmis mõeldud
 * täisarvu ühest viiekümneni. Skript peab
 * töötama seni kuni õige arv on leitud ning teavitama
 * sellest kasutajat.
 *
 * Vale arvu sisestamisel antakse kasutajale vihje, kas
 * serveri poolt valitud arv on suurem või väiksem
 * kasutaja sisestatud arvust.
 *
 * Täienda programmi selliselt, et kui õige vastuse ja
 * kasutaja sisestatud arvu vahe on väiksem
 * või võrdne 5-ga, siis teavitatakse kasutajat, et ta on
 * õigele vastusele juba üsna lähedale jõudnud.
 *
 * Täineda programmi selliselt, et on kirjas, mitu katset
 * on sooritatud õige arvu leidmisel.
 * */