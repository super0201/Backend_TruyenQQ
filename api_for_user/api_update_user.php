<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$name = (!empty($_GET['name']))?$_GET['name']: NULL;
$email = (!empty($_GET['email']))?$_GET['email']: NULL;
$date = (!empty($_GET['date']))?$_GET['date']: 0;

if($user != NULL || $email != NULL || $name != NULL || $date != NULL ){
    $update_user = userUpdate($user, $name, $email, $date);
    
    $response['success'] = "1";
    $response['message'] = "Update success Rintaro!";
    
} else if($update_user == "false"){
    $response['success'] = "0";
    $response['message'] = "Nani? Omae wa mou shinderu!";
} else {
    $response['success'] = "0";
    $response['message'] = "Mr.Stark...I don't feel so good!";
}

echo json_encode($response);