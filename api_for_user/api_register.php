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
$email = (!empty($_GET['email']))?$_GET['email']: 0;
$date = (!empty($_GET['date']))?$_GET['date']: 0;

if ($user == 0 || $pass == 0 || $email == 0){
    echo json_encode(array('error' => 'Please input: Username, Password, Email, Date to register!'));
} else {
    $user_register = userRegister($user, $pass, $email, $date);

    echo json_encode($user_register);
}