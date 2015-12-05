<?php
require_once("dbconfig.php");

$bID = $_POST['bID'];
$bPassword = $_POST['bPassword'];
$bTitle = $_POST['bTitle'];
$bContent = $_POST['bContent'];
$date = date('Y-m-d H:i:s');
$screenshot = $_FILES['screenshot']['name'];
define('SCREENSHOT_UPLOAD_PATH', 'images/');

	$sql = " INSERT INTO board_free (b_title, b_content, b_date, b_hit, b_id, b_password, screenshot)". 
			" VALUES('$bTitle', '$bContent', '$date' , 0, '$bID' , password( '$bPassword'), '$screenshot')";
	$db->query($sql) or die('error');
	$msg = "정상적으로 글이 등록되었습니다.";
	$bNo = $db->insert_id; //view 화면으로 이동하기 위함
	$replaceURL = './view.php?bno=' . $bNo;

	$result = $db -> query($sql);



?>
<script>
		alert("<?php echo $msg?>");
		location.href="http://localhost/php-homework-hk/board/index.php";
</script>
	
