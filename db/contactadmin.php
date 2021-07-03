<?php
$sn = htmlspecialchars(trim($_POST['name']));
$sml = htmlspecialchars(trim($_POST['email']));
$ssub = htmlspecialchars(trim($_POST['subject']));
// $ref = htmlspecialchars($_POST['ref']);
$sm = htmlspecialchars(trim($_POST['message']));

$date = date("Y-m-d");


$response = array();


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

// 	$response['error'] = false;
// 	$response['message'] = 'Good';
	
   
	$to = "ezukachibueze@gmail.com";
             $subject = "New User";
             
             $message = "Hello Dear Admin A new user just signed up on the website";
             
             
             $header = "From:support@grandtrust.com \r\n";
             $header .= "Cc:grandtrusts@outlook.com \r\n";
             $header .= "MIME-Version: 1.0\r\n";
             $header .= "Content-type: text/html\r\n";
             
             $retval = mail ($to,$subject,$message,$header);
	
	
	$response['error'] = false;
	$response['message'] = 'Message Sent';

}


echo json_encode($response);

?>
