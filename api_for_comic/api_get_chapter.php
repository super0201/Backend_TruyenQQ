<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$chap = (!empty($_GET['chap']))?$_GET['chap']: NULL;
$name = (!empty($_GET['name']))?$_GET['name']: NULL;

if ($chap == 0 || $name == 0){
    echo json_encode('Input chapter and comic name correctly!');
    
} else {
    $getChap = getChapter($name, $chap);

    echo json_encode($getChap);
}