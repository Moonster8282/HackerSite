
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/board.css" />
    <article class="boardArticle">
    <h3>Board</h3>
			<div class="btnSet">

<table>
<tr>
<span style="float:left;">
<form name="input" action="/hackersite/?page=board4" method="POST">
<input type="text" name="w" id="w" placeholder="제목 검색"/>
<input type="submit" value="검색" />
</form>
</span>
<span style="float:right;">
<button
type="button"
style="color: #ccc; background:gray; font-size:1em; border-radius:0.1em; padding:3px 10px;"
onclick="window.location.href='?page=write4'">Write
</button>
</span>
</tr>
</table>




			</div>
		<table>

			<thead>
				<tr>
					<th scope="col" class="no">No</th>
					<th scope="col" class="title">Title</th>
					<th scope="col" class="author">Author</th>
					<th scope="col" class="date">Date</th>
					<th scope="col" class="hit">Views</th>
				</tr>
			</thead>
			<tbody>
        <?php require_once("newboard/4/list.php"); #글 리스트 불러오는 소스코드 ?>
			</tbody>
		</table>
		</div>
	</article>
