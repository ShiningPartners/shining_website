<?php

ini_set('display_errors', 1);

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

// PHPMailer開始
// 請將這支程式連同上方三支程式放在同一個資料匣下才可以
include "PHPMailer-5.2.26/PHPMailerAutoload.php";

// 產生 Mailer 實體
$mail = new PHPMailer();

// 讓phpmailer 不要自動使用SSL連線(適用於PHP 5.6以上，非5.6可不用這段)
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ),
);

// 設定為 SMTP 方式寄信
$mail->IsSMTP();

// SMTP 伺服器的設定，以及驗證資訊
$mail->SMTPAuth = true;
$mail->Host = "mail.XXX.com"; //此處請填寫您的郵件伺服器位置,通常是mail.網址。如果您MX指到外地，那這邊填入www.XXX.com 即可
$mail->Port = 25; //主機的郵件伺服器port為 25

// 信件內容的編碼方式
$mail->CharSet = "utf-8";

// 信件處理的編碼方式
$mail->Encoding = "base64";

// SMTP 驗證的使用者資訊
$mail->Username = "admin@shining.com.tw"; // 此處為驗証電子郵件帳號,就是您在ServerZoo主機上新增的電子郵件帳號，＠後面請務必一定要打。
$mail->Password = "UdqutXvf2guTOJl29Z"; //此處為上方電子郵件帳號的密碼 (一定要正確不然會無法寄出)

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

// 信件內容設定
$mail->From = "admin@shining.com.tw"; //此處為寄出後收件者顯示寄件者的電子郵件 (請設成與上方驗証電子郵件一樣的位址)
$mail->FromName = "來自shining_form，寄件者:" . $contact_firstname . $contact_lastname; //此處為寄出後收件者顯示寄件者的名稱
$mail->Subject = "信件標題:" . $subject; //此處為寄出後收件者顯示寄件者的電子郵件標題
$mail->Body = $message;

$mail->IsHTML(true);

// 收件人
$mail->AddAddress("ahao19960512@gmail.com", "Shining聯絡表單系統通知信"); //此處為收件者的電子信箱及顯示名稱

// 顯示訊息
if (!$mail->Send()) {
    echo "Mail error: " . $mail->ErrorInfo;
} else {
    echo "Mail sent";
}

// header('Location: http://www.ahao850512.com/shining/contact%20page.php');
