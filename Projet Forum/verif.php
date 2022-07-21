<?php         
require "PHPMailer/PHPMailerAutoload.php";
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=forum;', 'root', '');