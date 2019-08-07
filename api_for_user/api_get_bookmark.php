<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;

$get_bookmark = getBookmark($user);

if ($user == NULL){
    echo json_encode('Please input user to get bookmark!');
    
} else if ($get_bookmark == NULL){
    echo 'No bookmark!';
    
} else {
    
    echo json_encode($get_bookmark);   
}
