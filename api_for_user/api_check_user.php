<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: 0;
$pass = (!empty($_GET['pass']))?$_GET['pass']: 0;

if ($user == 0 || $pass == 0){
    echo json_encode('Please input user and password correctly!');
} else {
    $check_user = checkUser($user, $pass);
    if ($check_user){
        $response["result"] = "1";
        $response["message"] = "Login Success";
    } else {
        $response["result"] = "0";
        $response["message"] = "Username or Password isn't correct";
    }

    echo json_encode($response);
}
