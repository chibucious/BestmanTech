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
    $subject = $ssub;


    $message='<html><body>';
    $message .='
        <div marginheight="0" marginwidth="0" style="font-family:Verdana;background:#ebebeb;font-size:15px;font-weight:400">
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
              <tbody>
                <tr>
                  <td align="center" style="padding:20px 10px;background-color:#ebebeb" valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" class="m_7822296284594851533emailContainer" style="max-width:600px;width:100%">
                    <tbody>
                      <tr>
                        <td style="background:#fff">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <td style="padding:15px 10px;background:#f7f7f7">
                              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center"><h1><a style="text-decoration:none;">BestmanTech</a></h1></td>
                                  </tr>
                                </tbody>
                              </table>
                              </td>
                            </tr>
                            
                            <tr>
                              <td height="30">&nbsp;</td>
                            </tr>
                          
                            <tr>
                              <td style="padding:0 20px">
                              <p style="margin:0;font-size:1.5em">From: '.$sml.'</p>
                              <p style="margin:0;font-size:1.5em">Name: '.$sn.'</p>
                              <p style="margin:0;font-size:1.5em">'.$sm.'</p>
                              </td>
                            </tr>
                            
                            <tr>
                              <td style="padding:0 20px">
                              <h4 style="margin:0;font-size:1em">Click the link below to visit the site</h4>
                              </td>
                            </tr>
                            
                            <tr>
                              <td style="padding:0 20px">
                                <a href="https://bestmantech.herokuapp.com/index.php"> https://bestmantech.herokuapp.com/index.php </a>
                              </td>
                            </tr>
                            
                            <tr>
                              <td height="10">&nbsp;</td>
                            </tr>
                            
                            <tr>
                              <td style="padding:0 20px">
                              <div>
                              <p style="margin-top:0;line-height:1.4">Best Regards,</p>
            
                              <p style="margin-top:0;line-height:1.4"><br>
                              <b>BestmanTech</b></p>
                              </div>
                              </td>
                            </tr>
                            <tr>
                              <td height="15">&nbsp;</td>
                            </tr>
                            <tr style="background:#f7f7f7">
                              <td style="padding:20px 25px;text-align:center">
            
                              <p style="margin:0;font-size:0.7rem;line-height:1.4;color:#666"> <a href="https://bestmantech.herokuapp.com/index.php">BestmanTech</a>.</p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
    
    ';
    $message .='</html></body>';
    


    //Set your headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '.$sml . "\r\n";
    $headers .= 'Cc:contacts@bestmantech.com' . "\r\n";
    $headers .= 'To: '.$to."\r\n";
    
    mail($to,$subject,$message,$headers);
	$response['error'] = false;
	$response['message'] = 'Message Sent';

}


echo json_encode($response);

?>
