<?php
function dbconnect(){
$hostname="localhost";
$user="root";
$password="sekupw";
$database="mysql";
$db=mysqli_connect($hostname,$user,$password) or die("db connection error");
mysqli_select_db($db,$database) or die("db connection error2");
mysqli_query($db,"set names utf8");
return $db;
}
?>
