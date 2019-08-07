<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Everything has been optimized, please don't touch anything.
//Unless you know what you're doing! -Huynhmps06515-

require 'lib/Medoo.php';
 
use Medoo\Medoo;
 
$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'manga',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',]);

//check login user
function checkUser($user, $pass){
    global $database;
        
    if ($database -> has("user", [
            "AND" => [
                    "OR" => [
                            "username" => "$user"
                    ],
                    "password" => "$pass"
            ]
    ]))
    {
            return TRUE;
    }
    else
    {
            return FALSE;
    }
}

//get user detail base on username input
function getUser($user){
    global $database;
    
    $getUser = $database -> get("user", "*", [
       "username" => "$user"
    ]);
    
    return $getUser;
}

//for user register
function userRegister($user, $pass, $email, $date){
    global $database;
    
    $user_reg = $database -> insert("user", [
        "username" => "$user",
        "password" => "$pass",
        "email" => "$email",
        "date_add" => "$date"
    ]);
   
    return $user_reg;
}

//find match username
function matchUsername($user){
    global $database;
    
    if ($database -> has("user", [
        "username" => "$user"
    ]))
    {
            return TRUE;
    }
    else
    {
            return FALSE;
    }
}

//find match email
function matchEmail($mail){
    global $database;
    
    if ($database -> has("user", [
        "email" => "$mail"
    ]))
    {
            return TRUE;
    }
    else
    {
            return FALSE;
    }
}

//for updating user
function userUpdate($user, $email, $date){
    global $database;
    
    $user_update = $database -> update("user", [
        "email" => "$email",
        "date_update" => "$date"
    ],  ["username" => "$user"]);
    
    return $user_update;
}

//save bookmark
function saveBookmark($user, $bm){
    global $database;
    
    $save_bookmark = $database -> insert("bookmark", [
        "user" => "$user",
        "bookmark" => "$bm"
    ]);
    
    return $save_bookmark;
}

//get bookmark from user
function getBookmark($user){
    global $database;
    
    $getBookMark = $database -> select("bookmark", ["bookmark"],[
        "user" => "$user"
    ]);
    
    return $getBookMark;
}

//get all the comic name, desc, type & date
function getAllComic($index) {
    global $database;
    
    $total = 14; 
    
    $get_link = $database -> select("comic", "*",[
        "ORDER" => ["id" => "DESC"],
        "LIMIT" => [$total * $index, $total]
    ]);
    
    return $get_link;
}

//get all the category
function getCategory($index){
    global $database;
    
    $total = 14; 
    
    $get_category = $database -> select("category", "*",[
        "ORDER" => ["id" => "DESC"],
        "LIMIT" => [$total * $index, $total]
    ]);
    
    return $get_category;
}

//get chapter base on comic name
function getChapter($name, $chap){
    global $database;
    
    $get_chapter = $database -> select("chapter", ["id", "comic", "chapter", "category", "thumb", "date_add", "date_update"], [
        "AND" => [
            "OR" => ["comic[~]" => "$name",
                "chapter[~]" => "$chap"
            ]]]);
    
    return $get_chapter;
}

function countChap($name){
    global $database;
    
    $count = $database -> count("chapter", [
       "comic" => "$name" 
    ]);
}