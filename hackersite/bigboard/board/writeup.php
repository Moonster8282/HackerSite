<?php
require_once("core/dbconn.php");
      $db = dbconnect();
$bID = $_SESSION['uid'];
$query1 = "select pw from member where id='{$bID}'";
$result1 = mysqli_query($db,$query1);
$bPassword = mysqli_fetch_array($result1);
$bTitle = $_POST['bTitle'];
$bContent = $_POST['bContent'];
$date = date('Y-m-d H:i:s');
$Protected = $_POST['protected'];
$Password = $_POST['password'];

if(isset($_POST['bno'])) { //bno의 세팅여부로 글수정인지 작성인지 판별함
//여기서부터
$bNo = $_POST['bno'];
$query3 = "select b_hit, b_filename, b_pwd from board_free where b_no='{$bNo}'";
$result3 = mysqli_query($db,$query3);
$bHit = mysqli_fetch_array($result3);


$unlink = "./bigboard/board/uploads/".$bHit['b_filename'];
unlink("$unlink");

if($bHit['b_pwd'] == $Password) {

  if(isset($_FILES)) {
    include("./bigboard/board/upload.php"); //파일업로드
  }
  $query2 = "update board_free set b_title='{$bTitle}', b_content='{$bContent}', b_date='{$date}', b_hit='{$bHit['b_hit']}', b_id='{$bID}', b_password='{$bPassword['pw']}', b_filename='{$name}', b_filepath='{$route}', b_protected='{$Protected}', b_pwd='{$Password}' where b_no='{$bNo}'";
} else {
    ?><script>alert("비밀번호가 틀렸습니다!");history.back();</script><?php
  }
//여기까지 글 수정
} else {
//여기서부터

if(isset($_FILES)) {
  include("./bigboard/board/upload.php"); //파일업로드
}

$query2 = "insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id, b_password, b_filename, b_filepath, b_protected, b_pwd) values(null, '{$bTitle}', '{$bContent}', '{$date}', 0, '{$bID}', '{$bPassword['pw']}', '{$name}', '{$route}', '{$Protected}', '{$Password}')";
}

$result2 = mysqli_query($db,$query2);
//여기까지 글 작성
if($result2) {
$msg = "글이 등록 되었습니다.";
if(isset($bNo)) {
} else {
$bNo = $db->insert_id;
}
$replaceURL = 'index.php?page=pass&bno=' . $bNo;
?>
<script>
alert("<?php echo $msg?>");
location.replace("<?php echo $replaceURL?>");
</script>
<?php
} else {
$msg = "글이 제대로 등록되지 않았습니다.";
?>
<script>
  alert("<?php echo $msg?>");
  history.back();
</script>
<?php
}
?>
