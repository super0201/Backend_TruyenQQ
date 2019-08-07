<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$name = (!empty($_GET['name']))?$_GET['name']: NULL;

if ($name == NULL){
    echo json_encode('Please input name correctly!');
} else {
    $count = countChap($name);

    echo json_encode($count);
}