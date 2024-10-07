<?php
if(isset($_GET['bno'])) {
  $bNo = $_GET['bno'];
}
require_once("core/dbconn.php");
$db = dbconnect();
$query = "select b_id, b_filename from board_free2 where b_no='{$bNo}'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);


$unlink = './uploads/'.$row['b_filename'];
unlink($unlink);
require_once("core/dbconn.php");
$db = dbconnect();
$query = "delete from board_free2 where b_no = '{$bNo}'";
$result = mysqli_query($db, $query);
  if($result) {
    ?><script>alert('your post has deleted!')</script><?php
  } else { ?><script>alert('your post has failed to delete')</script><?php 	}
?><script>window.location.replace("index.php?page=board4");</script><?php
