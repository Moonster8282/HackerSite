<?php
  require_once("core/dbconn.php");

    $p = $_GET['p'] ? $_GET['p'] : 1;

  $db=dbconnect();
  $query = "select * from member ";
  $result = mysqli_query($db,$query);
  $count = mysqli_num_rows($result);

  $p = (($p * 20 - $count) >= 20) ? 1 : $p; #페이지*20 - 카운트 가 20보다 크거나 같으면 게시판수는 그정도로 안넘어감으로 1로 강제설정해줌 아닐경우 페이지그대로 설정

  $exist = $count - (($p == 1) ? 0 : (($p - 1) * 20)); #페이지가 1이면 카운트에 0을 빼주고 아니면 페이지*20한 값을 빼준다 그리고 그걸 익시스트에 저장
  $leastcount = (20 < $exist) ? 0 : 20 - $exist; #이것은 글의 갯수가 20개 이하일시 더미로 게시판을 생성해주기위한 밑작업입니다
  $twcounter = 1;
  $count++;
  $cindex = ($p == 1) ? 0 : (($p - 1) * 20);

  for($index = 1; $index <= $cindex; $index++) {
    $row = $result->fetch_assoc();
    $count--;
  }

  while(($row = mysqli_fetch_assoc($result)) && ($twcounter <= 20)) #값이 있는 게시판 생성을 위한 while
  {
    $twcounter++;
    $count--;
?>
<tr>
<td class="no"><?php echo $count?></td>
<td class="id"><a href="./?page=ame&a_no=<?php echo $row['a_no']?>"><?php echo $row['id']?></td>
<td class="name"><?php echo $row['name']?></td>
<td class="phone"><?php echo $row['phone']?></td>
<td class="email"><?php echo $row['email']?></td>
</tr>
<?php
  }
  while($leastcount > 0) #더미 게시판 생성을 위한 while문
  {
    $leastcount--;
?>
<tr>
<td class="no">　</td>
<td class="id"></td>
<td class="name"></td>
<td class="phone"></td>
<td class="email"></td>
</tr>
<?php
  }
?>
<tr>
<td class="no"></td>
<td class="id">　　　　　　　　　　<<<　　　　 <a href="index.php?page=aboard&p=1&w=<?=$w?>">1</a><a href="index.php?page=aboard&p=2&w=<?=$w?>"> 2</a><a href="index.php?page=aboard&p=3&w=<?=$w?>"> 3</td>
<td class="name"　>>>></td>
<td class="phone"></td>
<td class="email"></td>
</tr>
