$(function(){
		var s_left=$(window).scrollLeft();
		var s_top=$(window).scrollTop();
		var w_width=$(window).width();
		var w_height=$(window).height();
		var width1=$("#title1").width();
		var height1=$("#title1").height();
		var width=$("#btn").width();
		var height=$("#btn").height();
		var left1=s_left+(w_width-width1);
		var top1=s_top;
		var left;
		var top;
		var a=40;
		var b=100;
	function anniu(){
		left=(w_width-width-a);
		top=(w_height-height+b);
		$("#btn").css("left",left).css("top",top).fadeIn(2000);
	}
	anniu();
	$(window).bind("scroll",function(){
		var s_left=$(window).scrollLeft();
		var s_top=$(window).scrollTop()
		var w_width=$(window).width();
		var w_height=$(window).height();
		var width=$("#btn").width();
		var height=$("#btn").height();
		var width1=$("#title1").width();
		var height1=$("#title1").height();
		left=s_left+(w_width-width-a);
		top=s_top+(w_height-height+b);
		left1=s_left+(w_width-width1);
		top1=s_top;
		$("#btn").css("left",left).css("top",top).show(1000);
		$("#title1").css("left",left1).css("top",top1).show(1000);
	});

		$("#one").click(function(){
			$(this).css("background-color","gray");
			$("#two").css("background-color","white");
			$("#three").css("background-color","white");
			$("#four").css("background-color","white");
			$("#five").css("background-color","white");
			$("#six").css("background-color","white");
			$("#last").css("background-color","white");
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#two").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#three").css("background-color","white");
			$("#four").css("background-color","white");
			$("#five").css("background-color","white");
			$("#six").css("background-color","white");
			$("#last").css("background-color","white");
			$("#s_pelope").animate({
			left:'600px',
			top:'10px'
			},5000);
			$("#clouds1").animate({
				left:'400px',
				top:'130px'
			},10000);
			$("#s_font").show(5000);
			$("#title1").css("left",left1).css("top",top1).slideUp(1000);
		});
		$("#three").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#two").css("background-color","white");
			$("#four").css("background-color","white");
			$("#five").css("background-color","white");
			$("#six").css("background-color","white");
			$("#last").css("background-color","white");
			$("#third1").animate({
			top:'380px',
			left:'180px'
			},1000);
			$("#third2").animate({
				left:'0px',
				top:'0px'
			},1500);
			$("#t_third").fadeToggle(4000);
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#four").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#three").css("background-color","white");
			$("#two").css("background-color","white");
			$("#five").css("background-color","white");
			$("#six").css("background-color","white");
			$("#last").css("background-color","white");
			$("#f_font").show(3000);
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#five").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#three").css("background-color","white");
			$("#four").css("background-color","white");
			$("#two").css("background-color","white");
			$("#six").css("background-color","white");
			$("#last").css("background-color","white");
			$("#fif_font").show(5000);
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#six").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#three").css("background-color","white");
			$("#four").css("background-color","white");
			$("#five").css("background-color","white");
			$("#two").css("background-color","white");
			$("#last").css("background-color","white");
			$("#sis_font").slideToggle(2000);
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#last").click(function(){
			$(this).css("background-color","gray");
			$("#one").css("background-color","white");
			$("#three").css("background-color","white");
			$("#four").css("background-color","white");
			$("#five").css("background-color","white");
			$("#six").css("background-color","white");
			$("#two").css("background-color","white");
			$("#title1").css("left",left1).css("top",top1).slideToggle(1000);
		});
		$("#denglu").click(function(){
			$("#s_denglu").fadeIn(2000);
			$("#cover").fadeIn(2000);
		});
		$(".ewm_span").click(function(){
			$("#s_denglu").hide();
			$("#ewm_denglu").show(2000);
		});
		$(".ewm_span2").click(function(){
			$("#s_denglu").show(2000);
			$("#ewm_denglu").hide();
		});
		$("#close").click(function(){
			$("#s_denglu").slideUp(2000);
			$("#cover").slideUp(2000);
		});
		$("#close1").click(function(){
			$("#ewm_denglu").slideUp(2000);
			$("#cover").slideUp(2000);
		});
		// $("#code_click").click(function(){
		// 	$(this).src("../pay_code.php");
		// })
	});
	function $i(id){
		return document.getElementById(id);
	}
	function show(id){
		$i(id).style.display="block";
	}
	function hiden(id){
		$i(id).style.display="none";
	}
	// $i("list1").onmouseover=function(){
	// 	$i("list_show1").style.display="block";
	// }
	// $i("list").onmouseout=function(){
	// 	$i("list_show").style.display="none";
	// }
	// $i("list1").onmouseout=function(){
	// 	$i("list_show1").style.display="none";
	// }
	