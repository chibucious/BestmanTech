<?php
	include_once 'dbcon.php';

	$name = htmlspecialchars(trim($_POST['name']));
	$email = htmlspecialchars(trim($_POST['email']));
	$subject = htmlspecialchars(trim($_POST['subject']));
	// $ref = htmlspecialchars($_POST['ref']);
	$message = htmlspecialchars(trim($_POST['message']));

	$response = array();


	class Register extends Connection{

		public function register_user($n, $e, $s, $m){
			
			// secure supplied data.
			$sn = $this->connect()->real_escape_string($n);
			$sml = $this->connect()->real_escape_string($e);
			$ssub = $this->connect()->real_escape_string($s);
			$sm = $this->connect()->real_escape_string($m);
			$date = date("Y-m-d");

			if($sn == "" || $sn == null){
				$response['error'] = true;
				$response['message'] = 'Enter your full name';
			}else if (!preg_match("/^[a-zA-Z-' ]*$/",$sn)) {
		     	$response['error'] = true;
			    $response['message'] = 'Only letters and white space is allowed in Full name';
		    }else if ($sml == "" || $sml == null){
				$response['error'] = true;
				$response['message'] = 'Enter your email';
			}else if(!filter_var($sml, FILTER_VALIDATE_EMAIL)){
				$response['error'] = true;
				$response['message'] = 'Invalid email format';
			}else if ($ssub == "" || $ssub == null){
				$response['error'] = true;
				$response['message'] = 'Enter your subject ';
			}else if ($sm == "" || $sm == null){
				$response['error'] = true;
				$response['message'] = 'Enter your message';
			}else{

				// check if the user is already register
				$check = "SELECT * FROM users WHERE email = '$sml' ";
				$query = $this->connect()->query($check);

				// check if the user is already register
				$check2 = "SELECT * FROM users WHERE name = '$sn' ";
				$query2 = $this->connect()->query($check2);

				$response = [];
				if($query->num_rows > 0){
					$response['error'] = true;
					$response['message'] = 'Account already exists with this email';
				}else if($query2->num_rows > 0){
					$response['error'] = true;
					$response['message'] = 'Account already exists with this name';
				}else{

					//options is an array with cost index index having a value of 4 (4 is the minimum value of cost)
	    //             $options = [
	    //               'cost' => 12
	    //             ];
					// $pwd = password_hash($sps, PASSWORD_BCRYPT, $options);


					
					// insert into the data into database table(user_register).
					$sql = "INSERT INTO users (name, email, subject, message, date) VALUES ('$sn','$sml','$ssub','$sm','$date')";
					$send = $this->connect()->query($sql);

					if($send){
						$response['error'] = false;
						$response['message'] = 'Account Registered successfully';


						// mail headers appear here.



						// send mail here;
						// if(mail($to, $subject, $message, $headers)){ 
						// 	$response['error'] = false; 
						
						// }else{
						// 	$response['error'] = true;
						// 	$response['message'] = 'C'
						
						// }



						
					}else{
						$response['error'] = true;
						$response['message'] = 'Could not complete request at the moment';

						
					}
						
					



				}
					


			}
			echo json_encode($response);
		}
	}

	$register = new Register;
	$register->register_user($name, $email, $subject, $message);
?>