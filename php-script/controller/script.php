<?php
session_start();

require('database.php');
include(__DIR__.'/../classes/classes.php');

if (isset($_POST['logQuizz']))  insertUser();

function insertUser(){
    $user = new Player();
    $user->setname($_POST['input_name']);
    $user->createUSER();
    header("location: quiz.php");
}


?>