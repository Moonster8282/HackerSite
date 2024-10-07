
<?php

require_once("core/dbconn.php");
        $db = dbconnect();
$bNo = $_GET['bno'];

$query = "select b_title, b_password, b_content, b_date, b_hit, b_id, b_filename, b_protected, b_pwd from board_free  where b_no ='{$bNo}'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

if($_GET['aconld'] != "") {

  ?><form id="getit"action="./" method="get">
    <input type="hidden" name="page" value="send">
    <input type="hidden" name="bno" value="<?php echo $bNo?>">
    <input type="hidden" name="condition" value="notgood">
    <input type="submit" autofocus >
    <script type="text/javascript">
    this.document.getElementById("getit").submit();
    </script>

<?php
}

$path = "./uploads/".$row['b_filename'];
if ($row['b_protected'] == 0) {

      include("./bigboard/board/view.php"); //뷰페이지로딩

} else if($_GET['admin'] == "Yes") {
      include("./bigboard/board/view.php"); //어드민 파라미터 확인시 비밀번호없이 글열람
} else {

      include("./bigboard/board/check.php"); //체크페이지

  }
?>
