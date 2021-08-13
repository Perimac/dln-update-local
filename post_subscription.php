<?php 
	include 'runners/DB_Functions.php';
	$db = new DB_Functions();
	$response = array("error" => FALSE);


	if(isset($_POST['email'])){
		$email = strip_tags(htmlentities($_POST['email'], ENT_QUOTES));

		//Check if user already registered
		$check = $db->geGenRow("news_letter", "email", $email);
		if($check){
			$response["error"] = TRUE;
			$response["msg"] = "This email has already subscribed";
		}else{
			$addUser = $db->subScribeNewsLetter($email);
			if($addUser){
				$response["error"] = FALSE;
				$response["msg"] = "You have subscribed to DLN news letter successfully.";
			}else{
				$response["error"] = TRUE;
				$response["msg"] = "Unknown error occurred...";
			}
		}
		// $response["msg"] = $check;
	}else{
		$response["error"] = TRUE;
		$response["msg"] = "Enter required parameters!";
	}

echo json_encode($response);
 ?>