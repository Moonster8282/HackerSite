<?php
$uid = $_POST['uid'];
$upw = $_POST['upw'];

if ($uid && $upw) {
    require_once("core/dbconn.php");
    $db = dbconnect();
    $uid = addslashes($uid);
    $query = "SELECT id, pw FROM member WHERE id='{$uid}' AND pw='{$upw}'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    if (!strcmp($row['pw'], $upw)) {
        $_SESSION['uid'] = $uid;  // 세션에 사용자 ID 저장
        // 로그인 성공 후 리다이렉트 또는 메시지 표시
        exit;
    } else {
        echo "you fail";
    }
} else {
    exit("<script>alert('login fail');history.go(-1);</script>");
}
?>
