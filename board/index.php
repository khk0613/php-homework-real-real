<?php
	require_once("dbconfig.php");

	function my_row($row) {
		$datetime = explode(' ', $row['b_date']);
		$date = $datetime[0];
		$time = $datetime[1];
		if($date == Date('Y-m-d'))
			$row['b_date'] = $time;
		else
			$row['b_date'] = $date;
		return $row;
	}

	$is_admin = $_GET['admin'];

	$sql = 'select * from board_free order by b_no desc';
	$result = $db->query($sql);
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
		<h3>자유게시판1</h3>
		<div id="boardList">
			<form action="removephp1.php" method="post">
				<div class="btnSet">
					<!-- <a href="./write.php" class="btnWrite btn">글쓰기</a> -->
					<input type="submit" name="submit" value="remove">
				</div>
				<table>
					<caption class="readHide">자유게시판1</caption>
					<thead>
						<tr>
							<?php if ($is_admin): ?>
								<th scope="col" class="delete">체크박스</th>
							<?php endif; ?>
							<th scope="col" class="no">번호</th>
							<th scope="col" class="title">제목</th>
							<th scope="col" class="author">작성자</th>
							<th scope="col" class="date">작성일</th>
							<th scope="col" class="hit">조회</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = $result->fetch_assoc()) {
								$row = my_row($row);
						?>
							<tr>
								<?php if ($is_admin): ?>
									<td name="b_no" class="delete">
										<input type="checkbox" value="<?= $row['b_no'] ?>" name="delete_ids[]">
									</td>
								<?php endif; ?>
								<td class="no"><?php echo $row['b_no']?></td>
								<td class="title">
									<a href="./view.php?bno=<?php echo $row['b_no']?>"><?php echo $row['b_title']?></a>
								</td>
								<td class="author"><?php echo $row['b_id']?></td>
								<td class="date"><?php echo $row['b_date']?></td>
								<td class="hit"><?php echo $row['b_hit']?></td>
							</tr>
						<?php
							}
						?>
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
