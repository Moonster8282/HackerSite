<?php
	$query1 = "select pw from member where id='{$uid}'";
	$result1 = mysqli_query($db,$query1);
	$bID = $_SESSION['uid'];
	$bPassword = $result1;
	echo $_SESSION['uid'];
	echo $bPassword;
	echo "hello";
?>