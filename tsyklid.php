<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 13.12.2017
 * Time: 14:12
 */
for($kord = 1; $kord <= 10; $kord++){
    if($kord % 2 == 0){
        $varv = 'red';
        continue;
    } else {
        $varv = 'blue';
    }
//    kuna varvi defineerimisel juba on kirjas
//    if($varv == 'red'){
//        continue;
//    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
}