<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>支付宝-home</title>
	<link rel="shortcut icon" href="images/link.ico">
	<link rel="stylesheet" type="text/css" href="css/home_page.css">
	<script src="js/jquery-3.1.1.min.js"></script>
</head>
<body onload="lun()">
	<div id="tankuang">
		<div class="kuang_top">
			欢迎来到支付宝！
			<div class="close"></div>
		</div>
		<div class="kuang_middle">
			<div class="middle_font1">
				<?php
					session_start();
					if($_SESSION['login']){
						echo '你好，  '.$_SESSION['username'];
					}else{
						header("location:login.html");
					}
				?>
			</div>
			<div class="middle_pic"></div>
			<div class="middle_font2">
				你登录的时间为：
				<?php
					date_default_timezone_set("Asia/Shanghai");
					echo date("Y-m-d H:i:s");
				?>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="top" id="#top">
			<div class="top_top">
				<div class="top_left">
				<a href="index.html">
					<img src="images/top-left.png">
				</a>
				</div>
				<div id="top_right">
					<div class="top_right">
						<?php
					session_start();
					if($_SESSION['login']){
						echo '你好，  '.$_SESSION['username'].' <a href="login.html">[退出]</a>  ';
					}else{
						header("location:login.html");
					}
				?>
					</div>
					<a href="#">
						<div class="top_right" style="width:100px"> 	| &nbsp&nbsp安全中心
						</div>
					</a>
					<a href="#">
						<div class="top_right" style="width:100px">		| &nbsp&nbsp会员保障
						</div>
					</a>
					<a href="#">
						<div class="top_right" id="top_list" style="width:100px">
							| &nbsp&nbsp客服服务
							<div id="list">
								<ul>
									<li>服务大厅</li>
									<li>自助服务</li>
									<li>提建议</li>
								</ul>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="top_bottom">
				<div class="bottom_middle">
					<div class="bm_div"><span>我的支付宝</span></div>
					<div class="bm_div">财富中心</div>
					<div class="bm_div">
						<div class="tx"></div>
					</div>
					<div class="bm_div">生活服务</div>
					<div class="bm_div">账户管理</div>
				</div>
			</div>
		</div>
		<div class="middle_lun">
			<div id="img_lun">
				<img src="images/lun1.jpg" id="img">
			</div>
		</div>
		<div id="circle">
			<ul>
				<li id="li1" class="on">-</li>
				<li id="li2">-</li>
				<li id="li3">-</li>
			</ul>
		</div>
		<div class="table1">
		<caption>转账收款</caption></br>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon1.png"></br>
							转账到银行卡</br>
							<span>到账快，跨行转账更优惠</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon2.png"></br>
							转账到支付宝</br>
							<span>即时到账</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon3.png"></br>
							AA收款</br>
							<span>向多人收款，简单快捷</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon4.png"></br>
							我要收款</br>
							<span>收回欠款，温馨提醒</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="img">
							<img src="images/icon5.png"></br>
							上银汇款</br>
							<span>随时随地，汇编全球</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon6.png"></br>
							亲密付</br>
							<span>我淘宝，他买单</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon7.png"></br>
							红包</br>
							<span>送红包，拉近你我距离</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon8.png"></br>
							手机支付宝付款</br>
							<span>深受手机用户喜爱</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="table1">
		<caption>生活便民</caption></br>
			<table cellspacing="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon9.png"></br>
							手机充值</br>
							<span>到账快，优惠力最高</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon10.png"></br>
							信用卡还款</br>
							<span>跨行还款免费，到账速度快</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon11.png"></br>
							有限电视缴费</br>
							<span>电视不能少，免费在家缴</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon12.png"></br>
							固话宽带</br>
							<span>无需排队，24小时服务，0手续费</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="img">
							<img src="images/icon13.png"></br>
							加油充值卡</br>
							<span>中石油加油卡在线充值轻松搞定加油卡</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon14.png"></br>
							医院挂号</br>
							<span>足不出户，轻松挂号！</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon15.png"></br>
							水电煤缴费</br>
							<span>无需排队，24小时服务，0手续费</span>
						</div>
					</td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="table2">
			<caption>公益教育</caption>
			<table cellspacing="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon16.png"></br>
							校园一卡通</br>
							<span>充值不用等，省时又省力</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon17.png"></br>
							教育缴费</br>
							<span>一站式查询及缴费平台</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon18.png"></br>
							爱心捐赠</br>
							<span>公开透明的网路捐赠平台</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon19.png"></br>
							助学贷款还款</br>
							<span>贷款查询，实时还款</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="table2" id="table2">
			<caption>旅行票务</caption>
			<table cellspacing="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon20.png"></br>
							买汽车票</br>
							<span>7-24小时购票，0手续费</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon21.png"></br>
							机票火车票</br>
							<span>海量折扣机票，出行好帮手</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon22.png"></br>
							订酒店</br>
							<span>海量折扣酒店，出行好帮手</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon23.png"></br>
							境外游</br>
							<span>海外旅行吃喝，购物有打折，交通，退</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="table2" id="table2">
			<caption>娱乐网购</caption>
			<table cellspacing="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon24.png"></br>
							买彩票</br>
							<span>7*24小时购彩，简单快捷</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon25.png"></br>
							游戏充值</br>
							<span>网游充值，迅速到账</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon26.png"></br>
							淘宝电影</br>
							<span>无需排队，在线购票</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon27.png"></br>
							淘宝网</br>
							<span>亲，要购物？来淘宝吧！</span>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="table1" id="table2">
		<caption>其他</caption></br>
			<table cellspacing="0">
				<tr>
					<td>
						<div class="img">
							<img src="images/icon28.png"></br>
							话费卡充值</br>
							<span>在线充值，轻松搞定</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon29.png"></br>
							淘宝贷款</br>
							<span>无需抵押，鼠标点点，钱即到手</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon30.png"></br>
							网商贷</br>
							<span>最高可贷100万，最快3分钟到账</span>
						</div>
					</td>
					<td>
						<div class="img">
							<img src="images/icon31.png"></br>
							网购还款</br>
							<span>先消费，后还款</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="img">
							<img src="images/icon32.png"></br>
							阿里贷款</br>
							<span>为阿里巴巴客户，提供融资服务</span>
						</div>
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
		</div>
		<div class="sign" id="sign"><</div>
		<div class="l_float" id="l_float">
			<div class="f_content">
				<div class="content">
					余额宝
					<div class="content_img">
						总资产：￥1214.55
					</div>
					<div class="content_img">
						<img src="images/money.png">
					</div>
				</div>
				<div class="content">
					蚂蚁花呗
					<div class="content_img">
						花呗余额：￥1214.55
					</div>
					<div class="content_img">
						<img src="images/icon55.png">
					</div>
				</div>
				<div class="content">
					账单查询
					<div class="content_img">
						失效账单 有效账单 
					</div>
					<div class="content_img">
						<img src="images/bill.png">
					</div>
				</div>
				<a href="#top">
					<div id="content4"></div>
				</a>
			</div>
		</div>
		<div class="foot">
			<div class="foot_font">
				诚征英才 | 联系我们 | International Business</br>
				支付宝版权所有 2004-2016 ICP证：沪B2-20150087
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(function(){
		$("#tankuang").slideToggle(1500);
		$(".close").click(function(){
			$("#tankuang").fadeOut(1500);
		});
		$("#top_list").mouseover(function(){
			$("#list").stop().slideDown();
		});
		$("#top_list").mouseout(function(){
			$("#list").stop().slideUp();
		});
		$("#sign").click(function(){
			$("#l_float").animate({
				width:"toggle"
			},500)
		});
		$(".content").hover(function(){
			$(this).stop().animate({width:"320px"},300)
		},function(){
			$(this).stop().animate({width:"80px"},300)
		});

	});
	function $i(id){
		return document.getElementById(id);
	}
	function huang(){
		if($i("l_float").style.display=="none"){
		$i("sign").innerHTML=">";
	}else{
		$i("sign").innerHTML="<";
	}
	}
	setInterval("huang()",1);
	var i=1;
	function lun(){
		$i("img").src="images/lun"+i+".jpg";
		switch (i){
			case 1:
				$i("li1").className="on";
				$i("li2").className="";
				$i("li3").className="";
			break;
			case 2:
				$i("li2").className="on";
				$i("li1").className="";
				$i("li3").className="";
			break;
			case 3:
				$i("li3").className="on";
				$i("li2").className="";
				$i("li1").className="";
		}
		i++;
		if(i>3){
			i=1;
		}
	}
	setInterval("lun()",2000);
</script>