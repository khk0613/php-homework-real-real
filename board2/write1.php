<?php
	require_once("dbconfig.php");
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
	</label></th>
							<td class="id"><input type="text" name="bId" id="bId"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bEmail">이메일</label></th>
							<td class="password"><input type="text" name="bEmail" id="bEmail"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"></textarea></td>
						</tr>
						<!-- <tr>
							<th scope="row"><label for="bContent">이미지</label></th>
							<td class="content"><input type="file" name="screenshot"></input></td>
						</tr> -->
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