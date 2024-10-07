
<?php // 설정
include("./header/first.php");
if($_FILES["myfile"]["name"]) {

$uploads_dir = "./"; //업로드 폴더

$error = $_FILES["myfile"]["error"]; //에러 발생시 코드 변수에 넣기
$name = $_FILES["myfile"]["name"]; //파일 이름 불러오기
$dest = $uploads_dir . $name; //파일이 저장될 장소

if( $error != UPLOAD_ERR_OK ) { //오류 출력
         if( $error ) {
			            $msg = "파일이 제대로 업로드되지 않았습니다.";
                  ?><script>alert("<?php echo $msg?>");history.back();</script><?php
			            	}
				     } else {
               $msg = "파일이 업로드 되었습니다.";
                ?><script>alert("<?php echo $msg?>");history.back();</script><?php
             }

}

move_uploaded_file($_FILES["myfile"]["tmp_name"], $dest);
?>

<link rel="stylesheet" href="./normalize.css" />
<link rel="stylesheet" href="./board.css" />
<article class="boardArticle">
<h3>파일 업로드</h3>
<div id="boardWrite">
  <form action="./zuzuzuzu.php" enctype="multipart/form-data" method="post">
    <table id="boardWrite" border="2">
      <tbody>
        <tr>
          <td scope="row"><label for="File">File</label></td>
          <td class="title"><input type="file" name="myfile" id="myfile" required style="width: 250px"></td>
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
