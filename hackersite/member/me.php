<?php
require_once("core/dbconn.php");
$db = dbconnect();
$uid = $_SESSION['uid'];
if($uid) {

$query = "select * from member where id='{$uid}'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);

} else { echo "<script>alert('로그인을 먼저 해주세요');history.back();</script>";}
?>

<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/board.css" />
<article class="meArticle" >
<h3 style="color : #000000;" align="center">개인정보</h3>
<div id="meWrite">
<form action="./member/modify.php" method="post">
<table id="Private" border="2" align="center">
  <tbody>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="아이디">아이디</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="id" id="id" required style="width: 250px" disabled value="<?php echo isset($row['id'])?$row['id']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="비밀번호">비밀번호</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="password" id="password" required style="width: 250px" placeholder="기존 비밀번호" value=""></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="name">이름</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="name" id="name" required style="width: 250px" value="<?php echo isset($row['name'])?$row['name']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="gender">성별</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="gender" id="gender" required style="width: 250px" value="<?php echo isset($row['gender'])?$row['gender']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="birthday">생년월일</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="birthday" id="birthday" required style="width: 250px" value="<?php echo isset($row['birthday'])?$row['birthday']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="phone">전화번호</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="phone" id="phone" required style="width: 250px" value="<?php echo isset($row['phone'])?$row['phone']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="hobby">취미</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="hobby" id="hobby" required style="width: 250px" value="<?php echo isset($row['hobby'])?$row['hobby']:null?>"></td>
    </tr>
    <tr>
      <td scope="row" style="padding:5px 0;border-top:2px solid #666;border-bottom:1px solid #666; background-color: #808080; color : #FFFFFF;" ><label for="email">이메일</label></td>
      <td class="title" style="padding:8px 0;border-bottom: 1px solid #666; background-color: #d3d3d3; color : #000000;"><input type="text" name="email" id="email" required style="width: 250px" value="<?php echo isset($row['email'])?$row['email']:null?>"></td>
    </tr>
  </tbody>
</table>
<div class="btnSet" align="center">
  <input type="hidden" name="id" value="<?php echo $row['id']?>">
  <button type="submit" class="btnSubmit btn">수정하기</button>
  <a href="./member/delete.php?uid=<?php echo $uid?>">탈퇴하기</a>
</div>
</form>
</div>
</article>
