<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$index = (!empty($_GET['index']))?$_GET['index']: 0;

$getAll = getAllComic($index);

echo json_encode($getAll);