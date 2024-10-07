<?php
 require_once("core/dbconn.php");
 $db = dbconnect();
 $condition = $_GET['condition'];
 $bNo = $_GET['bno'];

 $row = "";
 $query = "select b_title, b_password, b_content, b_date, b_hit, b_id, b_filename, b_protected, b_pwd from board_free where b_no ='{$bNo}'";
 $result = mysqli_query($db, $query);
 $row = mysqli_fetch_assoc($result);

 if($condition == "good") {
         include("./bigboard/board/view.php"); //뷰페이지로딩
 } else {
   header("Location: /hackersite/?page=board");
 }
 ?>
