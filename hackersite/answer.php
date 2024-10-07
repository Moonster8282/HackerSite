  <?php
  $name = $_POST['name'];
  $answer = $_POST['answer'];

  if(isset($name)) {

  require_once("core/dbconn.php");
  $db = dbconnect();
  $query = "insert into Answer (number, name, answer) values(null, '{$name}', '{$answer}')";
  $result = mysqli_query($db, $query);

  if($result) {
    echo "<script>alert('성공적으로 전송했습니다.')</script>";
  } else {
    echo "<script>alert('전송실패!')</script>";
  }
}

?>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/board.css" />
<article class="boardArticle">
<div id="boardPass">
<h3 id="boardTitle">정답 전송지 입니다.</h3>
<tbody>
  <form action="./?page=answer" method="POST">
  <tr>
      <td scope="row"><label for="bTitle">이름 입력</label></td>
      <td class="title"><input type="text" name="name" id="name" required style="width: 200px" ></td>
  </tr>
  <br>
  <tr>
    <td scope="row"><label for="bTitle">정답 입력</label></td>
    <td class="title"><input type="text" name="answer" id="answer" required style="width: 400px" ></td>
    <input type = "submit" value = "확인">
  </tr>
  </form>
    </tbody>
</div>
</article>
