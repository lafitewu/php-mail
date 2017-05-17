<?php
session_start();
require("config.php");

$username=$_POST['username'];
$password=md5(md5($_POST['password']));

$link=mysql_connect(host,name,pass) or die("数据库连接失败！");
mysql_select_db(database,$link);

$query=mysql_query("select * from users where username='{$username}'",$link);
if(isset($_REQUEST['code'])){
	session_start();
	if($row=mysql_fetch_assoc($query)){
		if($row['password']==$password){
			if(strtolower($_REQUEST['code'])!=$_SESSION['code']){	
				echo "<script>alert('验证码错误，请重新输入！')</script>";
				echo "<script>history.back()</script>";
			}else{
				$sql="select * from users where username='{$username}'";
				$result=mysql_query($sql,$link);
				$user=mysql_fetch_assoc($result);
				if($user){
					if($user['password']==$password){
						if($user['status']==1){
							echo "登录成功！！欢迎：".$username."<br/><br/>五秒后自动跳转到<a href='home_page.php'>支付宝主页</a>.....";
							echo '<meta http-equiv="refresh" content="5; url=home_page.php"/>';
							$_SESSION['login']=1;
							$_SESSION['username']=$username;
				}else{
					echo "账号未被激活！";
					echo "<a href='login.html'>重新登录</a>";
				}
					}else{
						echo "密码错误！";
					}
				}
				}
					}else{
						echo "<script>alert('密码错误！请重新输入！')</script>";
						echo "<script>history.back()</script>";
					}
				}else{
					echo "<script>alert('此用户名不存在！！')</script>";
					echo "<script>history.back()</script>";
				}
				}
?>