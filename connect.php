<<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="login_sample";


//database connect

if(!$con= mysqli_connect($servername,$username,$password,$dbname))

{

    die("connection failed");
}
