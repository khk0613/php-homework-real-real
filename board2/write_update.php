<?php
	//header('Location:http://localhost/php-homework-hk/board2/index.php');
	require_once("dbconfig.php");



	//$_POST['no']가 있을때만 $no 선언
	// if(isset($_POST['no'])){
	// 	$no = $_POST['no'];
	// }
	//no가 없다면 변수선언

	// if(empty($no)){
	// 	$bID = $_POST['no'];

	// }


	//변수선언
	$bId = $_POST['bId'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];
	$bPassword = $_POST['bPassword'];
	$bEmail = $_POST['bEmail'];
	$home = "http://localhost/php-homework-hk/board2/index.php";
	$bDate = date('Y-m-d H:i:s');

	$query = "INSERT INTO khk (khk_id, khk_title, khk_article, khk_email, khk_date, khk_password)".
			"VALUES('$bId', '$bTitle', '$bContent', '$bEmail', '$bDate', SHA('$bPassword'))";
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
		location.href=("<?php echo $home?>");
</script>
