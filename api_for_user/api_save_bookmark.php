<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$bm = (!empty($_GET['bm']))?$_GET['bm']: NULL;

if ($user == NULL || $bm == NULL){
    echo json_encode('Please input username or bm correctly!');
    
} else {
    $save = saveBookmark($user, $bm);

    echo json_encode($save);
}
