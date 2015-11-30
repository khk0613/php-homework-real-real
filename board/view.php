<?php
	require_once("../dbconfig.php");
	$bno = $_GET['bno']; // 화면으로 이동하기 위한 변수

	$sql = 'select b_title, b_content, b_date, b_hit, b_id, screenshot from board_free where b_no = ' . $bno;
	$result = $db->query($sql);
	$row = $result->fetch_assoc();
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
		<div id="boardView">
			<h3 id="boardTitle"><?php echo $row['b_title']?></h3>
			<div id="boardInfo">
				<span id="boardID">작성자1: <?php echo $row['b_id']?></span>
				<span id="boardDate">작성일1: <?php echo $row['b_date']?></span>
				<span id="boardHit">조회1: <?php echo $row['b_hit']?></span>
			</div>
			<div id="boardContent"><?php echo $row['b_content']?></div>
			<div id="boardContent1"> 
			<?php 
			if($row['screenshot']){
			?>
				<img src="images/<?= $row['screenshot']?>" alt="이미지"></div>
			<?php
			}
			?>
		</div>
		<a href="index.php">목록</a>
	</article>
</body>
</html>
