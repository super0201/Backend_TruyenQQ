<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../function.php';
header('Content-Type: application/json');

$user = (!empty($_GET['user']))?$_GET['user']: NULL;
$bm = (!empty($_GET['bm']))?$_GET['bm']: NULL;

if ($user != NULL || $bm != NULL){
    $match = matchBookmark($bm, $user);
    
    if($match != TRUE){
        $response['success'] = "1";
        $response['message'] = "Wow this user already has a bookmark!";
    }
} else {
    $response['success'] = "0";
    $response['message'] = "Good luck next time! LOL";
}

echo json_encode($response);