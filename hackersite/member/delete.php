<?php
$uid = $_GET['uid'];
require_once("../core/dbconn.php");
$db = dbconnect();
$query = "select * from member where id='{$uid}'";
$result = mysqli_query($db, $query);
if($result) {
  $query = "delete from member where id = '{$uid}'";
  $result = mysqli_query($db, $query);
    if($result) {
      ?><script>alert('계정이 탈퇴 되었습니다')</script><?php
       include("./logout.php");
    } else { ?><script>alert('계정 탈퇴를 실패했습니다')</script><?php 	}
}
?>
