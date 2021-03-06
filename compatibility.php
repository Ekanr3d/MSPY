
<?php

    require_once 'get_ip.php';
    $ip=ip();
    $agent = $_COOKIE['OPID'];
    $agent=str_replace("http://mspy.go2cloud.org/SH2p7?source=","",$agent);
    
    mysql_connect('localhost','root','Gl-1114');
    mysql_selectdb('callapp_main');
    mysql_set_charset ( 'utf8');
    
    mysql_query("INSERT INTO `access_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'თავსებადობა', '$agent');");
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>დაიცავით ბავშვები mSpy-ით - თავსებადობა</title>
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
<body class="en compatibility">
	<div class="main">
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
									<input id="login-input" class="text-field" required
										type="email" placeholder="E-mail" name="aItem[email]">
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
		<article class="content">
			<h1 class="page_title">თავსებადობა</h1>
			<div class="wrap">
				<div class="tabs">
					<ul class="tabs__control __com-b js-tabs">
						<li class="tabs__control__item active"><a
							href="#ios"><i
								class="icon i-compatibility-ios"></i> iOS</a></li>
						<li class="tabs__control__item"><a
							href="#android"><i
								class="icon i-compatibility-android"></i> ANDROID</a></li>
						<li class="tabs__control__item"><a
							href="#windows"><i
								class="icon i-compatibility-windows"></i> WINDOWS</a></li>
						<li class="tabs__control__item"><a
							href="#macos"><i
								class="icon i-compatibility-macos"></i> MAC OS</a></li>
					</ul>
					<div class="tabs__item" id="ios">
						<div class="row-fluid">
							<div class="span6">
								<h2>mSpy მოწყობილობებზე მოხსნილი შეზღუდვებით</h2>
								<ul>
									<li>თავსებადია IOS 6 &ndash; 8.3</li>
									<li>iPhone ან iPod დაკავშირებული უნდა იყოს ინტერნეტთან</li>
									<li>მოწყობილობას, რომლის მონიტორინგსაც აპირებთ, მოხსნილი უნდა ქონდეს შეზღუდვები</li>
									<li>mSpy-ს დასაყენებლად თქვენ გჭირდებათ ფიზიკური წვდომა მოწყობილობაზე</li>
								</ul>
								<h3>შესაძლებლობები :</h3>
								<ul>
									<li>განხორციელებული ზარების სია</li>
									<li>ელ-ფოსტა</li>
									<li>Geo-Fencing</li>
									<li>გადაადგილებებზე თვალყურის დევნება GPS-ს მეშვეობით</li>
									<li>SMS შეტყობინებები</li>
									<li>ბროუზერის ისტორია</li>
									<li>კალენდარში დაგეგმილი ღონისძიებები</li>
									<li>Chat აპლიკაციები: Snapchat, Skype, სოციალური ქსელები, Viber &amp WhatsApp</li>
									<li>ზარების და საიტების დაბლოკვა</li>
									<li>მოწყობილობის გასუფთავება</li>
									<li>&amp; ა.შ.</li>
								</ul>
							</div>
							<div class="span6">
								<h2>mSpy მოწყობილობებზე, რომლებსაც არ აქვს მოხსნილი შეზღუდვები</h2>
								<ul>
									<li>თავსებადია ყველა IOS ვერსიაზე</li>
									<li>მოწყობილობას უნდა შეეძლოს ინტერნეტთან დაკავშირება</li>
									<li>არ გჭირდება მოწყობილობასთან ფიზიკური წვდომა თუ უკვე გაქვს მისი iCloud-ის მონაცემები.</li>
									<li>მოწყობილობასთნ ფიზიკური წვდომა მაინც გახდება საჭირო, თუ iCloud ბექაპი აქტივირებული არაა.</li>
								</ul>
								<h3>შესაძლებლობები:</h3>
								<ul>
									<li>კონტაქტები</li>
									<li>განხორციელებული ზარების სია</li>
									<li>SMS შეტყობინებები</li>
									<li>ბროუზერის ისტორია</li>
									<li>კალენდარში დაგეგმილი ღონისძიებები</li>
									<li>შენიშვნები</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tabs__item" id="android">
						<h3 class="main_title">mSpy-ს მოთხოვნილებები Android სმარტფონებისათვის და ტაბლეტებისათვის</h3>
						<ul>
							<li>მოწყობილობაზე ინსტალირებული უნდა იყოს Android 4+</li>
							<li>სასურველი Android მოწყობილობა მიერთებული უნდა იყოს ინტერნეტთან</li>
							<li>mSpy-ს ინსტალაციისთვის დაგჭირდებათ მოწყობილობასთნ ფიზიკური წვდომა.</li>
							<li>ინტერნეტ-მესინჯერების მონიტორინგი შესაძლებელია მხოლოდ და-root-ულ Android-ებზე.</li>
						</ul>
						<h3 class="main_title">განსაზღვრეთ თქვენი Android ვერსია</h3>
						<ol>
							<li>შედით თქვენი ტელეფონის მენიუში. დააჭირეთ System Settings-ს.</li>
							<li>ჩადით მენიუს ბოლოში</li>
							<li>აირჩიე About phone</li>
							<li>თქვენი მოწყობილობის OS ვერსია ნაჩვენებია Android ვერსიის ქვემოთ</li>
						</ol>
					</div>
					<div class="tabs__item" id="windows">
						<p>ჩვენი კომპიუტერის მონიტორინგის პროგრამა თავსებადია შემდეგ ოპერაციულ სისტემებზე Windows XP, Windows 7, Windows 8, Windows 8.1, და Windows Vista.</p>
						<h3 class="main_title">განსაზღვრეთ თქვენი Windows ვერსია</h3>
						<ol>
							<li>შედით Start მენიუში</li>
							<li>ჩაწერეთ winver საძიებო ველში და დააჭირეთ Enter-ს.</li>
						</ol>
					</div>
					<div class="tabs__item" id="macos">
						<p>ჩვენი კომპიუტერის მონიტორინგის პროგრამა თავსებადია შემდეგ ოპერაციულ სისტემებზე Mac OS 10.7 Lion, Mac OS X 10.8 Mountain Lion, და OS X 10.10 Mavericks.</p>
						<h3 class="main_title">განსაზღვრეთ თქვენი Mac ვერსია</h3>
						<ol>
							<li>დააჭირეთ Apple მენიუს თქვენი ეკრანის ზედა კუთხეში</li>
							<li>აირჩიეთ About this Mac</li>
							<li>თქვენი OS X-ის ვერსია გამოჩნდება  OS X ასოების ქვემოთ</li>
						</ol>
					</div>
				</div>
			</div>
		</article>
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
			src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			window.jQuery
					|| document
							.write('<script src="js/jquery.min.js"><\/script>')
		</script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/script.js"></script>


</body>
</html>