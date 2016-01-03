<?php
	require_once("dbconfig.php");

$no = $_GET['no']; //url뒤에 no숫자 를 붙혀주기 위한 변수
$query = 'SELECT * FROM khk where id ='.$no; // id에 있는 모든 쿼리를 조회해서 $no에 담기
$result = mysqli_query($dbc,$query) or die('오류');
$row = mysqli_fetch_assoc($result);

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../css/normalize.css">
		<link rel="stylesheet" href="../css/board.css">
	</head>
	<body>
		<article class="boardArticle">
			<h3>자유게시판 글쓰기</h3>
				<div id="boardView">
					<h3 id="boardTitle"><?php echo $row['khk_title']?></h3>
						<div id="boardInfo">
							<span id="boardID"><?= htmlspecialchars($row['khk_id']) ?></span>
							<span id="boardDate"><?php echo $row['khk_date']?></span>
						</div>
					<div id="boardContent" style="height:200px;"><?php echo $row['khk_article']?></div>
				</div>
				<div class="btnSet">
					<a href="./write.php?no=<?php echo $no?>">수정</a>
					<a href="./delete.php">삭제</a>
					<a href="./">목록</a>
				</div>
</article>
	</body>
</html>