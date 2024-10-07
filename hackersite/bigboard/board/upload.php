<?php // 설정
$uploads_dir = "./bigboard/board/uploads/"; //업로드 폴더
$allowed_ext = array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF"); // 되는 확장자명 등록
$error = $_FILES["myfile"]["error"]; //에러 발생시 코드 변수에 넣기
$name = $_FILES["myfile"]["name"]; //파일 이름 불러오기
$dest = $uploads_dir . $name; //파일이 저장될 장소
$route = "./uploads/".$name;
$ext = array_pop(explode(".", $name)); // 오류 확인
if( $error != UPLOAD_ERR_OK ) {
         if( $error ) {
			            $msg = "파일이 제대로 업로드되지 않았습니다.";
                  ?><script>alert("<?php echo $msg?>");location.replace("index.php?page=board");</script><?php
			            	}
				     }
if( !in_array($ext, $allowed_ext) ) { // 확장자 확인
$msg = "허용되지 않는 확장자입니다.";
?><script>alert("<?php echo $msg?>");location.replace("index.php?page=board");</script><?php
}

move_uploaded_file($_FILES["myfile"]["tmp_name"], $dest);
?>
