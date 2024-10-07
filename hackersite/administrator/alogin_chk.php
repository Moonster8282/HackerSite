<?php
$uid = $_POST['uid'];
$upw = $_POST['upw'];
if(($uid) && ($upw)){
  require_once("core/dbconn.php");
  $db = dbconnect();
  $uid = addslashes($uid);
  $query = "select id,pw from admin where id='{$uid}' and pw='{$upw}'";
  $result = mysqli_query($db,$query);
  $row = mysqli_fetch_array($result);
  if(!strcmp($row['pw'],$upw)){
    $_SESSION['uid'] = $_POST['uid'];
    header("Location: /hackersite/?page=aboard");
    exit;
  }
  else echo "you fail";
}
else exit("<script>alert('login fail');history.go(-1);</script>");
?>
