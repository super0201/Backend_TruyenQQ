<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$pass = (!empty($_GET['pass']))?$_GET['pass']: NULL;

if ($user != NULL || $name != NULL){
    $result = updatePass($user, $pass);
    
    $response['success'] = "1";
    $response['message'] = "So Wow! So Amazed!";
    
} else {
    $response['success'] = "0";
    $response['message'] = "What the f..k is this? R u f.ckin kid'in me?";
}

echo json_encode($response);