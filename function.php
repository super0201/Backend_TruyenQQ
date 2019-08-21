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
    
    $getUser = $database -> get("user", ["username", "email", "name", "thumb", "date_add", "date_update"], [
       "username" => "$user"
    ]);
    
    return $getUser;
}

//for user register
function userRegister($user, $pass, $name, $thumb, $date){
    global $database;
    
    if ($thumb == 0){
        $thumb = "https://i.imgur.com/quvASJgh.png";
    }
    
    $register = $database -> insert("user", [
        "username" => "$user",
        "password" => "$pass",
        "thumb" => "$thumb",
        "name" => "$name",
        "date_add" => "$date"
    ]);
   
    return $register;
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

//for password update
function updatePass($user, $pass){
    global $database;
    
    $update_pass = $database -> update("user", [
        "password" => "$pass"],[
            "username" => "$user"
        ]);
    
    return $update_pass;
}

//for updating user
function userUpdate($user ,$name, $email, $date){
    global $database;
    
    $database -> update("user", [
        "email" => "$email",
        "date_update" => "$date",
        "name" => "$name"
    ],  ["username" => "$user"]);
    
    return TRUE;
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

//match bookmark
function matchBookmark($user, $bm){
    global $database;
    
    if ($database -> has("bookmark", [
        "user" => "$user",
        "bookmark" => "$bm"
    ]))
    {
            return TRUE;
    }
    else
    {
            return FALSE;
    }
}

//get bookmark from user
function getBookmark($index, $user){
    global $database;
    
    $total = 14;
    
    $getBookMark = $database -> select("bookmark", "*",[
        "user" => "$user"],[
            "ORDER" => ["id" => "DESC"],
            "LIMIT" => [$total * $index, $total]
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

//get all the comic name, desc, type & date
function getAllComic2($index) {
    global $database;
    
    $total = 14; 
    
    $get_link = $database -> select("novel", "*",[
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

function getComicCate($index, $cate){
    global $database;
    
    $total = 14;

    $get_search = $database -> select("comic", "*", [
        "AND" => [
            "OR" => [ 
                "category[~]" => "$cate"]
            ],
            "ORDER" => ["id" => "DESC"],
            "LIMIT" => [$total * $index, $total]
    ]);
    
    return $get_search;
}

//get chapter base on comic name
function getChapter($name, $chap){
    global $database;
    
    $get_chapter = $database -> select("chapter", ["id", "comic", "chapter", "category", "thumb", "date_add", "date_update"], [
        "comic" => "$name",
        "chapter" => "$chap"
    ]);

    return $get_chapter;
}

function countChap($name){
    global $database;
    
    $count = $database -> count("chapter", [
       "comic" => "$name" 
    ]);
}