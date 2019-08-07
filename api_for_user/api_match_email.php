<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$mail = (!empty($_GET['mail']))?$_GET['mail']: NULL;

if ($mail == NULL){
    echo json_encode('Please input user for checking!');
} else {
    $check_mail = matchEmail($mail);

    echo json_encode($check_mail);
}
