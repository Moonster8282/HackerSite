<?php
$hit = $row['b_hit'] + 1;
$query2 = "update board_free2 set b_hit='{$hit}' where b_no ='{$bNo}'";
$result2 = mysqli_query($db, $query2);
?>
<link rel="stylesheet" href="css/normalize.css" />
<link rel="stylesheet" href="css/board.css" />
<article class="boardArticle">
<div id="boardView">
<h3 id="boardTitle"><?php echo $row['b_title'];?></h3>
<div id="boardInfo">
<span id="boardID">Writer: <?php echo $row['b_id'];?></span>
<span id="boardDate">Date: <?php echo $row['b_date'];?></span>
<span id="boardHit">Hits: <?php echo $hit;?></span>
</div>
<div id="boardContent"><?php echo $row['b_content'];?></div>
<div id="boardHit">SeKUre File: <a href="./newboard/4/sekuredown.php?bno=<?php echo $bNo?>"><?php echo $row['b_filename'];?></div>
<div id="boardHit">File: <a href="./newboard/4/down.php?path=<?php echo $path?>"><?php echo $row['b_filename'];?></div>
</div>
<div class="btnSet">
<a href="index.php?page=write&bno=<?php echo $bNo?>">Modify</a>
<a href="index.php?page=delete&bno=<?php echo $bNo?>">Delete</a>
<a href="index.php?page=board4">List</a>
</div>
</article>
