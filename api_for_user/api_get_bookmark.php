<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$index = (!empty($_GET['index']))?$_GET['index']: 0;

if($user != NULL ){
    $get_bookmark = getBookmark($index, $user);
    
    $response = $get_bookmark;
} else {
    $response['success'] = "0";
    $response['message'] = "Oh god plesas no!";
}

echo json_encode($response);
