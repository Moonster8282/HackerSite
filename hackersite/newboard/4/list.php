<?php
  require_once("core/dbconn.php");
  $w = $_POST['w'];
  $w = isset($w) ? $w : $_GET['w'];
  $p = $_GET['p'] ? $_GET['p'] : 1;
        $db = dbconnect();
  $query = "select * from board_free2 where b_title like '%{$w}%' order by b_no desc";
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
<td class="title"><a href="./?page=pass4&bno=<?php echo $row['b_no']?>&admin=no"><?php echo $row['b_title']?></td>
<td class="author"><?php echo $row['b_id']?></td>
<td class="date"><?php echo $row['b_date']?></td>
<td class="hit"><?php echo $row['b_hit']?></td>
</tr>
<?php
  }
  while($leastcount > 0) #더미 게시판 생성을 위한 while문
  {
    $leastcount--;
?>
<tr>
<td class="no">　</td>
<td class="title"></td>
<td class="author"></td>
<td class="date"></td>
<td class="hit"></td>
</tr>
<?php
  }
?>
<tr>
<td class="no"></td>
<td class="title">　　　　　　　　　　<<<　　　　 <a href="index.php?page=board4&p=1&w=<?=$w?>">1</a><a href="index.php?page=board4&p=2&w=<?=$w?>"> 2</a><a href="index.php?page=board4&p=3&w=<?=$w?>"> 3</td>
<td class="author"　>>>></td>
<td class="date"></td>
<td class="hit"></td>
</tr>
