<?php

include_once 'php/config.php';
include_once 'php/functions.php';

//setup some variables/arrays
$action = array();
$action['result'] = null;

$text = array();

//check if the email has been submitted
if(isset($_POST['email'])){

	//sanitize and catch sql injections
	$email = $conn->quote($_POST['email']);

	//quick/simple validation
	if(empty($email)){ $action['result'] = 'error'; array_push($text,'You forgot your email'); }
	
	if($action['result'] != 'error'){
	
		$email = md5($email);	
	
		//add to the database
		$add = mysql_query("INSERT INTO `email` VALUES(NULL,'$email',0)");
	
		if($add){
	
			//get the new user id
			$userid = mysql_insert_id();

			//create a random key
			$key = $email . date('mY');
			$key = md5($key);

			//add confirm row
			$confirm = mysql_query("INSERT INTO `confirm` VALUES(NULL,'$key','$email')");	
			
			if($confirm){
			
				//include the swift class
				include_once 'php/swift/lib/swift_required.php';
			
				//put info into an array to send to the function
				$info = array(
					'email' => $email,
					'key' => $key);
			
				//send the email
				if(send_email($info)){
						
					//email sent
					$action['result'] = 'success';
					array_push($text,'Thanks for signing up!');
			
				}else{
			
					$action['result'] = 'error';
					array_push($text,'Could not send confirmation email');
				
				}
			
			}else{
				
				$action['result'] = 'error';
				array_push($text,'Confirm row was not added to the database. Reason: ' . mysql_error());
				
			}
			
		}else{
		
			$action['result'] = 'error';
			array_push($text,'User could not be added to the database. Reason: ' . mysql_error());
		
		}
	
	}
	
	$action['text'] = $text;
	
}

?>