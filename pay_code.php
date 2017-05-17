<?php
session_start();
$image=imagecreatetruecolor(100,40);
$color[]=imagecolorallocate($image,254,44,44);//红色
$color[]=imagecolorallocate($image,8,8,8);//黑色
$color[]=imagecolorallocate($image,136,192,250);//浅蓝
$color[]=imagecolorallocate($image,111,246,136);//浅绿
$color[]=imagecolorallocate($image,248,178,11);//橘黄色
$bgcolor=imagecolorallocate($image,255,255,255);
imagefill($image, 0, 0, $bgcolor);



imagerectangle($image, 0, 0, 99, 39,$color[rand(0,4)]);//定义边框线

for($i=0;$i<200;$i++){
	$pointbg=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
	imagesetpixel($image,rand(0,100),rand(0,40),$pointbg);
}//在图片中插入200个杂点

for($j=0;$j<5;$j++){
	$linebg=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
	imageline($image,rand(0,100),rand(0,40),rand(0,100),rand(0,40),$linebg);
}//在图片中插入5条线
$capth_code="";
for($i=0;$i<4;$i++){
	$data="0123456789";
	$text=substr($data,rand(0,strlen($data)-1),1);
	$capth_code.=$text;
	imagettftext($image,30,rand(-20,20),5+(25*$i),30,$color[rand(0,4)],"minster2.ttf",$text);
}//加入4位数的验证码
$_SESSION['code']=$capth_code;

header("Content-type: image/PNG");

imagepng($image);
imagedestroy($image);

?>