<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: 0;

if($user != NULL){
    $get_user = getUser($user);
    
    $response = $get_user;
} else {
    $response = "User can't be empty";
}

echo json_encode($response);

