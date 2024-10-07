<?php
$uid = $_POST['uid'];
$upw = $_POST['upw'];
$uname = $_POST['uname'];
$ugender = $_POST['ugender'];
$ubirthday = $_POST['ubirthday'];
$uphone = $_POST['uphone'];
$uhobby = $_POST['uhobby'];
$uemail = $_POST['uemail'];

if(($uid) && ($upw)){
  require_once("../core/dbconn.php");
  $db = dbconnect();
  $uid = addslashes($uid);
  $upw = addslashes($upw);
  $query = "select id from member where id='{$uid}'";
  $result = mysqli_query($db,$query);
  $row = mysqli_fetch_array($result);
  if($row['id']) {exit("<script>alert('아이디가 이미 존재합니다.');history.go(-1);</script>");}
  else{
    $query = "insert into member values('{$uid}','{$upw}','{$uname}','{$ugender}','{$ubirthday}','{$uphone}','{$uhobby}','{$uemail}')";
    mysqli_query($db,$query);
    header("Location: ../?page=login");
    exit;
  }
}
else {exit("<script>alert('join fail');history.go(-1);</script>");}
?>
