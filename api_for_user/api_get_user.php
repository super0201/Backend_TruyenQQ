<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: 0;

if ($user == NULL){
    echo json_encode('Please input user!');
} else {    
    $get_user = getUser($user);
    
    echo json_encode($get_user);
}

