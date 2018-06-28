<?php    
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
	$mail->Username = 'noctest@shining.com.tw';   //帳號    
	$mail->Password = '29513995@';                  //密碼    
	$mail->From = 'noctest@shining.com.tw';       //寄件者信箱    
	$mail->FromName = 'noctest@shining.com.tw';                       //寄件者姓名    
	$mail->Subject ='noctest mail';                         //郵件標題    
	$mail->Body = 'noctest mail';                                   //郵件內容    
	$mail->IsHTML(true);                            //郵件內容為html    
	$mail->AddAddress('ahao19960512@gmail.com');          //收件者郵件及名稱


if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;
}
else
{
   echo "E-mail sent";

}

