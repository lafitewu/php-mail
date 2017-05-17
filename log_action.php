<?php
require("config.php");
require("function.php");

$link=mysql_connect(host,name,pass) or die("数据库连接失败！");
mysql_select_db(database,$link);

switch ($_GET['a']){
	case "reg":
		$username=$_POST['username'];
		$password=md5(md5($_POST['password']));
		$email=$_POST['mail'];
		$info=md5(time()).time();
		$query=mysql_query("select * from users where username='{$username}'",$link);
	if($row=mysql_fetch_assoc($query)){
			echo "<script>alert('账号已存在，请更换！！')</script>";
			echo "<script>history.back()</script>";
		}else{
			$sql="insert into users values(null,'{$username}','{$password}','{$email}',0,'$info')";
				mysql_query($sql,$link);
				if(mysql_affected_rows($link)>0){

					$message="
						你好！{$username}
						<h2>欢迎注册本网站！</h2>
						账号激活请点击如下网址
						<a href='localhost/pay/log_action.php?a=doreg&mail={$email}&info={$info}'>localhost/pay/log_action.php?a=doreg&mail={$email}&info={$info}</a>";
				// $b = sendMail("$email","激活账号","点击激活注册<a href='localhost/pay/log_action.php?a=doreg&email={$email}&info={$info}'>localhost/pay/log_action.php?a=doreg&email={$email}&info={$info}</a>");
						$b = sendMail("$email","激活账号",$message);
						if($b){
							echo "注册成功！并已将激活地址发送至你的邮箱。三秒后自动跳转到登录页面....";
							echo '<meta http-equiv="refresh" content="3; url=login.html"/>';
						}else{
							echo "<script>alert('激活账号邮箱发送失败！请检查邮箱地址是否正确！')</script>";
							echo "<script>history.back()</script>";
						}
				}else{
					echo "注册失败！！ ";
				}
				}
				break;
	case "doreg"://执行账号激活
		$email=$_GET['mail'];
		$info=$_GET['info'];

		$sql="update users set status=1 where email='{$email}' and info='{$info}'";
		mysql_query($sql,$link);
		if(mysql_affected_rows($link)>0){
			echo "激活成功";
		}else{
			echo "激活失败";
		}
		break;
}
?>