<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$cate = (!empty($_GET['cate']))?$_GET['cate']: NULL;
$index = (!empty($_GET['index']))?$_GET['index']: 0;

if($cate != NULL){
    $result = getComicCate($index, $cate);
    
    $response = $result;
    
} else {
    
    $response['success'] = "0";
    $response['message'] = "Input cate can't be NULL";
    
}

echo json_encode($response);

