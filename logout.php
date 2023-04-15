<<?php 
session_start();

if(isset($_Sesion['user_id']))

{
    unset($_SESSION['user_user']);
}
header("loaction:login.php");
die;
