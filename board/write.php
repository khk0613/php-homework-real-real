<?php
	require_once("../dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 | Kurien's Library</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글쓰기</h3>
		<div id="boardWrite">
			<form enctype="multipart/form-data" action="write_update.php" method="post">
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bID">아이디</label></th>
							<td class="id"><input type="text" name="bID" id="bID"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">비밀번호</label></th>
							<td class="password"><input type="text" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"></textarea></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">이미지</label></th>
							<td class="content"><input type="file" name="screenshot"></input></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">작성</button>
					<a href="index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>