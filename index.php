<?php
    $operatorId    = $_REQUEST['opid'];
    
    $mspy          = 'http://mspy.go2cloud.org/SH2p7';
    $mspylink      = $mspy.'?source='.$operatorId;
    $msp_link1     = $_COOKIE['OPID'];
    
    if (!empty($operatorId)) {
        setcookie('OPID', $mspylink);
        $agent = $_REQUEST['opid'];
    }else {
        if (empty($msp_link1)) {
            $agent = '';
        }else {
            $agent = str_replace("http://mspy.go2cloud.org/SH2p7?source=","",$msp_link1);
        }
    }
    
    require_once 'get_ip.php';
    
    $ip=ip();
    
    mysql_connect('localhost','root','Gl-1114');
    mysql_selectdb('callapp_main');
    mysql_set_charset ( 'utf8');
     
    mysql_query("INSERT INTO `access_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'მთავარი', '$agent');");
    mysql_close();
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../mspy_demo_js/jquery-1.7.2.min.js"><\/script>')</script>
<script type="text/javascript" src="mspy_demo_js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="mspy_demo_js/fancyzoom.js"></script>

<script type="text/javascript" src="mspy_demo_js/popup_ios.js"></script>
 
<script type="text/javascript" src="mspy_demo_js/jquery-ui-1.8.7.custom.min.js"></script>
 
<script type="text/javascript" src="mspy_demo_js/flowplayer-3.2.4.min.js"></script>
 
<script type="text/javascript" src="mspy_demo_js/audio-player.js"></script>
 
<script type="text/javascript" src="mspy_demo_js/ui.selectmenu.js"></script>
<script type="text/javascript" src="mspy_demo_js/jquery-chrome.js"></script>
<script type="text/javascript" src="mspy_demo_js/bootstrap-tooltip_.js"></script>
 
<script type="text/javascript" src="mspy_demo_js/timepicker-slider.js"></script>
<script type="text/javascript" src="mspy_demo_js/lang.js"></script>
 
<script src="mspy_demo_js/jquery.mousewheel.js"></script>
 
<script src="mspy_demo_js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript">
var aJaxURL           = "mspy_demo/click.php";
$(document).on("click", "#HomeBtnBuynow", function () {
	param 			= new Object();
	param.as		= "jondo";
	$.ajax({
        url: aJaxURL,
        data: param,
        success: function(data) {
         
        }
    });
});
// $(document).ready(function(){
// 	$.getJSON("click.php");
// });
</script>

<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>დაიცავით ბავშვები mSpy-ით - მთავარი</title>
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta name="viewport" content="width=1000">
<meta name="skype_toolbar" content="skype_toolbar_parser_compatible" />
<link rel="apple-touch-icon" sizes="152x152"
	href="touch-icon-ipad-retina.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="shortcut icon" href="favicon.ico">
<!--[if IE]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<![endif]-->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"
	rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
		<link href="css/ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
