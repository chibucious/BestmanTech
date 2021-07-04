<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$name = htmlspecialchars(trim($_POST['name']));
$sd = htmlspecialchars(trim($_POST['department']));
$email = htmlspecialchars(trim($_POST['email']));
$sptype = htmlspecialchars(trim($_POST['projecttype']));
$sb = htmlspecialchars(trim($_POST['budget']));
$subject = "PROJECT REQUEST";
// $ref = htmlspecialchars($_POST['ref']);

if(htmlspecialchars(trim($_POST['message']))=="null" || htmlspecialchars(trim($_POST['message']))===null || htmlspecialchars(trim($_POST['message']))==""){
  $sm = "No Message From Sender";
}else{
  $sm = htmlspecialchars(trim($_POST['message']));
}

// $body = "Name: ".$name." \r\n Department: ".$sd."  \r\n Reply to: ".$email."  \r\n Project Type: ".$sptype."  \r\n Budget: #".$sb."  \r\n Text From User: ".$sm;
$body = "vr";


$date = date("Y-m-d");


$response = array();


if($name == "" || $name == null){
	$response['error'] = true;
	$response['message'] = 'Enter your full name';
}else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
 	$response['error'] = true;
    $response['message'] = 'Only letters and white space is allowed in Full name';
}else if ($email == "" || $email == null){
	$response['error'] = true;
	$response['message'] = 'Enter your email';
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$response['error'] = true;
	$response['message'] = 'Invalid email format';
}else if ($subject == "" || $subject == null){
	$response['error'] = true;
	$response['message'] = 'Enter your subject ';
}else{


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    // require '../vendor/autoload.php';

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    // $mail->Username = "bestmantechumuahia@gmail.com";
    // $mail->Password = 'bestman5423';
    $mail->Username = "ezukachibueze@gmail.com";
    $mail->Password = 'ezuka19972';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("ezukachibueze@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;

    if($mail->send()){
        // $status = "success";
        // $response = "Email is sent!";
        $response['error'] = false;
        $response['message'] = 'Request sent! Thanks for reaching us. We would get back to you via the email provided.';
    }else{
        // $status = "failed";
        // $response = "Something is wrong: <br>" . $mail->ErrorInfo;
        $response['error'] = true;
        $response['message'] = "Something is wrong: <br>" . $mail->ErrorInfo;

    }

    // exit(json_encode(array("status" => $status, "response" => $response)));

}


echo json_encode($response);

?>