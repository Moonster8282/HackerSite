<?php
if($_SESSION['uid'] != null) {
if(isset($_GET['bno'])) {
$bNo = $_GET['bno'];
}
if(isset($bNo)) {
require_once("core/dbconn.php");
$db = dbconnect();
$query = "select b_title, b_content, b_id, b_password from board_free2 where b_no = '{$bNo}'";
$result = mysqli_query($db ,$query);
$row = mysqli_fetch_assoc($result);
}
?>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/board.css" />
<article class="boardArticle">
<h3>Free board Writing</h3>
<div id="boardWrite">
  <form action="index.php?page=writeup4" enctype="multipart/form-data" method="post">
    <?php
    if(isset($bNo)) {
echo '<input type="hidden" name="bno" value="' . $bNo . '">';
    }
    ?>
    <table id="boardWrite" border="2">

      <tbody>
        <tr>
          <td scope="row"><label for="bTitle">Title</label></td>
          <td class="title"><input type="text" name="bTitle" id="bTitle" required style="width: 250px" value="<?php echo isset($row['b_title'])?$row['b_title']:null?>"></td>
        </tr>
        <tr>
          <td scope="row" height="100px"><label for="bContent">Content</label></td>
          <td class="content"><textarea name="bContent" id="bContent" required style="height: 300px; width: 350px"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
        </tr>
        <tr>
          <td scope="row"><label for="File">File</label></td>
          <td class="title"><input type="file" name="myfile" id="myfile" required style="width: 250px"></td>
        </tr>
         <tr>
          <td scope="row"><label for="">Post Type</label></td>
          <td>
          <input type="radio" name="protected" id="protected" value="0" checked="checked"><label for='protected'>Public</label>
          <input type="radio" name="protected" id="protected" value="1" ><label for='protected'>Secret</label>
          </td>
          <tr>
            <td scope="row"><label for="password">Password</label></td>
            <td class="title"><input type="text" name="password" id="password" required style="width: 250px"></td>
          </tr>
        </tr>
      </tbody>
    </table>
    <div class="btnSet">
      <button type="submit" class="btnSubmit btn"><?php echo isset($bNo)?'Modify':'Upload'?></button>
      <a href="index.php?page=board4" class="btnList btn">List</a>
    </div>
  </form>
</div>
</article>
<?php
} else{ echo "pls login first.";}
?>
