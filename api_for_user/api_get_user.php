<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: 0;

if ($user != NULL){
    $get_user = getUser($user);
    
   if($get_user != NULL){
        $response["success"] = "1";
        $response["user"] = array();

        array_push($response["user"], $get_user);
   }
  
} else {  
    
    $response["success"] = "0";
    $response["message"] = "No User Like This";  
}

echo json_encode($response);

