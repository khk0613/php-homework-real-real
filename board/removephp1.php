<?php
	require_once("../dbconfig.php");

if (isset($_POST['submit'])) {
	foreach ($_POST['delete_ids'] as $id) {
		$query = "DELETE FROM board_free WHERE b_no = $id";
		$db->query($query) or die("error");// 찾아보기
	}
}

header('Location: ./index.php?admin=1'); //찾아보기
?>
