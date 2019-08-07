<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';

$chap = (!empty($_GET['chap']))?$_GET['chap']: 0;
$name = (!empty($_GET['name']))?$_GET['name']: 0;

if ($chap == 0 || $name == 0){
    echo json_encode('No chapter or comics like this!');
} else {
    $getChap = getChapter($name, $chap);

    header('Content-Type: application/json');
    echo json_encode($getChap);
}