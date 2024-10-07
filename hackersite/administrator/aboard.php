
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/board.css" />
    <article class="boardArticle">
    <h3>Board</h3>
			<div class="btnSet">

<table>
<tr>
<span style="float:left;">
<form name="input" action="/hackersite/?page=aboard" method="POST">

</form>
</span>

</tr>
</table>




			</div>
		<table>

			<thead>
				<tr>
					<th scope="col" class="no">NO</th>
					<th scope="col" class="id">ID</th>
					<th scope="col" class="name">NAME</th>
					<th scope="col" class="phone">PHONE</th>
					<th scope="col" class="email">EMAIL</th>
				</tr>
			</thead>
			<tbody>
        <?php require_once("administrator/alist.php"); #글 리스트 불러오는 소스코드 ?>
			</tbody>
		</table>
		</div>
	</article>
