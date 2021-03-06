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
    						(NOW(), '$ip', 'მახასიათებლები', '$agent');");
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>დაიცავით ბავშვები mSpy-ით - მახასიათებლები</title>
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
<body class="en features">
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
			<h1 class="page_title">მახასიათებლები</h1>
			<div class="tabs">
				<div class="wrap">
					<ul class="tabs__control js-tabs">
						<li class="tabs__control__item active"><a href="#phone"><i class="icon i-features-phone"></i>ტელეფონისთვის</a></li>
						<li class="tabs__control__item"><a href="#computer"><i class="icon i-features-desktop"></i> კომპიუტერისთვის</a></li>
					</ul>
				</div>
				
				<div class="tabs__item" id="phone">
					<div class="block blue">
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">იცოდე სად და ვისთან ერთად არიან შენი შვილები</h2>
								<div class="row-fluid">
									<div class="col one span6">
										<div class="tablecell">
											<div class="info">
												<div class="wrap_icon">
													<i class="icon i-features-location"></i>
												</div>
												<h3 class="title">GPS ლოკაციის ამომცნობი</h3>
												<p class="text">
													გადაამოწმე შვილების ადგილსამყოფელი, როცა მათთან ერთად არ ხარ. 
													შეამოწმე მათი ადგილმდებარეობა რეალურ დროში,
													მაშინაც კი როცა GPS
												</p>
											</div>
										</div>
									</div>
									<div class="col two span6">
										<div class="tablecell">
											<div class="image">
												<img src="images/pae_features_img_1.jpg">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block white">
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">დაათვალიერე და იყავი საქმის ყურში თუ ვისთნ აქვს კონტაქტი შენს შვილს</h2>
								<div class="row-fluid">
									<div class="col one span6">
										<div class="tablecell">
											<div class="image">
												<img src="images/pae_features_img_2.jpg">
											</div>
										</div>
									</div>
									<div class="col two span5 offset1">
										<div class="tablecell">
											<div class="info">
												<div class="wrap_icon">
													<i class="icon i-features-call"></i>
												</div>
												<h3 class="title">ზარების ისტორია</h3>
												<p class="text">გაუწიე ზედამხედველობა  შენი შვილის მობილურს. შეზღუდე უცნობი პირების შემომავალი ზარები.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block orange arow_bot arow_white">
						<i class="top_arow"></i>
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">გადაამოწმე შენი შვილის ყველა კორესპონდენცია სხვა პირებთან</h2>
								<div class="row-fluid">
									<div class="col one span6">
										<div class="tablecell">
											<div class="info">
												<h3 class="title">Instant Messages, SMS და E-mail</h3>
												<p class="text">
													წაიკითხე WhatsApp, iMessage, Facebook, Skype, Viber, LINE და instagram -ის 
													მეშვეობით შემოსული/გასული ყველა შეტყობინებები. შეამოწმე არასასურველი კომუნიკაციები ელ-ფოსტითაც და ტექსტური შეტყობინებებითაც.
												</p>
												<div class="wrap_icon">
													<i class="icon i-features-mesage"></i><i
														class="icon i-features-mail"></i><i
														class="icon i-features-social"></i><i
														class="icon i-features-line"></i><i
														class="icon i-features-instagram"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col two custom_1 span6">
										<div class="tablecell">
											<div class="image absolute">
												<img src="images/pae_features_img_3.png">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block white">
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">აკონტროლე ვებ ბრაუზერი</h2>
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="image absolute">
											<img src="images/pae_features_img_4.jpg">
										</div>
									</div>
								</div>
								<div class="col two custom_2">
									<div class="tablecell">
										<div class="info">
											<h3 class="title">ბრაუზერის ისტორია და ვებსაიტების დაბლოკვა</h3>
											<p class="text">ვებ-ბრაუზერის ისტორიის მონიტორინგით თქვენ - მშობლებს შეგიძლიათ აკონტროლოთ თუ რომელ საიტებს სტუმრობენ თქვენი შვილები და მათ შორის არასასურველი დაუბლოკოთ.</p>
											<div class="wrap_icon">
												<i class="icon i-features-browser"></i><i
													class="icon i-features-siteblok"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block blue arow_bot 3">
						<i class="top_arow"></i>
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">გაიგე ვინ არიან შენი შვილის მეგობრები და რით არიან დაკავებული თავისუფალ დროს</h2>
								<div class="col one">
									<div class="tablecell">
										<div class="info">
											<h3 class="title">წვდომა კონტაქტებზე და კალენდარზე</h3>
											<p class="text">
												იყავით მუდამ ინფორმირებული ვისთან და სად ატარებს 
												დროს თქვენი შვილი ტელეფონის კონტაქტებსა და კალენდარზე აღნიშნული ინფორმაციის მიხედვით.
											</p>
											<div class="wrap_icon">
												<i class="icon i-features-calendar"></i><i
													class="icon i-features-contact"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col two">
									<div class="tablecell">
										<div class="image">
											<img src="images/pae_features_img_5.jpg">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block white">
						<div class="wrap">
							<div class="feature_con custom_4">
								<h2 class="main_title">Scan Photos & Videos by:</h2>
								<div class="row-fluid">
									<div class="col one span7">
										<div class="tablecell">
											<div class="image">
												<img src="images/pae_features_img_6.jpg">
											</div>
										</div>
									</div>
									<div class="col two span5">
										<div class="tablecell">
											<div class="info">
												<h3 class="title">ნახე ფოტოები და ვიდეო ფაილები</h3>
												<p class="text">დარწმუნდი, რომ შენი შვილის ტელეფონიდან გაგზავნილი და მიღებული მულტიმედია ფაილები არ არის შენთვის მიუღებელი შინაარსის.</p>
												<div class="wrap_icon">
													<i class="icon i-features-media"></i><i
														class="icon i-features-video"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block orange">
						<div class="wrap">
							<div class="feature_con">
								<h2 class="main_title">აკონტროლე მობილურის აპლიკაციები და პროგრამები</h2>
								<div class="col one custom_3">
									<div class="tablecell">
										<div class="info">
											<h3 class="title">აპლიკაციების/ პროგრამების შეზღუდვა</h3>
											<p class="text">დაბლოკე არასათანადო შინაარსის აპლიკაციები და პროგრამები mSpy-ს მეშვეობით.</p>
											<div class="wrap_icon">
												<i class="icon i-features-app"></i><i
													class="icon i-features-appblok"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col two custom_3">
									<div class="tablecell">
										<div class="image absolute">
											<img src="images/pae_features_img_7.png">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block transparent">
						<div class="wrap">
							<div class="feature_con nowrap">
								<h2 class="main_title">დაიცავი ტელეფონი, რომელსაც აკონტროლებ</h2>
								<div class="row-fluid">
									<div class="span3">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-remote"></i>
											</div>
											<h3 class="title">მოწყობილობის დისტანციური გასუფთავება</h3>
											<p class="text">
												იყავი დარწმუნებული, რომ შენი შვილის ტელეფონში არსებული ინფორმაცია ყოველთვის დაცულია და მინიმუმამდე დაიყვანე 
												ტელეფონში არსებული მონაცემების გავრცელების რისკი. წაშალე ასეთი ინფორმაცია დისტანციურად.
											</p>
										</div>
									</div>
									<div class="span3">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-card"></i>
											</div>
											<h3 class="title">შეტყობინება SIM ბარათის შეცვლაზე</h3>
											<p class="text">იყავი ინფორმირებული, თუ შენი შვილი შეცვლის SIM ბარათს ტელეფონში, რომელსაც აკონტროლებთ. </p>
										</div>
									</div>
									<div class="span3">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-remotede"></i>
											</div>
											<h3 class="title">მოწყობილობის დისტანციური დაბლოკვა</h3>
											<p class="text">
												ბავშვები ხშირად კარგავენ თავიანთ მობილურ მოწყობილობებს. 
												დაეხმარე მათ დაიცვან თავიანთ პერსონალური მონაცემები მსგავსი შემთხვევების დროს. 
												დაბლოკე მონიტორინგის ქვეშ მყოფი ტელეფონი დისტანციურად.
											</p>
										</div>
									</div>
									<div class="span3">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-alert"></i>
											</div>
											<h3 class="title">შეტყობინება დეინსტალაციის შესახებ</h3>
											<p class="text">
												ეს ფუნქცია გაძლევთ საშუალებას მიიღოთ დეტალური ინფორმაცია თუ რატომ და რა ვითარებაში მოხდა თქვენს 
												მიერ კონტროლირებადი ტელეფონიდან აპლიკაციის mSpy-ის წაშლა ან ნაწილობრივ დაზიანება.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="tabs__item" id="computer">
					<div class="block blue">
						<div class="wrap">
							<div class="feature_con">
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-screenshots"></i>
											</div>
											<h3 class="title">სქრინშოტები</h3>
											<p class="text">
												mSpy ავტომატურად, სასურველი პერიოდულობით იღებს კომპიუტერის დესკტოპის სურათებს. 
												თქვენ ნებისმიერ დროს შეგიძლიათ შეამოწმოთ რას აკეთებს მომხმარებელი მონიტორინგის ქვეშ მყოფ კომპუტერზე.
											</p>
										</div>
									</div>
								</div>
								<div class="col two ">
									<div class="tablecell">
										<div class="image absolute">
											<img src="images/page-features/desktop-screenshots.png">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block white">
						<div class="wrap">
							<div class="feature_con">
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="image">
											<img src="images/page-features/desktop-keylogger.png">
										</div>
									</div>
								</div>
								<div class="col two custom_2">
									<div class="tablecell">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-keylogger"></i>
											</div>
											<h3 class="title">Keylogger</h3>
											<p class="text">
												mSpy იწერს მომხმარებლის მიერ კლავიატურაზე აკრეფილ ყველა სტრიქონს, 
												გაძლევთ სრულ წვდომას წვდომას ისეთ ტესქტურ ჩანაწერებთან, როგორიცაა გაგზავნილი წერილები და ა.შ. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block orange arow_bot arow_white">
						<i class="top_arow"></i>
						<div class="wrap">
							<div class="feature_con">
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-uactivity"></i>
											</div>
											<h3 class="title">მომხმარებლის აქტიურობა </h3>
											<p class="text">
												mSpy გაძლევთ საშუალებას გაიგოთ რამდენად აქტიურობდნენ კომპიუტერთან მყოფი თქვენი თანამშრომლები 
												სამსახურში ან თქვენი არასრულწლოვანი შვილები სახლში. როდის დაიწყეს და დაასრულეს სესია.  
											</p>
										</div>
									</div>
								</div>
								<div class="col two custom_2">
									<div class="tablecell">
										<div class="image">
											<img src="images/page-features/desktop-user-activity.png">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block white">
						<div class="wrap">
							<div class="feature_con">
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="image">
											<img src="images/page-features/desktop-app-use.png">
										</div>
									</div>
								</div>
								<div class="col two custom_2">
									<div class="tablecell">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-appuse"></i>
											</div>
											<h3 class="title">გამოყენებული პროგრამული აპლიკაციები</h3>
											<p class="text">mSpy-ს დახმარებით თქვენ შეძლებთ გაიგოთ, რა პროგრამებს რა ხანგრძლივობით იყენებს თქვენი შვილი ან თანამშრომელი.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block blue arow_bot arow_grey">
						<i class="top_arow"></i>
						<div class="wrap">
							<div class="feature_con">
								<div class="col one custom_2">
									<div class="tablecell">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-discreet"></i>
											</div>
											<h3 class="title">გონივრული რეჟიმი</h3>
											<p class="text">mSpy ფუნქციონირებს ფარულ, ფრთხილ რეჟიმში. რაც იმას ნიშნავს, რომ კონტროლის დროს მომხმარებელი ვერ ხვდება, რომ კომპიუტერი არის მონიტორინგის ქვეშ.</p>
										</div>
									</div>
								</div>
								<div class="col two">
									<div class="tablecell">
										<div class="image">
											<img src="images/page-features/desktop-discreet.png">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="block transparent">
						<div class="wrap">
							<div class="feature_con nowrap">
								<h2 class="main_title">აკონტროლე სასურველი მოწყობილობა დისტანციურად</h2>
								<div class="row-fluid">
									<div class="span4">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-remote"></i>
											</div>
											<h3 class="title">მოწყობილობის გასუფთავება დისტანციურად</h3>
											<p class="text">დარწმუნდი, რომ მონაცემები შენი შვლის ტელეფონში დაცულია ნებისმიერ დროს და მინიმუმადე დაიყვანე მათი მოპარვის შემთხვევები. წაშალე ტელეფონში არსებული ინფორმაცია დისტანციურად.</p>
										</div>
									</div>
									<div class="span4">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-card"></i>
											</div>
											<h3 class="title">შეტყობინება სიმ ბარათის შეცვლის შესახებ</h3>
											<p class="text">იყენებენ ისინი რამდენიმე სიმ-ბარათს? შენ ამას გაიგებ. ყოველთვის, როცა შენი თინეიჯერი შვილი შეცვლის სიმ-ბარათს, შენ მიიღებ შეტყობინებას.</p>
										</div>
									</div>
									<div class="span4">
										<div class="info">
											<div class="wrap_icon">
												<i class="icon i-features-remotede"></i>
											</div>
											<h3 class="title">მოწყობილობის დაბლოკვა დისტანციურად</h3>
											<p class="text">ბავშვებს ხშირად ერევათ ერთმანეთის მობილური ტელეფონები და, ხანდახან, კარგავენ კიდეც მათ. დაეხმარეთ მათ, დაიცვან თავიანთი პერსონალური მონაცემები. დაიცავით პაროლით შენი თინეიჯერი შვილის სმატფონი დისტანციურად.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
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
		
			src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/script.js"></script>


</body>
</html>