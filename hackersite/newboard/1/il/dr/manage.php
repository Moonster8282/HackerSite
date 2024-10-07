<?php // 설정
include("./header/first.php");
include("./header/dbconn.php");
$pass = alertsuccess;
if($pass == $_POST['password']) {
  //여기서 부터건들지마세요
  $name = "Moon";
  $db = dbconnect();
  $query = "insert into listofhacker (no, name) values(null, '{$name}')";
  mysqli_query($db, $query);
  //여기까진 건들지마세요
?><h3>성공!!</h3><?php
}

?>

<link rel="stylesheet" href="./normalize.css" />
<link rel="stylesheet" href="./board.css" />
<article class="boardArticle">
<h3>비번을 입력하세요</h3>
<div id="boardWrite">
  <form action="./manage.php" enctype="multipart/form-data" method="post">
    <table id="boardWrite" border="2">
      <tbody>
        <tr>
          <td scope="row"><label for="Password">Password</label></td>
          <td class="title"><input type="text" name="password" id="password" required style="width: 250px"></td>
        </tr>
      </tbody>
    </table>
    <div class="btnSet">
      <button type="submit" class="btnSubmit btn">Upload</button>
      <a href="./upload.php" class="btnList btn">List</a>
    </div>
  </form>
</div>
</article>
<?php
include("./header/last.php");
?>
