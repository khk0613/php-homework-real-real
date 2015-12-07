<?php
	//header('Location:http://localhost/php-homework-hk/board2/index.php');
	require_once("dbconfig.php");

	//변수선언
	$bId = $_POST['bId'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];
	$bEmail = $_POST['bEmail'];
	$bDate = date('Y-m-d H:i:s');
	$home = "http://localhost/php-homework-hk/board2/index.php";


	$query = "INSERT INTO khk (khk_id, khk_title, khk_article, khk_email, khk_date)".
			"VALUES('$bId', '$bTitle', '$bContent', '$bEmail', '$bDate')";
		// query 문 작성
	$result = mysqli_query($dbc,$query)	or die ('쿼리오류');
		//mysqli_query 데이터 베이스에 쿼리문을 날리는 함수
	if($result){
		//쿼리가 잘 날라갔다면..
		$msg = "정상적으로 글이 등록되었습니다.";
		$bNo = $dbc->insert_id;
		//$replaceURL = 'view.php?bno='.$bNo;

	}
	else{
		$msg = "글을 등록하지 못했습니다.";
	
?>
	<script>
		alert("<?php echo $msg?>");
		history.back();
	</script>
<?php
	}

?>
<script>
		alert("<?php echo $msg?>");
		location.href=($home);
</script>
