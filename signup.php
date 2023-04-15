<<?php 
session_start();
include("connect.php");
include("connect.php");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>signup</title>
 </head>
 <body>
 	<style type="text/css">
 		
 		#text{
 			height: 60px;
 			border-radius:5px ;
 			padding: 4px;
 			border: solid thin #aaa;
 		}
 		#button{

 			padding: 10;
 			width: 300px;
 			color: blue;
 			background-color: lightblue;
 			border: none;
 		}
 		#box{
 			margin: auto;
 			width: 600px;
            padding: 20;
 			background-color: darkblue;



 		}
 	</style>
    <div id="box">
        <form method="post">
            <div style="font-size: 20px; margin: 12px; color: lightgray;">siginup</div>

            <input id="text"placeholder="Name" name="user_name">
            <br><br>

            <input id="text" placeholder="password"name="password">
            <br><br>

            <input id="button" type="submit" name="signup">
            <br><br>

            <a href="loginnup.php"> click to login</a>
            
        </form>
        
    </div>
 </body>
 </html>

