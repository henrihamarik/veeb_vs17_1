<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 8.01.2018
 * Time: 8:49
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10
);
echo '<pre>';
print_r($opilane);
echo '</pre>';

echo '<hr />';

foreach ($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br />';
}

echo '<hr />';

$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10
    ),
    array(
        'eesnimi' => 'Kadi',
        'perenimi' => 'Vaher',
        'vanus' => 15,
        'klass' => 9
    ),
    array(
        'eesnimi' => 'Risto',
        'perenimi' => 'Tamm',
        'vanus' => 16,
        'klass' => 10
    )
);

echo '<pre>';
print_r($opilased);
echo '</pre>';

echo '<hr />';

foreach ($opilased as $opilane){
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '---------------'.'<br />';
}

echo '<hr />';

foreach ($opilased as $opilane){
    arsort($opilane);
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '---------------'.'<br />';
}

echo '<hr />';

/*
 * Defineeri raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund'
 *      )
 * );
 * Loo funktsioon, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 * Loo funktsioon, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed
 * */

$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);