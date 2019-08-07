<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$email = (!empty($_GET['email']))?$_GET['email']: NULL;

if ($user == NULL){
    $check_mail = matchMail($email);
    
    echo json_encode($check_mail);
    
} else if($email == NULL) {
    $check_user = matchUsername($user);
    
    echo json_encode($check_user);
}


