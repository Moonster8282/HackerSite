<?php
	$query1 = 'select pw from member where id="'.$_SESSION['uid'].'"';
	$result1 = mysqli_query($db,$query1);
	$bID = $_SESSION['uid'];
	$bPassword = $result1;
	//echo $_SESSION['uid'];
	//echo $result1;
	//echo "hello";
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];
	$date = date('Y-m-d H:i:s');
	$query2 = 'insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password) values(null, "' . $bTitle . '", "' . $bContent . '", "' . $date . '", 0, "' . $bID . '", "' . $bPassword . '")';
	$result2 = mysqli_query($db,$query2);
	if($result2 != null) {
		$msg = "Your post uploaded normally.";
		$bNo = $db->insert_id;
		$replaceURL = './view.php?bno=' . $bNo;
	} else {
		$msg = "Your post failed to upload.";
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
	}
?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>