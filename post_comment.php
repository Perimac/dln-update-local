<?php 
	include 'runners/DB_Functions.php';
	$db = new DB_Functions();
	$response = array('error' => FALSE);

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['newsid'])){
		$name = strip_tags(htmlentities($_POST['name']));
		$email = strip_tags(htmlentities($_POST['email']));
		$comment = strip_tags(htmlentities($_POST['comment']));
		$newsId = strip_tags(htmlentities($_POST['newsid']));

		$result = $db->insetComment($name, $email, $comment, $newsId);
		if($result){
			$response['error'] = FALSE;
			$response['msg'] = 'success';
			$response['result'] = $result;
		}else{
			$response['error'] = TRUE;
			$response['msg'] = "Unnknown Error!";
	}
	}else{
		$response['error'] = TRUE;
		$response['msg'] = 'Enter required parameters!';
	}

	echo json_encode($response);
 ?>