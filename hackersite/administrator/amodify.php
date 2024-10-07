<?php
 $uid = $_POST['id'];
 $upw = $_POST['password'];

 require_once("../core/dbconn.php");
 $db = dbconnect();
 $query = "select * from member where id='{$uid}'";
 $result = mysqli_query($db, $query);
 $row = mysqli_fetch_assoc($result);

 if(1) {

   $uname = $_POST['name'];

   $ugender = $_POST['gender'];
   $ubirthday = $_POST['birthday'];
   $uphone = $_POST['phone'];
   $uhobby = $_POST['hobby'];
   $uemail = $_POST['email'];

   $query2 = "update member set name='{$uname}', gender='{$ugender}', birthday='{$ubirthday}', phone='{$uphone}', hobby='{$uhobby}', email='{$uemail}' where id='{$uid}'";

   $result = mysqli_query($db, $query2);
   if($result){} else{echo "<script>alert('1 오류가 발생 했습니다');history.back();</script>";}
   echo "<script>alert('수정되었습니다');window.location.replace('../?page=aboard');</script>";
 } else {
   echo "<script>alert('2 오류가 발생 했습니다');history.back();</script>";
 }
?>
