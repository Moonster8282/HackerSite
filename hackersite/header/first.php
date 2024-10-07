<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hacker's Secret Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="banner">
    <h1>Moon's Security</h1>
    <p class="slogan">Hacker's Secret Site</p>
  </div>
  <div id="navbar">
    <ul>
      <li><a href="./">Home</a></li>
      <li><a href="./?page=photo">Photo</a></li>
      <li><a href="./?page=board">Board</a></li>
      <li><a href="./?page=video">M/V</a></li>
      <li><a href="./?page=answer">정답 전송</a></li>
    </ul>
  </div>
  <div class="clear">&nbsp;</div>
  <div id="sidebar">
    <h2>Menu</h2>
    <ul>
      <li><a href="./">Home</a></li>
<?php
  if($_SESSION['uid']){
  echo "      <li><a href=\"./?page=me\">MyPage</a></li>\n";
  echo "      <li><a href=\"./?page=logout\">Logout</a></li>\n";
  }
  else {
  echo "      <li><a href=\"./?page=login\">Login</a></li>\n      <li><a href=\"./?page=join\">Join</a></li>";
  }
  for($count = 1; $count <= 3; $count++) {
  echo "      <li><a href=\"./?page=mini$count\">미니게임$count</a></li>\n";
  }
  for($count = 4; $count <= 6; $count++) {
  echo "      <li><a href=\"./?page=board$count\">비밀글$count</a></li>\n";
  }
  for($count = 1; $count <= 13; $count++) {
  echo "      <li><a href=\"./?page=board$count\">게시판$count</a></li>\n";
  }
?>
    </ul>
  </div>
  <div id="content">
