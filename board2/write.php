<?php
	require_once("dbconfig.php");
$no = $_GET['no']; //url뒤에 no숫자 를 붙혀주기 위한 변수

	if(isset($_GET['no'])){
		$no = $_GET['no'];
	}
	if(isset($no)){
		$query = 'SELECT * FROM khk where id ='.$no; // id에 있는 모든 쿼리를 조회해서 $no에 담기
		$result = mysqli_query($dbc,$query) or die ('죽었습니다.');
		$row = mysqli_fetch_assoc($result);
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
					if(isset($no)){
						echo '<input type="hidden" name="no" value="'.$no.'">';
					}

				?>
				<table id="boardWrite">
					<caption class="readHide">자유게시판 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="bId">아이디</label></th>
							<td class="id">
								<?php 
									if(isset($no)){
										echo $row['id'];
									} else{?>
										<input type="text" name="bId" id="bId">
									
								<?php } ?>


							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bEmail">이메일</label></th>
							<td class="password"><input type="text" name="bEmail" id="bEmail"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['khk_title'])? $row['khk_title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['b_content'])?$row['b_content']:null?></textarea></td>
						</tr>
						<!-- <tr>
							<th scope="row"><label for="bContent">이미지</label></th>
							<td class="content"><input type="file" name="screenshot"></input></td>
						</tr> -->
					</tbody>
				</table>
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">
						
						<?php echo isset($no)?'수정':'작성'?>
					</button>
					<a href="index.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>