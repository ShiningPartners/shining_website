<?php

// ini_set('display_errors', 1);

// google驗證
require_once "recaptchalib.php";
// if submitted check response
// your secret key
$secret = "6LcHMmAUAAAAABRzKyeYwkpzBosVYFelivsx1FFl";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);
// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
  
$subject = $_POST['element_17'];
$requirements = $_POST['element_12'];
// $files                  = $_POST['element_20'];
$company_name = $_POST['element_2'];
$company_website = $_POST['element_13'];
$country = $_POST['element_18'];
$business_type = $_POST['element_11'];
$contact_firstname = $_POST['element_1_1'];
$contact_lastname = $_POST['element_1_2'];
$contact_mail = $_POST['element_3'];
$contact_tel = $_POST['element_4'];
$contact_fax = $_POST['element_14'];
$contact_address = $_POST['element_15'];

include "db.php";

$sql =
    " INSERT INTO shining_form " .
    " (creat_time, subject, requirements, company_name, company_website, country, business_type, contact_firstname, contact_lastname, mail, tel, fax, address ) " .
    " VALUES (NOW(), '$subject', '$requirements', '$company_name', '$company_website', '$country', '$business_type', '$contact_firstname', '$contact_lastname', '$contact_mail', '$contact_tel', '$contact_fax', '$contact_address' ) ";

$res = mysqli_query($link, $sql);



require_once('./PHPMailer-5.2.26/PHPMailerAutoload.php');    
	$mail= new PHPMailer();                         //建立新物件    
	#$mail->SMTPDebug = SMTP::DEBUG_SERVER;    
	#$mail->SMTPDebug = 3;    
	$mail->IsSMTP();                                //設定使用SMTP方式寄信    
	$mail->SMTPAuth = 'true';                         //設定SMTP需要驗證    
	#$mail->SMTPOptions = array(        
	#'ssl' => array(            
#'verify_peer' => false,            
#'verify_peer_name' => false,            
#'allow_self_signed' => true        
#		)    
#	);    

	$mail->SMTPSecure = 'true';                      // SMTP主機需要使用SSL連線    
	$mail->Host = 'localhost';                      //SMTP主機    
	$mail->Port = 25;                              //SMTP主機的埠號(Gmail為465)。    
	$mail->CharSet = 'utf-8';                       //郵件編碼    
	$mail->Username = 'sales_10@shining.com.tw';   //帳號    
	$mail->Password = 'rh6sNjcSmjva';                  //密碼    
	$mail->From = 'sales_10@shining.com.tw';       //寄件者信箱    
	$mail->FromName = "來自shining_form，寄件者:" . $contact_firstname . $contact_lastname;                       //寄件者姓名    
	$mail->Subject = "信件標題:" . $subject;;                         //郵件標題  
	
	
	
	
	$message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    // 信件標題
    $message .= "<tr style='background: #eee;'><td><strong>信件標題 </strong> </td><td> $subject </td></tr>";
    // 信件內容
    $message .= "<tr><td><strong>信件內容 </strong> </td><td> $requirements </td></tr>";
    // 公司名稱
    $message .= "<tr><td><strong>公司名稱 </strong> </td><td> $company_name </td></tr>";
    // 公司網站
    $message .= "<tr><td><strong>公司網站 </strong> </td><td> $company_website </td></tr>";
    // 國家
    $message .= "<tr><td><strong>國家 </strong> </td><td> $country </td></tr>";
    // 商業型態
    $message .= "<tr><td><strong>商業型態 </strong> </td><td> $business_type </td></tr>";
    // 聯絡人姓名
    $message .= "<tr><td><strong>聯絡人姓名 </strong> </td><td> $contact_firstname $contact_lastname </td></tr>";
    // 信箱
    $message .= "<tr><td><strong>信箱 </strong> </td><td> $contact_mail </td></tr>";
    // 電話
    $message .= "<tr><td><strong>電話 </strong> </td><td> $contact_tel </td></tr>";
    // 傳真
    $message .= "<tr><td><strong>傳真 </strong> </td><td> $contact_fax </td></tr>";
    // 地址
    $message .= "<tr><td><strong>地址 </strong> </td><td> $contact_address </td></tr>";
    
    $message .= "</table>";
    $message .= "</body></html>";
	$mail->Body = $message;                         //郵件內容    
	$mail->IsHTML(true);                            //郵件內容為html    
	$mail->AddAddress('marketing@60947.com');          //收件者郵件及名稱
	// $mail->AddCC('shining.image1978@gmail.com');   //副本收件者郵件及名稱
	// $mail->AddCC('ahao19960512@gmail.com');        //副本收件者郵件及名稱
	// $mail->AddCC('marketing@shining.com.tw');      //副本收件者郵件及名稱

    
   


// if(!$mail->Send())
// {
//    echo "Error sending: " . $mail->ErrorInfo;
// }
// else
// {
//    echo "E-mail sent";

// }

