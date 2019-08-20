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
$name = (!empty($_GET['name']))?$_GET['name']: NULL;
$thumb = (!empty($_GET['thumb']))?$_GET['thumb']: 0;
$date = (!empty($_GET['date']))?$_GET['date']: 0;


if ($user != NULL && $pass != NULL && $name != NULL && $date != 0) {
    if (matchUsername($user)) {
        $response["result"] = "0";
        $response["message"] = "User Already Registered !";
    } else {
        userRegister($user, $pass, $name, $thumb, $date);
        
        $response["result"] = "1";
        $response["message"] = "User Registered Successfully !";
    }
} else {
    $response['result'] = "0";
    $response['message'] = "Username, Password, Name, Date_add can't be empty";
}

echo json_encode($response);
