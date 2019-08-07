<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: 0;
$email = (!empty($_GET['email']))?$_GET['email']: 0;
$date = (!empty($_GET['date']))?$_GET['date']: 0;

$update_user = userUpdate($user, $pass, $email, $date);

echo json_encode($update_user);