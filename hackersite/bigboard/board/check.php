<?php

require_once("core/dbconn.php");
        $db = dbconnect();
$bNo = $_GET['bno'];
//"><script>alert(1)</script>
$query = "select b_title, b_password, b_content, b_date, b_hit, b_id, b_filename, b_protected, b_pwd from board_free  where b_no ='{$bNo}'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

 $password = $_GET['password'];
 if ($row['b_pwd'] != $password) {
 ?><script>alert(<?php echo "$bNo"?>)</script>
 <link rel="stylesheet" href="css/normalize.css" />
 <link rel="stylesheet" href="css/board.css" />
 <article class="boardArticle">
 <div id="boardPass">
 <h3 id="boardTitle">비밀글 입니다.</h3>
 <tbody>
   <form action="./" method="get">
   <tr>
     <td scope="row"><label for="bTitle">비번 입력</label></td>
     <td class="title"><input type="text" name="password" id="password" required style="width: 100px" ></td>
     <input type="hidden" name="page" value="<?php echo $page?>">
     <input type="hidden" name="bno" value="<?php echo $bNo?>">
     <input type="hidden" name="aconld" value="stupid">
     <input type = "submit" value = "확인">
   </tr>
 </tbody>
<?php
  } else {
    if($_GET['page'] == delete) {
    include("./bigboard/board/delete.php"); //딜리트 페이지로딩
    } else {
    include("./bigboard/board/view.php"); //뷰페이지로딩
    }
  }
?>