</head>
<body class="en home">
	<header class="head">
		<div class="line">
			<div class="wrap">
				<div class="logo" onclick="document.location='./'">
					<i class="tail"></i>
				</div>
				<nav id="top_nav" class="top_nav">
					<a class="item" href="index.php">მთავარი</a> 
					<a class="item" href="features.php">მახასიათებლები</a> 
					<a class="item" href="compatibility.php">თავსებადობა</a>
					<a class="item" href="mspy_demo/user.view.dashboard.phone_id-1.php">Live Demo</a> 
					<a class="item" href="faq.php">FAQ</a> 
					<a class="item" href="about.php">კონტაქტი</a>
					
					<div id="login_form" class="login_form">
						<i class="arow"></i>
						<form method="post" onsubmit="return loginValidate(this)"
							action="https://cp.mspyonline.com/login.html">
							<p>
								<big>Log into your account</big>
							</p>
							<p>
								<input id="login-input" class="text-field" required type="email"
									placeholder="E-mail" name="aItem[email]">
							</p>
							<p>
								<input id="password-input" class="text-field" required
									type="password" placeholder="Password" name="aItem[password]">
							</p>
							<table width="100%" class="clear">
								<tr>
									<td class="mid" width="50%"><a
										href="https://cp.mspyonline.com/login.forgotpassword.html"
										target="blank">Forgot password?</a></td>
									<td class="mid align_right" width="50%">
										<button class="btn min">Login</button>
									</td>
								</tr>
							</table>
							<input type="hidden" value="" name="do[login]">
						</form>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<div class="main">
		<article class="content">
			<section class="home-head">
				<div class="nojail-toolbar">
					<a class="nojail-toolbar__c"> <img
						width="18" height="22" src="images/appleNojail-images.png"
						alt="Apple"> mSpy გადაწყვეტები: Now With No-Jailbreak Required!
					</a>
				</div>
				<div class="wrap">
					<div class="align_center">
						<h1 class="site_title">
							<i class="tape left"></i><i class="tape right"></i>ბავშვების უსაფრთხოება
						</h1>
						<h2 class="site_sub_title">იზრუნე შენი ბავშვების უსაფრთხოებაზე Mspy-ის დახმარებით</h2>
						<h2 class="site_thirdrate_title">კონტროლის სისტემა მშობლებისთვის, რომელსაც შეგიძლია ენდო</h2>
						<p class="text_buy">
							ტელეფონისთვის <strong>$29.99</strong> -დან
						</p>
						<p class="text_buy">
							კომპიუტერისთვის <strong>$19.99</strong> -დან
						</p>
						<a id="HomeBtnBuynow" class="btn arow" href="<?php if(empty($operatorId)){if (empty($msp_link1)){echo $mspy;}else{echo $msp_link1;}}else{echo $mspylink;}?>">შეიძინე ახლავე</a>
					</div>
				</div>
			</section>
			<div class="wrap">
				<div class="home-feature-b row-fluid">
					<div class="span6">
						<h2 class="page_title mt60">ტელეფონისთვის</h2>
						<div class="feature-block animate">
							<a class="item" href="features.php">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-location"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">გადაადგილებებზე თვალყურის დევნება GPS-ის მეშვეობით</h4>
													<p class="text1" style="margin: -5px 8px;">mSpy გაძლევთ საშუალებას აკონტროლოთ თქვე-ნი შვილების გადადგილება და, შესაბამისად, აღარ ინერვიულოთ მათ უსაფრთხოებაზე.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-browser"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">ბროუზერის ისტორია/ ვებ-გვერდების დაბლოკვა</h4>
													<p class="text1">
															დაიცავით თქვენი შვილები ინტერნეტიდან მომ-დინარე საფრთხეებისგან. 
															გაუწიეთ მონიტორინგი თუ სად და რომელ გვერდებზე შედიან, დაათვა-ლიერეთ ბროუზერის ისტორია, 
															შეამოწმედ საი-ტების შინაარსი და დაუბლოკეთ მათ შორის არა სასურველი.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-app"></i>
												</div>
												<div class="item-description">
												<h4 class="title1">Chat აპლიკაციები</h4>
													<p class="text1" style="margin: 0px 8px;">
													იყავი ინფორმირებული შენი შვილის ყოველდღი-ური ცხოვრების შესახებ მისი ჩათ აპლიკაციებში მიმოწერის მონიტორინგის გზით. 
													გადახედე მისი და მისი მეგობრების მიმოწერებს.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-mesage"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">ელ-ფოსტის მონიტორინგი</h4>
													<p class="text1" style="margin: 0px 8px;" >გაეცანით თქვენი შვილის ელ-ფოსტას და დარწ-მუნდით, რომ ადგილი არ აქვს რაიმე შემაშფოთე-ბელს და მიუღებელს.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-keyloger"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">Keylogger</h4>
													<p class="text1" style="margin: 36px 8px;">ნახეთ ყველა საკვანძო სიტყვა, რომელსაც თქვენი შვილი წერს ჩათში და საძიებო ველებში.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="span6">
						<h2 class="page_title mt60">კომპიუტერისთვის</h2>
						<div class="feature-block animate">
							<a class="item" href="features.php#desktop-tab">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-discreet"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">გონივრული და ფრთხილი მონიტორინგი</h4>
													<p class="text1" style="margin: -12px 8px;">
													პროგრამული უზრუნველყოფა mSpy ფუნქციონი-რებს ფარულად და უსაფრთხოდ, 
													დარღვევების და შეფერხებების გარეშე ანხორციელებს კომპიუტე-რის სრულ მონიტორინგს.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php#desktop-tab">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-screenshots"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">სქრინშოთები</h4>
													<p class="text1" style="margin: -5px 8px;">
													დარწმუნდი კომპიუტერის შესაბამის აქტივობებში სქინშოთების გადაღების გზით, 
													რომელსაც უზრუნ-ველყოფს mSpy-ის მონიტორინგის სისტემა თქვენთ-ვის სასურველი ინტერვალებით.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php#desktop-tab">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-keylogger"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">Keylogger</h4>
													<p class="text1" style="margin: -5px 8px;">
													შეამოწმე კომპიუტერში აკრეფილი მონაცემები, რათა გაიგოთ მეილების შინაარსი, 
													საძიებო სიტყ-ვები, მიმოწერის კონტენტი,  მომხმარებლის სახე-ლები და ა.შ.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php#desktop-tab">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-uactivity"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">მომხმარებლის აქტივობა</h4>
													<p class="text1" style="margin: 10px 8px;">ნახეთ რამდენი ხანი იყო კომპიუტერთან მჯდომი თქვენი კონტროლის ქვეშ მყოფი უზერი აქტიურ/პასიურ რეჯიმში.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a> <a class="item" href="features.php#desktop-tab">
								<div class="wrap_info">
									<div class="info">
										<div class="cover top">
											<div class="grey_block">
												<div class="item-icon">
													<i class="icon i-home-appuse"></i>
												</div>
												<div class="item-description">
													<h4 class="title1">აპლიკაციები/ გამოყენებული პროგრამები</h4>
													<p class="text1">აღმოაჩინეთ რა აპლიკაციები და პროგრამები აქვს დაყენებული კონტროლის ობიექტს და დაბლოკეთ მათ შორის არასასურველი.</p>
												</div>
											</div>
										</div>
										<div class="cover bot">
											<div class="grey_block_hover"></div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<i class="top_arow __home"></i>
				</div>
			</div>
			<div class="block orange overflow">
				<div class="overflow">
					<i class="kid_bg"></i>
					<h2 class="page_title">როგორ მუშაობს</h2>
					<div id="home_slider" class="home_slider">
						<ul class="slides">
							<li class="item">
								<div class="wrap table">
									<div class="col tablecell">
										<h3 class="title">1. ჩამოტვირთვა & ინსტალაცია</h3>
										<p class="text">აპლიკაცია mSpy -ის ჩამოტვირთვის შემდეგ იმ ტელეფონზე რომლის კონტროლიც გსურს, installation wizard will
											appear to guide you through the configuration process.</p>
									</div>
									<div class="col tablecell">
										<div class="arow_big_white"></div>
									</div>
									<div class="col tablecell align_right">
										<img src="img/how-it-works-1.png">
									</div>
								</div>
							</li>
							<li class="item">
								<div class="wrap table">
									<div class="col tablecell">
										<h3 class="title">2. კონფიგურაცია</h3>
										<p class="text">აქტივობების ჩამონათვალიდან აირჩიეთ სია იმ მოქმედებებისა, რომელიც უნდა აკონტროლოთ: სატელეფონო ზარები, ტექსტ მესიჯები, GPS ლო-კაცია და ა.შ. </p>
									</div>
									<div class="col tablecell">
										<div class="arow_big_white"></div>
									</div>
									<div class="col tablecell align_right">
										<img src="img/how-it-works-2.png">
									</div>
								</div>
							</li>
							<li class="item">
								<div class="wrap table">
									<div class="col tablecell">
										<h3 class="title">3. მონაცემების ონლაინ კონტროლი</h3>
										<p class="text">გაიარეთ ავტორიზაცია თქვენს პერსონალურ ონლაინ კონტროლ პანელის გვერდზე და მო-მენტალურად აკონტროლეთ აქტივობათა სია.</p>
									</div>
									<div class="col tablecell">
										<div class="arow_big_white"></div>
									</div>
									<div class="col tablecell align_right">
										<img src="img/how-it-works-3.png">
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<div class="clr"></div>
		<footer class="footer">
			<div class="wrap">
				<div class="row-fluid">
					<div class="span8">
						<div class="footer_info">
							<h4 class="title">პასუხისმგებლობის შეზღუდვა</h4>
							<p class="text js-ShowMore">
								პროგრამული უზრუნველყოფა გათვლილია მხოლოდ ლეგალურად მოხმარებისათვის. 
								სათვალთვალო პროგრამული უზრუნველყოფების ინსტალაცია მობილურებსა თუ სხვა მოწყობილებებზე, რომელთა მონიტორინგის უფლება არ გაქვთ, 
								არის ამერიკის შეერთებული შტატების ფედერალური ან/და სახელმწიფო კანონის და თქვენი ადგილობრივი კანონმდებლობის დარღვევა. როგორც წესი, 
								კანონი მოითხოვს, რომ წინასწარ გააფრთხილოთ იმ მოწყობილობების მომხმარებლები/ მფლობელები, რომლის მონიტორინგსაც აპირებთ. 
								ამ მოთხოვნის დარღვევამ შეიძლება გამოიწვის დამრღვევის ადმინისტრაციული და სისხლის სამართლით დასჯა. <u class="more"></u>სანამ გადმოწერდეთ, 
								დააინსტალირებთ და გამოიყენებთ ლიცენზირებულ პროგრამულ უზრუნველყოფას, თქვენ უნდა გაიაროთ იურიდიული კონსულტაციები  
								მისი გამოყენების ფორმებისა და მიზნების კანონიერებასთან დაკავშირებით. თქვენ იღებთ სრულ პასუხისმგებლობას -  დაადგინოთ, 
								გაქვთ თუ არა უფლება აკონტროლოთ მოწყობილობა, რომელზეც დაინსტალირებულია პროგრამული უზრუნველყოფა. 
								My Spy (mSpy) არ იღებს პასუხისმგებლობას, თუ მომხმარებელი მონიტორინგისთვის აირჩევს მოწყობილობას, 
								რომლის კონტროლის უფლებაც არ გააჩნია. ასევე, My Spy (mSpy)-ს არ შეუძლია  ლიცენზირებული პროგრამული უზრუნველყოფის გამოყენებასთან 
								დაკავშირებით გასწიოს იურიდიული კონსულტაციები. 
							</p>
						</div>
						
					</div>
					<div class="span4">
						<h4 class="title align_center">დაცული ონლაინ გადახდა</h4>
						<div class="payments">
							<i class="item vi"></i><i class="item mc"></i><i class="item ms"></i><i
								class="item ae"></i><i class="item pp"></i><i class="item bw"></i><i
								class="item di"></i><i class="item dd"></i>
						</div>
						<div class="social">
							<a class="item tw" title="Twitter"
								href="https://twitter.com/mspycom" target="_blank"
								rel="nofollow"></a> <a class="item gp" title="Google-plus"
								href="https://plus.google.com/u/0/117428278861929687790/posts"
								target="_blank" rel="nofollow"></a> <a class="item yt"
								title="YouTube" href="http://www.youtube.com/user/mspycom"
								target="_blank" rel="nofollow"></a> <a class="item vm"
								title="Vimeo" href="http://vimeo.com/mspy" target="_blank"
								rel="nofollow"></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay" id="overlay"></div>
		<script
			src="https://www.mspy.com/mspy.js?url=http%3A%2F%2Fwww.kidsecured.com%2F&shop=www.kidsecured.com&_ga=&c=&coupon="></script>
		<script
			src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/script.js"></script>
	</div>
</body>
</html>