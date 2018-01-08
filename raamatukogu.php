<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 8.01.2018
 * Time: 12:55
 */
require_once 'fnk.php';

raamatuVorm();

$raamat = array(
    'title' => 'Peppa Goes To London',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'valjas'
);
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');