<?php
	require_once("dbconfig.php");

$no = $_GET['no'];
$query = 'SELECT * FROM khk where id ='.$no;
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
							<span id="boardID"><?php echo $row['khk_id']?></span>
							<span id="boardDate"><?php echo $row['khk_date']?></span>
						</div>
					<div id="boardContent"><?php echo $row['khk_article']?></div>
				</div>
</article>
	</body>
</html>