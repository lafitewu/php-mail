<?php
//定义一个maill发送函数

function sendMail($address,$title,$message){

//导入mail类文件
require("../PHPMailer/class.phpmailer.php");

//创建mail对象
$mail = new PHPMailer();

$mail->IsSMTP();//设置使用SMTP服务器发送

$mail->Host = "smtp.sina.com";  //设置163邮箱服务
$mail->SMTPAuth = true;     // 设置需要验证
$mail->Username = "dsz156@sina.com";  //设置发送人邮箱
$mail->Password = "950817dsz"; //设置发送密码

$mail->From = "dsz156@sina.com";
$mail->FromName = "admin";//发送者名称
$mail->AddAddress($address);//添加发送地址

//$mail->AddReplyTo("info@example.com", "Information");

//$mail->WordWrap = 50;// set word wrap to 50 characters

//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true); //指定HTML格式
$mail->CharSet="UTF-8";

$mail->Subject = $title;
$mail->Body    = $message;
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if($mail->Send()){
  return true;
}else{
	return false;
}
	}
//$b = sendMail($mail,"激活账号",$message);
//sendMail("15608422643@163.com","秘密","红包抢得怎么样了呀？这是用代码实现的哟，哈哈，");
?>