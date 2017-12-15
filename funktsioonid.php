<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 15.12.2017
 * Time: 8:48
 */
// koostada f-on nimega looTabel, mis
// väljastab tabeli
// funktsiooni parameetriteks on tabeli ridade ja
// veergude arv
// tabeli sisuks on juhuslikud arvud vahemikus
// 10 - 99

// loo funktisoon nimega genereeriVarv,
// mis genereerib juhusliku värvi #XXXXXX kujul
// ja tagastab antud väärtus põhiskriptile
// vihje - vaata, mis moodi toimus värvi genereerimine
// värvilise teksti loomisel

// täineda looTabel funktsioon nii, et tabeli pesa
// taustavärv oleks juhuslikult genereeritud

function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $juhuhex = dechex($juhuarv);
        $varv = $varv.$juhuhex;
    }
    return $varv;
}

function looTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
        for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
            echo '<tr>';
            for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
                echo '<td style="background-color: '.genereeriVarv().';">';
                echo rand(10, 99);
                echo '</td>';
            }
            echo '</tr>';
        }
    echo '</table>';
}
looTabel(5, 7);
