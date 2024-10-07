<?php
function dbconnect(){
$hostname="db";
$user="sekuid";
$password="sekupw";
$database="mydb";
$db=mysqli_connect($hostname,$user,$password) or die("db connection error");
mysqli_select_db($db,$database) or die("db connection error2");
mysqli_query($db,"set names utf8");
return $db;
}
?>
