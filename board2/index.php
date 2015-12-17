<?php
	require_once("dbconfig.php");
	$query = 'SELECT * FROM khk order by id desc';
	$result = mysqli_query($dbc,$query) or die("오류");
	$row = mysqli_fetch_assoc($result);

?>

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
							<!-- <th scope="col" class="hit">조회</th> -->
						</tr>
					</thead>
					<tbody>
						<?php
							while($row = mysqli_fetch_assoc($result))
								{
								$datetime = explode(' ', $row['khk_date']); // '2015-12-05 '공백'' 23:58:31' 공백을 기준으로 나눠서 datetime에 저장
																				//(2015-12-05)와 (23:58:31)로 나눠짐
								$date = $datetime[0]; // 0번째 2015-12-05 담기
								$time = $datetime[1]; // 1번째 23:50:31 담았음

								if($date == DATE('Y-m-d')){
									$row['khk_date'] = $date;
								// } else{
								// 	$row['khk_date'] = $time;
								 }

							?>
							<tr>
								<td><?php echo $row['id']?></td>
								<td><?php echo $row['khk_title']?></td>
								<td><?php echo $row['khk_id']?></td>
								<td><?php echo $row['khk_date']?></td>	
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
