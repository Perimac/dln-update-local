<?php 
	include 'runners/DB_Functions.php';
	$db = new DB_Functions();
	$response = array('error' => FALSE);

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['happilexId'])){
		$name = strip_tags(htmlentities($_POST['name']));
		$email = strip_tags(htmlentities($_POST['email']));
		$comment = strip_tags(htmlentities($_POST['comment']));
		$happilexId = strip_tags(htmlentities($_POST['happilexId']));

		$result = $db->insetHappilexComment($name, $email, $comment, $happilexId);
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