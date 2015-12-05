<?php
	require_once('dbconfig.php');

	//변수선언
	$bId = $POST_['bId'];
	$bTitle = $POST_['bTitle'];
	$bContent = $POST_['bContent'];
	$bEmail = $POST_['bEmail'];
	$bDate = date('Y-m-d H:i:s');



	$query = "INSERT INTO khk (khk_id, khk_title, khk_article, khk_email, khk_date)".
			"VALUES('$bId', '$bTitle', '$bContent', '$bEmail', '$bDate')";

	$result = mysqli_query($dbc,$query)	or die ('쿼리오류');
	
	mysqli_close($dbc);	
?>