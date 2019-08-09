<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_POST['user']))?$_POST['user']: NULL;
$pass = (!empty($_POST['pass']))?$_POST['pass']: NULL;
$name = (!empty($_POST['name']))?$_POST['name']: NULL;
$date = (!empty($_POST['date']))?$_POST['date']: 0;


if ($user != NULL && $pass != NULL && $name != NULL && $date != 0) {
    if (matchUsername($user)) {
        $response["result"] = "failure";
        $response["message"] = "User Already Registered !";
    } else {
        userRegister($user, $pass, $name, $date);
        
        $response["result"] = "success";
        $response["message"] = "User Registered Successfully !";
    }
} else {
    $response['result'] = "failure";
    $response['message'] = "Username, Password, Name, Date_add can't be empty";
}

echo json_encode($response);
