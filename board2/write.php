<?php
	require_once("dbconfig.php");

	if(isset($_GET['no'])) {
		$modify = true;
		$no = mysqli_real_escape_string($dbc, $_GET['no']);
		$query = "SELECT * FROM khk WHERE id='$no'"; // id에 있는 모든 쿼리를 조회해서 $no에 담기
		$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
		$row = mysqli_fetch_assoc($result);
	} else {
		$modify = false;
		$row = array();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 | KHK</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판 글쓰기</h3>
		<div id="boardWrite">
			<form enctype="multipart/form-data" action="write_update.php" method="post">
				<?php
					if($modify) {
						echo '<input type="hidden" name="no" value="'.$no.'">';
					}

				?>
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bId">아이디</label></th>
							<td class="id">
								<?php if($modify): ?>
									<?= htmlspecialchars($row['khk_id']) ?>
								<?php else: ?>
									<input type="text" name="bId" id="bId">
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bEmail">이메일</label></th>
							<td class="email"><input type="text" name="bEmail" id="bEmail" value="<?= htmlspecialchars($row['khk_email']) ?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bPassword">패스워드</label></th>
							<td class="password"><input type="password" name="bPassword" id="bPassword"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?= htmlspecialchars($row['khk_title']) ?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?= $row['khk_article'] ?></textarea></td>
						</tr>
						<!-- <tr>
							<th scope="row"><label for="bContent">이미지</label></th>
							<td class="content"><input type="file" name="screenshot"></input></td>
						</tr> -->
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						<?php if ($modify): ?>
							수정
						<?php else: ?>
							작성
						<?php endif; ?>
					</button>
					<a href="index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>