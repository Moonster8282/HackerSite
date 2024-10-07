<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hacker's Secret Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="./style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="banner">
    <h1>Moon's Security</h1>
    <p class="slogan">Hacker's Secret Site</p>
  </div>
  <div id="navbar">
    <ul>
      <li>Home</a></li>
      <li>Photo</a></li>
      <li>Board</a></li>
      <li>M/V</a></li>
    </ul>
  </div>
  <div class="clear">&nbsp;</div>
  <div id="sidebar">
    <h2>Menu</h2>
    <ul>
      <li>Home</li>
<?php
  if($_SESSION['uid']){
  echo "      <li>MyPage</li>\n";
  echo "      <li>Logout</li>\n";
  }
  else {
  echo "      <li>Login</li>\n      <li>Join</li>";
  }
?>
    </ul>
  </div>
  <div id="content">
