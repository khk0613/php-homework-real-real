
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판수정 | KHK</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판</h3>
		<div id="boardList">
			<form action="index.php" method="post">
				<div class="btnSet">
					 <!-- <a href="./write.php" class="btnWrite btn">글쓰기</a> -->
					<input type="submit" name="submit" value="remove">
				</div>
				<table>
					<thead>
						<tr>
							<th scope="col" class="no">번호</th>
							<th scope="col" class="title">제목</th>
							<th scope="col" class="author">작성자</th>
							<th scope="col" class="date">작성일</th>
							<th scope="col" class="hit">조회</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
				<div class="btnSet">
					<a href="./write.php" class="btnWrite btn">글쓰기</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
