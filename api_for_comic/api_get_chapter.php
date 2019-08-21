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

if ($chap == NULL || $name == NULL){
    $response['success'] = "0";
    $response['message'] = "Bang bang bang!";
    
} else {
    $getChap = getChapter($name, $chap);
    
    if($getChap != NULL){
        $response = $getChap;
    } else {
        $response['success'] = "0";
        $response['message'] = "No chapter like this, Banga bang bang!";
    }
}

echo json_encode($response);
