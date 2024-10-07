<?php
include("../../core/dbconn.php");
$db = dbconnect();

$table = "board_free";
$bno = $_GET['bno'];

$sql = "select b_filepath from ".$table." where b_no ='{$bno}'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);


$filepath = $row['b_filepath'];;
$filesize = filesize($filepath);
$path_parts = pathinfo($filepath);
$filename = $path_parts['basename'];
$extension = $path_parts['extension'];

header("Pragma: public");
header("Expires: 0");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename= $filename");
header("Content-Transfer-Encoding: binary");
header("Content-Length: $filesize");

ob_clean();
flush();
readfile($filepath);

?>
