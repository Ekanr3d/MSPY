<?php

    require_once 'get_ip.php';
    $ip=ip();
    $agent = $_COOKIE['OPID'];
    $agent=str_replace("http://mspy.go2cloud.org/SH2rP?source=","",$agent);
    mysql_connect('212.72.155.176','root','Gl-1114');
    mysql_selectdb('mspy');
    mysql_set_charset ( 'utf8');
    
    mysql_query("INSERT INTO `access_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'FAQ', '$agent');");
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>დაიცავით ბავშვები mSpy-ით - FAQ</title>
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
<body class="en faq">
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
			<div class="wrap">
				<h1 class="page_title">ხშირად დასმული შეკითხვები</h1>
				<div class="tabs">
					<ul class="tabs__control js-tabs">
						<li class="tabs__control__item active"><a
							href="#phone"><i class="icon i-features-phone"></i>
								ტელეფონისთვის</a></li>
						<li class="tabs__control__item"><a href="#desktop"><i
								class="icon i-features-desktop"></i> კომპიუტერისთვის</a></li>
					</ul>
					<div class="tabs__item" id="phone">
						<section class="broken_block faq_list">
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რა არის mSpy?</h3>
								<div class="text">
									<p>mSpy არის  მონიტორინგის ნომერ პირველი პროგრამული უზრუნველყოფა  სმარტფონებისა და კომპიუტერებისთვის, 
										რომელიც ეხმარება მშობლებს დაიცვან შვილები, ხოლო მომუშავე პერსონალი იყოს უფრო პროდუქტიული. 
										ის ინახავს ინფორმაციას ტექსტურ მესიჯებზე, ზარებზე, GPS კოორდინატებზე და სხვა, 
										თქვენთვის საჭირო და პრიორიტეტულ ფუნქციებზე. 
										mSpy აგროვებს ინფორმაციას თქვენთვის სასურველი მოწყობილობიდან და აგზავნის მათ თქვენს კონტროლ პანელზე 
										(წვდომის საშუალებასაც მიიღებთ შეძენის შემდეგ), რომელზე წვდომაც შეგეძლებათ ნებისმიერი ბროუზერიდან. 
										mSpy სმარტფონებისთვის თავსებადია  Android 4 + ვერსიებისთვის, როგორც და-root-ული ისე დაუ-root-ავი 
										სისტემებისთვის და  iOS 6 – 8.3 ვერსიებითვის როგორც შეზღუდვა მოხსნილი (jailbroken), 
										ასევე შეზღუდვა მოუხსნელი (non-jailbroken) მოწყობილობებისთვის.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">როგორ მუშაობს mSpy?</h3>
								<div class="text">
									<p>mSpy აგროვებს ინფორმაციას იმ მოწყობილობიდან, 
										რომელზეც დაინსტალირებულია  და გადასცემს თქვენს კონტროლ პანელს, 
										რომლის ნახვაც შეგიძლიათ ნებისმიერი  ინტერნეტ ბრაუზერიდან. 
									</p>
									<p>
										იმისათვის, რომ დაწყოთ mSpy-ს გამოყენება, 
										პირველ რიგში უნდა შეამოწმოთ თავსებადობა იმ მოწყობილობისა, 
										რომელის მონიტორინგსაც აპირებთ. შემდეგ, აირჩიეთ სასურველი კონფიგურაცია და გაიარეთ შეძენის პროცედურა. 
										ამის შემდეგ ელ-ფოსტით მიიღებთ თქვენი პერსონალური კონტროლ პანელის შესასვლელ ლოგინს და პაროლს, 
										სადაც თქვენ, ასევე, ნახავთ ინსტალაციის ინსტრუქციას.  როგორც წესი, თქვენ დაგჭირდებათ მოწყობილობასთან ფიზიკური წვდომა, 
										პროგრამის გადმოსატვირთად ტელეფონის ბროუზერში ჩაწერთ ლინკს და მიჰყვებით ინსტალაციის ინსტრუქციას. 
										mSpy-ის  ინსტალაციით, თქვენ ადასტურებთ, რომ გაქვთ პროგრამული უზრუნველყოფის გამოყენების კანონიერი უფლება. 
										მაგალითად, თქვენ აინსტალირებთ მას თქვენს მობილურზე, თქვენი არასრულწლოვანი შვილის ტელეფონზე ან მოწყობილობაზე, 
										რომლის მფლობელისგან გაქვთ თანხმობა მონიტორინგის პროცესის შესახებ. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">მუშაობს mSpy მსოფლიოს ნებისმიერ წერტილში?</h3>
								<div class="text">
									<p>ჩვენი მონიტორინგის პროგრამა მუშაობს მიუხედავად იმისა თუ სად მდებარეობს საკონტროლებელი მოწყობილობა 
										და რომელი ფიჭური კავშირითაა უზრუნველყოფილი. ის თავსებადია ყველა სერვის პროვაიდერთან. 
										მაგრამ, ნებისმიერ შემთხვევაში, mSpy საჭიროებს ინტერნეტ კავშირს, 
										რათა ინფორმაცია სასურველი ტელეფონიდან მიაწოდოს თქვენს პერსონალურ ექაუნთს (კონტროლ პანელს, 
										რომელიც გააქტიურდება თქვენს მიერ სასურველი პაკეტის შეძენის შემდეგ), 
										ჩართული უნდა იყოს მობილური ინტერნეტი ან Wi-Fi კავშირი.  
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რომელ მოწყობილობებს აქვს mSpy - ს მხარდაჭერა?</h3>
								<div class="text">
									<p>
										mSpy თავსებადია სმარტფონებსა და ტაბლეტებზე, რომლებზეც აქვთ სისტემები:
									</p>
									<ul>
										<li>Android 4+</li>
										<li>iOS 6 – 8.3</li>
									</ul>
									<p>
										შეამოწმეთ <a href="compatibility.php">აქ</a>, თავსებადია თუ არა თქვენი მობილური .
									</p>
									<p>
										mSpy მუშაობს non-jailbroken (შეზუდვამოუხსნელ) iOS სისტემებზეც, 
										თუმცა მონიტორინგის ფუნქციები იქნება ლიმიტირებული. 
										(იმისათვის, რომ იხილოთ მონიტორინგის ფუნქციების ჩამონათვალი non-jailbroken (შეზუდვამოუხსნელ) 
										iOS სისტემებისთვის, დააკლიკეთ <a href="product-nojail.html">აქ</a>, ხოლო 
										mSpy პროგრამა აგრეთვე მუშაობს non-jailbrokeniOS მოწყობილობაზე, 
										თუმცა შეზღუდვები გექნებათ ზოგიერთ ფუნქციებზე. (ეს სია შეგიძლიათ ნახოთ mSpy Without Jailbreak, დააჭირეთ აქ). 
										თუ გსურთ ისიამოვნოთ სრული ფუნქციონალით, მაშინ თქვენ უნდა შეიძინოთ mSpy  jailbroken (შეზრუდვამოხსნილი) 
										iOS მოწყობილობებისთვის.
									
									</p>
									<p>
										შენიშვნა:  mSpy და mSpy Without Jailbreak 
										არის ერთი მონიტორინგული პროდუქტის ორი სხვადასხვა გადაწყვეტილება. 
										თქვენ თავისუფლად შეგიძლიათ გადაერთოდ ერთი პროდუქტიდან მეორეზე, 
										მაგრამ შენახული ინფორმაცია დაიკარგება.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">ჩანს თუ არა mSpy-ს პიქტოგრამა (icon) ტელეფონზე, რომელსაც ვუწევთ მონიტორინგს ?</h3>
								<div class="text">
									<p>
										ინსტალაციის შემდეგ mSpy აპლიკაცია დაიწყებს მუშაობას background რეჟიმში. 
										იკონი, რომელიც გამოჩნდება ინსტალაციის შემდეგ არ შეიცავს ფუნქციონირებისთვის საჭირო კონფიგურაციებს.  
										თქვენ შეგიძლიათ დატოვოთ ის მთავარ ეკრანზე ან არა.
									</p>
									<p>
										აინსტალირებთ რა mSpy-ს, თქვენ ადასტურებთ, 
										რომ გაქვთ პროგრამული უზრუნველყოფის გამოყენების კანონიერი უფლება. 
										მაგალითად, თქვენ აინსტალირებთ მას თქვენს მობილურზე, 
										თქვენი არასრულწლოვანი შვილის ტელეფონზე ან მოწყობილობაზე, 
										რომლის მფლობელისგან გაქვთ თანხმობა მონიტორინგის პროცესის შესახებ.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">კანონიერია თუ არა mSpy-ს გამოყენება? </h3>
								<div class="text">
									<p>
										mSpy აპლიკაცია შექმნილია იმისთის, 
										რომ დაეხმაროს მშობლებს ბავშვების უსაფრთხოებაზე ზრუნვაში, 
										ხოლო მომუშავე პერსონალი იყოს პროდუქტიული. 
										შესაბამისად, მისი გამოყენება სრულიად კანონიერია.
									</p>
									<p>
										გთხოვთ, დარწმუნდეთ, რომ თქვენს მიერ აპლიკაციის გამოყენების
										 მიზნობრიობა არ ეწინააღმდეგება კანონის მოთხოვნებს:
									</p>
									<ul>
										<li>
											თქვენ გსურთ გამოიყენოთ mSpy, როგორც გადაწყვეტილება მშობლების მხრიდან არასრულწლოვანი ბავშვების კონტროლისა. 
										</li>
										<li>
											თქვენ გსურთ გამოიყენოთ mSpy, როგორც გადაწყვეტილება, 
											რომლის მეშვეობითაც გსურთ მონიტორინგი გაუწიოთ კომპანიის საკუთრებაში არსებულ მოწყობილობებს, 
											რომლებთან მომუშავე თანამშრომლები, თავისმხრივ, ინფორმირებულნი არიან მათი მონიტორინგის შესახებ.
										</li>
										<li>
											თქვენ გსურთ, დააყენოთ mSpy თქვენს საკუთარ მოწყობილობაზე.
										</li>
									</ul>
									<p>თქვენი პასუხისმგებლობაა - გაარკვიოთ, გაქვთ თუ არა  კონკრეტული მოწყობილების მონიტორინგის უფლება.
										ასევე, თქვენი პასუხისმგებლობაა გაარკვიოთ, რა ტიპის გაფრთხილებები, 
										შეთანხმებები თუ რაიმე სხვა კოკნრეტული ქმედებებია საჭირო, 
										თანახმად თქვენი იურისდიქციისა, კონკრეტული ფაქტებისა თუ გარემოებების გათვალისწინებით, რომ გამოიყენოთ mSpy. 
										თუ გაქვთ კითხვები კანონიერია თუ არა mSpy-ს გამოყენება იმ ფორმით, რომლითაც თქვენ აპირებთ,  
										კონსულტაციისთვის, თქვენი არჩევანისამებრ, მიმართეთ ნებისმიერ კომპეტენტურ პირს, იურისტს.  
										mSpy-ის არ შეუძლია მოგცეთ იურიდიული რჩევები.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">შემიძლია mSpy დავაინსტალირო დისტანციურად?</h3>
								<div class="text">
									<p>
										<b>თუ მოწყობილობა არის iPhone ან iPad</b>
									</p>
									<p>
										mSpy შეიძლება დაინსტალირდეს დისტანციურად სასურველ მოწყობილობაზე iCloud მონაცემების გამოყენებით, 
										თუ აირჩევთ პაკეტს<a
											href="product-nojail.html">mSpy Without Jailbreak</a>, რომელსაც, თავის მხრივ, 
										აქვს შედარებით მცირე ფუნქციონალი. დარწმუნდით, რომ ბექაპირება ხდება რეგულარულად (ყოველ 24 სთ-ში). 
										თუმცა, მოწყობილობასთან ფიზიკური წვდომა შესაძლოა მაინც გახდეს საჭირო, 
										თუ მოწყობილობაზე iCloud ბექაპი არ არის აქტივირებული. 
									</p>
									<p>
										იმ შემთხვევაში, თუ iOS მოწყობილობას (ტელეფონი ან ტაბლეტი) მოხსნილი აქვს შეზღუდვები (jailbroken), 
										სრული ინსტალაციისთვის თქვენ დაგჭირდებათ მოწყობილობასთან ფიზიკური წვდომა 5-15 წუთით.  
										სრულად დაინსტალირების შემდეგ, mSpy დაიწყებს მონაცემების გაგზავნას თქვენს პერსონალურ Control Panel-ზე - თქვენს ექაუნთზე, 
										რომელიც გააქტიურდება ანგარიშსწორების შემდეგ.
									</p>
									<p>
										იმ შემთხვევაში თუ მოწყობილობას მოხსნილი არ აქვს შეზღუდვები (not jailbroken), 
										თქვენ დაგჭირდებათ შეზღუდვების მოხსნა (to jailbreak) mSpy-ს ინსტალაციის დაწყებამდე, 
										რაც წაგართმევთ რამდენიმე წუთს. 
									</p>
									<p>
										ჩვენი რეკომენდაციაა, დაამატოთ ჩვენი სპეციალური სერვისი mAssistance *-ი mSpy-ს შეძენის დროს.<sup>*</sup>
									</p>
									<p>
										<b>თუ მოწყობილობა მუშაობს Android OS-ზე</b>
									</p>
									<p>როდესაც mSpy-ს აინსტალირებთ Android OS სისტემაზე ბაზირებულ მოწყობილობებზე, მათთან ფიზიკური წვდომა აუცილებელია.</p>
									<p>
										ჩვენი რეკომენდაციაა, დაამატოთ ჩვენი სპეციალური სერვისი mAssistance *-ი mSpy-ს შეძენის დროს.<sup>*</sup>
									</p>
									<p>
										<small>
											<sup>*</sup>mAssistance-ის ფარგლებში, 
											ჩვენ დიდი სიამოვნებით მოვახდენთ საწყისს mSpy-ს ინსტალაციას თქვენთვის სასურველ მობილურ მოწყობილობაზე. 
											ასევე, დავაყენებთ Keylogger-ს, Location-ს, SMS apps-ს, გავააქტიურებთ USB-debugging-ს და სხვა. 
											აგრეთვე, შევასრულებთ მობილურებზე შეზღუდვების მოხსნის (Jailbreak/Rooting) სრულ პროცედურებს
										</small>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">როგორ დავაინსტალირო  mSpy?</h3>
								<div class="text">
									<p>
										<b>mSpy შეზრუდვების მოხსნის გარეშე (Without Jailbreak)</b>
									</p>
									<p>
										თუ თქვენი მიზნობრივი ტელეფონი არის iPhone-ი და არ გსურთ მისი შეზღუდვების მოხსნა (jailbreak), 
										მაშინ თქვენ შეგიძლიათ გამოიყენოთ mSpy შეზღუდვების მოხსნის გარეშე (mSpy Without Jailbreak), 
										რომელიც ინსტალაციისთვის მოითხოვს მომხმარებლის iCloud მონაცემებს. 
										თქვენ დაგჭირდებათ მხოლოდ შეხვიდეთ თქვენს Control Panel-ში და აირჩიოთ საჭირო ვარიანტი, 
										რომელიც მიგითითებთ ინსტალაციისთვის საჭირო რამოდენიმე მარტივ ქმედებაზე.  
										მოწყობილობაზე ჩართული უნდა იყოს iPhone-ის სარეზერვო კოპირების (back up) ფუნქცია. 
										გთხოვთ, გაითვალისწინოთ, რომ iPhone-ის სარეზერვო კოპირების (back up) iCloud-ზე ხდება მხოლოდ დღეში ერთხელ, 
										თუ შესრულებულია შემდეგი პირობები: - მოწყობილობა დაკავშირებულია WiFi-სთან, - მოწყობილობა ჩართულია (is plugged in), - 
										მოწყობილობა დაბლოკილია (is locked). 
									</p>
									<p>
										თუ სარეზერვო კოპირების (Backup) ფუნქცია არ არის ჩართული მოწყობილობაზე, გთხოვთ, 
										გააქტიუროთ ის მანუალურად Settings > iCloud > iCloud Backup > On. 
										შემდეგ გადადით Backup სექციაში და დააჭირეთ Back Up Now, 
										რათა mSpy-მ მოახდინოს მონაცემთა საწისი სინქრონიზაცია მიზნობრივი მოწყობილობიდან თქვენს Control Panel-ზე.
									</p>
									<p>
										<b>რეგულარული mSpy აპკლიაცია IOS-ისთვის</b>
									</p>
									<p>
										თუ გსურთ, დააინსტალიროთ mSpy აპლიკაცია რეგულარული გამოყენებისთვის და მიიღოთ 
										 ყველა შესაძლო ფუნქციების გამოყენების უფლება, 
										 თქვენ დაგჭირდებათ მიზნობრივ მოწყობილობაზე შეზრუდვების მოხსნა (jailbreak). 
										 უპირველეს ყოვლისა, თქვენ უნდა შეამოწმოთ, 
										 შეიძლება თუ არა თქვენს მოწყობილობას მოეხსნას შეზღუდვები, რადგან, შესაძლოა, 
										 iOS-ის ზოგიერთ ბოლო ვერსიებს  ჯერ კიდევ არ ეხსნებოდეს შეზღუდვები. შესამოწმებლად, 
										 თქვენ უნდა აიღოთ სასურველი მოწყობილობა და გახსნათ Settings > General > About > 
										 Version და შეამოწმოთ ყველა საჭირო ინსტრუქცია და შეზღუდვების მოხსნის უახლესი საშუალებები (jailbreaking tools) - ვერსიები - 
										 <a href="http://iclarified.com/jailbreak" target="_blank">აქ</a>.
										მას შემდეგ, რაც მოხსნით შეზღუდვებს, თქვენ  გაივლით ავტორიზაციას თქვენს  Control Panel-ზე, 
										აირჩევთ <q>iPhone</q>-ს და მარტივად გააგრძელებთ ინსტალაციას. მთლიანი პროცედურა, როგორც შეზღუდვების მოხსნის, 
										ასევე ინსტალაციის, მთლიანობაში წაგართმევთ 30 წუთმდე დროს.* 
										
									</p>
									<p>
										<b>mSpy OS  სისტემაზე ბაზირებული Android-ებისთვის</b>
									</p>
									<p>
										იმისათვის, რომ მოახდინოთ mSpy-ს ინსტალაცია Android მოწყობილობაზე, 
										დაგჭირდებათ მოწყობილობასთან ლეგალური ფიზიკური წვდომა. აირჩიე Android-ი შენს Control Panel-ში და მიჰყევი ინსტრუქციას. 
										გთხოვთ, გაითვალისწინოთ, რომ mSpy შეიძლება დაინსტალირდეს მოწყობილობაზე შეზღუდვების მოხსნის გარეშეც (without rooting), 
										მაგრამ თუ თქვენ გსურთ მონიტორინგი გაუწიოთ Whatsapp-ს, Viber-ს, Facebook-ს, Skype-ს, Line-ს, Snapchat-ს და Gmail-ს, 
										მაშინ თქვენს მიზნობრივ Android-ს უნდა მოეხსანას შეზღუდვები.<sup>*</sup>
									</p>
									<p>
										<sup>*</sup><small>
											თუ თქვენ წააწყდით სირთულეებს ინსტალაციის პროცესსში ან წარმოიქმნა პრობლერმები ფუნქციების კონფიგურაციისას, 
											ჩვენ სიამოვნებით შევასრულებთ mSpy-ს პირველად ინსტალაციას თქვენთვის სასურველ მოწყობილობაზე ჩვენი სპეციალური სერვისით mAssistance!
											 ჩვენ დავაყენებთ Keylogger-ს, Location-ს, disable SMS apps-ს, გავააქტიურებთ USB-debugging-ს და სხვა. აგრეთვე, 
											 შევასრულებთ მობილურებზე შეზღუდვების მოხსნის (Jailbreak/Rooting) სრულ პროცედურებს. ამ შემთხვევაშიც, 
											 თქვენ დაგჭირდებათ ფიზიკური წვდომა ინტერნეტში ჩართულ მოწყობილობასთნ.
										</small>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">შემიძლია წავშალო mSpy მონიტორინგის ქვეშ მყოფი მოწყობილობიდან?</h3>
								<div class="text">
									<p>
										mSpy მარტივად შეიძლება იყოს წაშლილი მონიტორინგის ქვეშ მყოფი მოწყობილობიდან პირდაპირ თქვენი Control Panel-დან. 
										თქვენ შეგიძლიათ ნახოთ დეტალური ინფორმაცია mSpy-ს წაშლის პროცესის შესახებ თქვენი ექაუნთის Help სექციაში.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">სად შემიძლია შევამოწმო მონიტორინგის ქვეშ მყოფი მოწყობილობიდან წამოსული მონაცემები?</h3>
								<div class="text">
									<p>
										მას შემდეგ, რაც mSpy დაყენებული იქნება გასაკონტროლირებელ მოწყობილობაზე და დაკავშირებული იქნება ჩვენს სერვერზე, 
										ინფორმაცია ავტომატურად გამოჩნდება თქვენს Control Panel-ზე, რომელშიც შეხვალთ ნებისმიერი ინტერნეტ ბრაუზერიდან. 
										შემოწმეთ, როგორ გამოიყურება კონტროლ პანელი <a class="js-viewDemo" href="faq.php#">View Demo</a>-ზე დაკლიკებით.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">გადახდის რა მეთოდებია შესაძლებელი mSpy-ს შესაძენად? </h3>
								<div class="text">
									<p>მოცემული მომენტისთვის ჩვენ ვიყენებთ ანგარიშსწორების შემდეგ სახეებს:</p>
									<ul>
										<li>Visa/MasterCard/Eurocar</li>
										<li>Bank/Wire transfer</li>
										<li>American Express</li>
										<li>﻿Diners Club</li>
										<li>JCB</li>
										<li>PayPal</li>
										<li>Fax</li>
										<li>Vendor to vendor</li>
										<li>Purchase order</li>
										<li>Check</li>
										<li>sofortbanking.com</li>
										<li>Carte Bleue</li>
										<li>支付宝 (Alipay)</li>
										<li>Giropay</li>
										<li>iDEAL</li>
										<li>WebMoney</li>
										<li>Cash at 7-Eleven/Family Dollar/ACE</li>
										<li>Boleto Bancario</li>
										<li>CashU</li>
										<li>Ukash</li>
										<li>Dankort</li>
										<li>Chinese Debit Card</li>
										<li>Qiwi Wallet</li>
										<li>eCheck/ACH</li>
									</ul>
									<p>
										გადახდის ვარიანტები არის შეიძლება შეიცვალოს თქვენი ამჟამინდელ საცხოვრებელი ქვეყანის მიხედვით. 
										აირჩიეთ, თქვენთვის სასურველი გადახდის მეთოდი მას შემდეგ, რაც აირჩევთ თქვენთვის სასურველ შეკვეთას.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რას ვნახავ ჩემს საბანკო ამონაწერში?</h3>
								<div class="text">
									<p>
										mSpy-ს შეძენა აისახება საბანკო ან საკრედიტო ბარათის ამონაწერში, 
										როგორც AVANGATE*mspy.software ან paypro-charge.com სახით, 
										შესაბამისად თქვენს მიერ არჩეული გადახდის მეთოდისა.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რა ხდება გადახდის შემდეგ?</h3>
								<div class="text">
									<p>
										მას შემდეგ, რაც გადახდა დადასტურდება (ამის შესახებ თქვენ მიიღებთ დამადასტურებელ მეილს ანგარიშისმსწორებელი კომპანიიდან) 
										შემდეგი ნაბიჯია, შეამოწმო შენი inbox, სადაც უნდა მიიღოთ mSpy-ს მისასალმებელი წერილი. 
										დარწმუნდით და შეამოწმეთ ორივე ფოლდერი inbox-იც და Spam-იც. 
										მისასალმებელი წერილი შეიცავს თქვენი პერსონალირი ვებ Control Panel-ის ლინკს და ავტორიზაციის დეტალებს. 
										მარტივად მიჰყევით ლინკს და გაიარეთ ავტორიზაცია თქვნ ექაუნთში (Control Panel-ში), 
										სადაც თქვენ იხილავთ ინსატალაციის გზამკვლევს თავისი ინსტრუქციებით.
									</p>
									<p>
										იხილეთ: <q><a href='faq.php#Q8 '>როგორ დავაინსტალირო  mSpy?</a></q>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">როგორ მივიღო თანხა უკან?</h3>
								<div class="text">
									<p>
										თქვენ შეიძლება გქონდეთ უფლება დაიბრუნოთ უკან მთლიანი თანხა შეძენის დღიდან 10 დღის განმავლობაში, 
										თუ უკანდაბრუნების მიზეზი არ ეწინააღმდეგება <a href="refund-policy.html">Refund Policy conditions</a>. 
										ამავე დროს ჩვენ სრულიად დარწმუნებულები ვართ, 
										რომ ჩვენ პროფესიონალ სამსახურს - Customer Support - შეუძლია დეგახმაროთ ნებისმიერ საკითხში, 
										რომელიც შეიძლება წარმოიშვას და უზრუნველყოს თქვენი მაქსიმალური კმაყოფილება. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რამდენად ხშირად ახდენს mSpy ინფორმაციის განახლებას?</h3>
								<div class="text">
									<p>
										თუ თქვენ იყენებთ mSpy Without Jailbreak-ს (შეზღუდვების მოხსნის გარეშე), მაშინ თქვენ იღებთ ინფორმაციას 24 საათში, 
										მას შემდეგ, რაც მოხდა ინფორმაციის ბოლო სარეზერვო კოპირება (back up). როგორც წესი, მას ამდენი დრო სჭირდება იმიტომ, 
										რომ ინფორმაციის სიდიდემ შეიძლება მიაღწიოს რამდენიმე გიგაბაიტს და მისი გადაცემა დამოკიდებულია WiFi კავშირის ხარისხზე. 
									</p>
									<p>
										თუ თქვენ გაქვთ mSpy შეზღუდვებ-მოხსნილ (jailbroken) iPhone-ზე ან Android-ზე, 
										მაშინ თქვენ ელოდებით განახლებულ ინფორმაციას იმ ინტერვალით, რა ინტერვალიც აირჩიეთ. 
										განახლების ინტერვალები დამოკიდებულია, რამდენად ხშირად არის mSpy დაკავშირებული ჩვენს სერვერებს და აგზავნის ინფორმაციას 
										თქვენს Control Panel-ზე. როდესაც თქვენს ექაუნთში მანუალურად უთითებთ  ინფორმაციის განახლების შუალედებს, 
										გთხოვთ გაითვალისწინოთ, რომ მოკლე განახლების ინტერევალებს (10 წუთზე ნაკლები) 
										შეუძლია მალე დასვას თქვენი მოწყობილობის ბატარეა. ასევე, გთხოვთ გაითვალისწინოთ, 
										რომ ზოგჯერ ინფორმაციის მთლიან განახლებას შეიძლება დასჭირდეს 24 საათამდე დრო, განსაკუთრებით მაშინ, 
										თუ ტელეფონი მუდმივად იყენებს 3G/4G კავშირებს, რომელიც ყოველთვის არ არის სტაბილური, 
										ხოლო ინფორმაციის სწრაფი გადაცემა დამოკიდებულია სიგნალის სიძლიერეზე.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რატომ ითხოვს მონიტორინგის ქვეშ მყოფი მოწყობილობა ინტერნეტ-კავშირს? </h3>
								<div class="text">
									<p>
										იმისათვის, რომ mSpy-მ გამოაგზავნოს ინფორმაცია თქვენს Control Panel-ში მონიტორინგის ქვეშ მყოფი მოწყობილობიდან  საჭიროა, 
										რომ ეს უკანასკნელი ჩართული იყოს ინტერნეტში. მას შეუძლია გამოიყენოს, როგორც Wi-Fi, ასევე 3G/4G ინტერნეტ კავშირები. 
										როგორც კი ინფორმაცია აიტვირთება ჩვენს სერვერზე, ის გამოჩნდება თქვენს ექაუნთში - Control Panel-ში. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">შემიძლია მონიტორინგი გავუწიო ორ ან მეტ მოწყობილობას?</h3>
								<div class="text">
									<p>
										იცოდეთ, რომ შეგიძლიათ თვალყური ადევნოთ იმდენ ტელეფონს, რამდენსაც მოისურვებთ. 
										როცა თქვენ ყიდულობთ ერთ გამოწერას, მაშინ თქვენ თვალყურს ადევნებთ ერთ ტელოფონს. 
										მაგრამ თვენ შეგიძლიათ ცვალოთ ეს ტელეფონი სხვა ტელეფონებით როცა და რამდენჯერაც მოგესურვებათ შეძენილი 
										პაკეტის პერიოდის განმავლობაში სრულიად უფასოდ. თუ გსურთ მონიტორინგი გაუწიოთ 2 ტელეფონს ერთდროულად, 
										მაშინ უნდა შეიძინოთ 2 პაკეტი. 
									</p>
									<p>
										თუ გსურთ, რომ მონიტორინგი გაუწიოთ ერთდროულად რამდენიმე მოწყობილობას, მაშინ ჩვენი  - Family Kit 
										არის საუკეთესო შეთვაზება თქვენთვის. მიიღეთ 5 mSpy ლიცენზია და დაზოგე 20%. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">ჩემი მიზნობრივი მოწყობილობა არის iPhone-ი. ნამდვილად საჭიროა მოვუხსნა შეზღუდვები (jailbreak), იმისთვის რომ დავაინსტალირო mSpy?</h3>
								<div class="text">
									<p>
										მოცემულ მომენტში, mSpy გთავაზობთ მონიტორინგის პროგრამულ უზრუნველყოფას როგორც შეზრუდვა-მოხსნილი 
										(jailbroken), ისე შეზღუდვა-მოუხსნელი (non-jailbroken) მოწყობილობებისათვის. 
										თუ თქვენ არ გსურთ მოხსნათ შეზღუდვები (jailbreak) თქვენს მოწყობილობას, 
										მაშინ თქვენ შეგიძლიათ შეიძინოთ mSpy Without Jailbreak (შეზღუდვების მოხსნის გარეშე). 
										შენიშვნა: mSpy <a href="product-nojail.html">Without Jailbreak</a> (შეზღუდვების მოხსნის გარეშე) 
										გააჩნია მხოლოდ შემდეგი 
										ფუნქციები:
									</p>
									<ul>
										<li>კონტაქტები</li>
										<li>ზარების ჟურნალი</li>
										<li>ტექსტური შეტყობინებები</li>
										<li>ბროუზერის ისტორია</li>
										<li>მოვლენები</li>
										<li>შენიშვნები</li>
									</ul>
									<p>იმისთვის, რომ მიიღოთ mSpy-ს ფუნქციონალის სრული სპექტრი, iOS მოწყობილობა უნდა იყოს მოხსნილი შეზღუდვებით (jailbroken).</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">შეზღუდვების მოხსნა (jailbreak) მოქმედებს გარანტიაზე? შემიძლია გავაუქმო შეზღუდვების მოხსნა (unjailbreak) მიზნობრივ iDevice-ზე გარანტიის აღდგენის მიზნით?</h3>
								<div class="text">
									<p>
										მართალია, შეზღუდვების მოხსნის (Jailbreak)  პროცედურა ახდენს გარანტიის ანულირებას, მაგრამ ის სრულიად აღდგენადია. 
										თუ თქვენ მოახდენთ iOS-ის უახლესი ვერსიის Update-ს ან დაუბრუნებთ ტელეფონს ქარხნულ კონფიგურაციას, 
										თქვენი ტელეფონი იქნება კვლავ გარანტიის ქვეშ.  
									</p>
									<p>
										იმისათვის, რომ მიზნობრივ მოწყობილობაზე შეინარჩუნოთ mSpy-ის სრული ოპერაციული ფუნქციონირება, რეკომენდაციას გიწევთ, 
										არ მოახდინოთ iOS ვერსიების აპდეითი, რადგან მან შეიძება ზეგავლენა მოახდინოს შეზღუდვების მოხსნასა და mSpy-ს ინსტალაციაზე.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რა ხდება შეზღუდვების მოხსნის (Jailbreak) პროცედურის შემდეგ?</h3>
								<div class="text">
									<p>
										შეზღუდვების მოხსნის (Jailbreak) პროცედურის შემდეგ, მოწყობილობა აგრძელებს მუშაობ ზუსტად იგივე რეჟიმში, 
										მხოლოდ მომხმარებელს უკვე აქვს შესაძლებლობა გადმოიწეროს მედია და პროგრამული ფაილები  
										iTune-დან და რეგულარულად გამოიყენოს iCloud-ი. როდესაც შეზღუდვები უკვე მოხსნილია, 
										Cydia-ს აიკონი გამოჩნდება მიზნობრივი მოწყობილობის მენიუში. მეტი ინფორმაციისთვის, 
										თუ როგორ წავშალოთ Cydia-ს აიკონი, ნახეთ შესაბამისი არტიკლი თქვენი ექაუნთის Help სექციაში. 
										შეზღუდვების მოხსნის პროცედურა არ ახდენს გავლენას მოწყობილობის 
										ფუნქციონირებაზე და ბევრ შემთხვევაში ის ახანგრძლივებს მოწყობილობის ელემენტის მოქმედების დროს.  
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რა არის და-root-ვა? აუცილებელია დავ-root-ო Android მოწყობილობა იმისთვის, რომ დავაინსტალირო mSpy? Android-ის და-root-ვა მოქმედებს გარანტიაზე?</h3>
								<div class="text">
									<p>
										და-Root-ვა არის პროცესი, რომელიც აძლევს Android-ის ოპერაციულ სისტემაზე მომუშავე სმარტფონების 
										და ტაბლეტების მომხმარებელს პრივილეგირებული კონტროლის საშუალებას. 
										მართალია, შეზღუდვების მოხსნის (Rooting)  პროცედურა ახდენს მოწყობილობის გარანტიის ანულირებას, 
										მაგრამ ის სრულიად აღდგენადია. და-Root-ვა აუცილებელი, მხოლოდ მაშინ თუ გსურთ მონიტორინგი გაუწიოთ არა-default აპლიკაციებს, 
										ისეთებს, როგორიცაა WhatsApp, Facebook, Viber, Skype, და Gmail (ხელმისაწვდომი მხოლოდ პრემიუმ პაკეტის შეძენისას). 

									</p>
									<p>
										თუ თქვენ წააწყდით სირთულეებს ინსტალაციის პროცესსში ან წარმოიქმნა პრობლერმები ფუნქციების კონფიგურაციისას, 
										ჩვენ სიამოვნებით შევასრულებთ mSpy-ს პირველად ინსტალაციას თქვენთვის სასურველ მოწყობილობაზე ჩვენი 
										სპეციალური სერვისით mAssistance! ჩვენ დავაყენებთ Keylogger-ს, Location-ს, disable SMS apps-ს, 
										გავააქტიურებთ USB-debugging-ს და სხვა. აგრეთვე, შევასრულებთ მობილურებზე შეზღუდვების მოხსნის (Rooting) 
										სრულ პროცედურებს. ამ შემთხვევაშიც, თქვენ დაგჭირდებათ ფიზიკური წვდომა ინტერნეტში ჩართულ მოწყობილობასთნ.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">როგორ შემიძლია აღმოვაჩინო მონიტორინგის პროგრამული უზრუნველყოფა ჩემს სმარტფონში ან ტაბლეტში? </h3>
								<div class="text">
									<p>
										გთხოვთ, გახსოვდეთ ის, რომ mSpy არის სრულიად კანონიერი პროგრამული
										 უზრუნველყოფა და ყველა ჩვენი კლიენტი ვალდებულია დაიცვას კანონი mSpy-ს გამოყენების პერიოდში. ეს ნიშნვას, 
										 რომ თქვენთვის ნებადართულია დააინსტალირო mSpy საკუთარ მოწყობილობაზე, 
										 თქვენი არასრულწლოვანი შვილების მოწყობილობებზე ან მოწყობილობაზე, 
										 რომლის მფლობელი თანახმაა მასზე მონიტორინგის. თუ თქვენ შეამჩნევთ mSpy-ს გამოყენების ნებისმიერ უკანონო შემთხვევას, 
										 გთხოვთ, შეგვატყობინოთ დაუყოვნებლივ. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">შეგიძლიათ დამეხმაროთ ვიპოვო ტელეფონი მისი ნომრის მიხედვით? შესაძლებელია ვიპოვო დაკარგული მოწყობილობა?</h3>
								<div class="text">
									<p>
										გთხოვთ გახსოვდეთ, რომ mSpy იწყებს ინფორმაციის შეგროვებას/ მონიტორინგს მხოლოდ მას შემდეგ, 
										რაც ის დაინსტალირდება მოწყობილობაზე. ჩვენ არ ვაწარმოებთ მონიტორინგს ტელეფონით ან  IMEI კოდით. 
										ამისთვის, პირველ რიგში, თქვენ გჭირდებათ წვდომა მოწყობილობასთნ და  აპლიკაციის ინსტალირება მასზე. 
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">რა ვქნა, თუ დამჭირდება ტექნიკური მხარდაჭერა?</h3>
								<div class="text">
									<p>ჩვენ გთავაზობთ ტექნიკური დახმარების 4 დონეს:</p>
									<ul>
										<li>უფასო სერვისი Basic პაკეტის მფლობელებისთვის: e-mail მხარდაჭერა, live chat დახმარება.</li>
										<li>უფასო სერვისი Premium პაკეტის მფლობელებისთვის: e-mail მხარდაჭერა, live chat დახმარება.</li>
										<li>
											სატელეფონო მხარდაჭერა - პერსონალური დახმარების შესაძლებლობა, დამატებით mSpy-ს სტანდარტული მხარდაჭერისა, 
											მხოლდ 9,9$-ად (ერთჯერადი გადასახადი). მიიღე სატელეფონო მხარდაჭერის შესაძლებლობა და ნაბიჯ-ნაბიჯ გაიარე 
											ინსტალაციის პროცედურა და სხვა ნებისმიერი საკითხი. ეს სერვისი არის ნებაყოფლობითი და არ არის სავალდებულო.
										</li>
										<li>
											mAssistance - VIP დამხმარე -დაგეხმარებათ rooting/jailbreak პროცესებში, 
										 	mSpy-ს ინსტალაციაში Team Viewer-ს დახმარებით, 
											ფუნქციონალის კონფიგურაციაში და 24/7 ტექნიკური დახმარება ტელეფონით, live chat-თ და email-ით მხოლოდ 37,99$-ად.
										</li>
									</ul>
								</div>
							</div>
						</section>
					</div>
					<div class="tabs__item" id="desktop">
						<section id="" class="broken_block faq_list">
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">What is mSpy for computers?</h3>
								<div class="text">
									<p>mSpy is a number one monitoring software for computers
										that helps parents keep children safe and workers productive.
										It keeps tabs on keylogs and emails, takes snaps of the screen
										and monitors applications’ activity on the computer. mSpy
										collects information from the target computer and sends it to
										your Control Panel (your account that will be created after
										purchase) which you can access from any browser.</p>
									<p>mSpy for computers runs on Windows XP, Vista, 7, 8 and
										Mac OS 10.7 - 10.10.3 based platforms.</p>
									<p>
										User-friendly <a class="js-viewDemo"
											data-target="user.view.dashboarddesktop.phone_id-3"
											href="faq.php#">Customer’s area</a>, 24/7 live Customer
										Support, variety of subscription plans and affordable prices
										would make your experience the best value for your money.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How does it work?</h3>
								<div class="text">
									<p>mSpy collects data from the target computer on which it
										is installed and displays it in the Control Panel (your
										account that will be created after purchase) which you can
										access using any Internet browser.</p>
									<p>
										To start using mSpy you need to check the <a
											href="compatibility.php#tab-windows">compatibility</a> of
										the computer you’d like to monitor, choose the subscription
										plan and proceed with the purchase. After that you receive an
										email with the login and password to your personal Control
										Panel where you also find the installation instructions.
										Basically you’ll need to have a full authorized physical
										access to the target device, launch the computer browser,
										download the software following instructions and complete
										installation by entering registration code.
									</p>
									<p>By installing mSpy, you confirm your intention to use
										this software legally, i.e. you install mSpy on your own
										device, the device of your underage child or the owner of the
										device agrees to be monitored.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Which computer operating systems does
									mSpy run on?</h3>
								<div class="text">
									<p>mSpy is compatible with computers/laptops that run
										Windows and Mac Operating Systems.</p>
									<ul>
										<li>Windows XP x32; Windows Vista x32, x64; Windows 7
											x32, x64; Windows 8, 8.1 (without Metro apps)</li>
										<li>Mac OS 10.7 Lion, Mac OS X 10.8 Mountain Lion, OS X
											10.9 Mavericks, OS X 10.10 Yosemite</li>
									</ul>
									<p>
										Please check whether your device is compatible by entering its
										OS version <a href="compatibility.php#tab-windows">here</a>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Which features are offered with mSpy for
									computers?</h3>
								<div class="text">
									<p>Here are the features you can get with mSpy for
										computers:</p>
									<ul>
										<li>SCREENSHOTS (mSpy automatically captures screenshots
											of the target computer’s desktop within the time interval
											specified by you)</li>
										<li>KEYLOGGER (keeps tabs on keyboard keys pressed by the
											User, e.g. you get a complete log of text entered such as:
											emails sent, websites visited, messages sent)</li>
										<li>USER ACTIVITY (shows how long User(s) are
											active/inactive during each computer session)</li>
										<li>APPLICATION USE (shows which apps are used on the
											target computer and how much time is spent using each
											application)</li>
										<li>INSTALLED APPLICATIONS (shows the list of
											applications that are installed on the target computer)</li>
										<li>WEB MAIL (shows sent/read Gmail correspondence)</li>
									</ul>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Does mSpy work on tablets?</h3>
								<div class="text">
									<p>
										Yes, you can monitor a tablet using <a
											href="buynow.html#tab-phone">mSpy for phones</a> as tablets
										run mobile operating systems<sup>*</sup>
									</p>
									<p>
										<sup>*</sup>mSpy works both with Android and iOS tablets.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Is it legal to use mSpy?</h3>
								<div class="text">
									<p>mSpy application was designed to help parents keep their
										children safe and workers productive and its usage is
										absolutely legal.</p>
									<p>Please make sure that your intentions to use our
										application meet the following legal requirements:</p>
									<ul>
										<li>You want to use mSpy as a parental control solution
											for monitoring your underage children.</li>
										<li>You want to use mSpy as a solution for monitoring
											company-owned devices of which employees are aware of being
											monitored.</li>
										<li>You want to install mSpy on your own device.</li>
									</ul>
									<p>It is your responsibility to determine whether you have
										proper authorization to monitor the device. It is also your
										responsibility to determine which disclosures, notifications,
										or agreements may be necessary in your jurisdiction, as
										applied to the specific facts and circumstances in which you
										want to use mSpy. If you have questions about the legality of
										using mSpy as you intend to use it, contact legal counsel of
										your choice. mSpy cannot provide legal advice.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Is mSpy icon displayed on the monitored
									computer?</h3>
								<div class="text">
									<p>Right after the installation, mSpy application is
										launched and starts working in a background mode. There is no
										shortcut (for Windows) or alias (for Mac) displayed on the
										target device. mSpy uses Internet connection to transfer the
										information to your account. mSpy folder is shown on the hard
										drive and on the Process List (in x64 version of Windows OS)
										and in the Activity Monitor (on Mac OS). The collected
										information is transferred to your account automatically.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How to activate mSpy?</h3>
								<div class="text">
									<p>In order to activate mSpy on the target computer, you
										just need to:</p>
									<ul>
										<li>Connect the computer to Internet;</li>
										<li>Install mSpy following installation Wizard
											instructions from your Control Panel;</li>
										<li>Enter the activation code and ID located on the 3d
											step of the installation Wizard;</li>
										<li>Restart target computer.</li>
									</ul>
									<p>NOTE: you must have administrative rights or password
										(if any) in order to install mSpy on the target computer.</p>
									<p>
										We recommend you to add our special service mAssistance while
										purchasing mSpy<sup>*</sup>
									</p>
									<p>
										<sup>*</sup>With mAssistance, we’ll gladly perform initial
										installation of mSpy on your target computer, as well as set
										up all features for you remotely using TeamViewer. You’ll
										still need to have a physical access to the target device with
										an Internet connection.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Where can I check data from the monitored
									computer?</h3>
								<div class="text">
									<p>
										Once mSpy is set up on the monitored device and is connected
										to our server, the information will be automatically displayed
										in the Control Panel of your personal account that can be
										accessed from any browser. Check how mSpy Control Panel looks
										by pressing <a class="js-viewDemo"
											data-target="user.view.dashboarddesktop.phone_id-3"
											href="faq.php#">View Demo</a>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">What payment methods are available for
									purchasing mSpy?</h3>
								<div class="text">
									<p>We currently accept the following payment methods:</p>
									<ul>
										<li>Visa/MasterCard/Eurocar</li>
										<li>Bank/Wire transfer</li>
										<li>American Express</li>
										<li>Diners Club</li>
										<li>JCB</li>
										<li>PayPal</li>
										<li>Fax</li>
										<li>Vendor to vendor</li>
										<li>Purchase order</li>
										<li>Check</li>
										<li>sofortbanking.com</li>
										<li>Carte Bleue</li>
										<li>支付宝 (Alipay)</li>
										<li>Giropay</li>
										<li>iDEAL</li>
										<li>WebMoney</li>
										<li>Cash at 7-Eleven/Family Dollar/ACE</li>
										<li>Boleto Bancario</li>
										<li>CashU</li>
										<li>Ukash</li>
										<li>Dankort</li>
										<li>Chinese Debit Card</li>
										<li>Qiwi Wallet</li>
										<li>eCheck/ACH</li>
									</ul>
									<p>Payment options may vary depending on your country of
										residence. Select your preferred payment method once you
										proceed to Checkout.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">What will I see in my bank statement?</h3>
								<div class="text">
									<p>mSpy purchase will appear on your bank or credit card
										statement as AVANGATE*mspy.software or paypro-charge.com
										depending on the payment processor.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How many computers can I monitor at the
									same time?</h3>
								<div class="text">
									<p>Please be informed that you can monitor as many
										computers as you want. When you purchase one subscription, you
										can monitor one computer only. But you can change target
										device free of charge during all subscription period as many
										times as you wish. If you want to monitor 2 devices at a time,
										you need to purchase two subscriptions.</p>
									<p>
										If you want to monitor multiple devices simultaneously, our
										Family Kit offer is the best option for you. <a
											href="buynow.html#tab-desktop">Get 5 mSpy subscriptions
											and save up to 20%!</a>
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How many computer Users can I monitor
									with mSpy?</h3>
								<div class="text">
									<p>You can monitor the activity of all Users on the target
										computer.</p>
									<p>NOTE: you must have administrative rights or password
										(if any) in order to install mSpy on the target computer.</p>
									<p>By installing mSpy, you confirm your intention to use
										this software legally, i.e. you install mSpy on your own
										device, the device of your underage child or the owner of the
										device agrees to be monitored.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">What happens when a new mSpy version is
									released?</h3>
								<div class="text">
									<p>Once a new version of mSpy is released, it will
										automatically be updated on the monitored device. The changes
										will only be applied once the monitored computer is restarted.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How can I uninstall mSpy from the
									monitored computer?</h3>
								<div class="text">
									<p>mSpy can easily be uninstalled from the monitored device
										right from your Control Panel. You can find detailed
										information on the un-installation process through the Help
										section of your account.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How can I get refund?</h3>
								<div class="text">
									<p>
										You may be eligible to receive a full refund within 10 days
										following the day of your purchase as long as refund reasons
										do not contradict our<a href="refund-policy.html"> Refund
											Policy conditions</a>. At the same time, we are confident that
										our professional Customer Support can help you with any issues
										that may arise and make you fully satisfied with mSpy.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Why does the monitored device require
									Internet connection?</h3>
								<div class="text">
									<p>The monitored device must be Internet-enabled for mSpy
										to send information from the monitored device to your Control
										Panel. Once the information is uploaded to our server, it will
										be displayed in the Control Panel of your account.</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">Can I transfer (re-install) the software
									to another computer?</h3>
								<div class="text">
									<p>You can easily install mSpy onto any other computer at
										no additional cost. In order to do that, you must uninstall
										mSpy from the device that you currently monitor and install it
										onto another. You can always find more information on how to
										do that under button HELP in your account or check with our
										professional technical support that works 24/7.</p>
									<p>
										We recommend you to add our special service mAssistance while
										purchasing mSpy<sup>*</sup>
									</p>
									<p>
										<sup>*</sup>With mAssistance, we’ll gladly perform initial
										installation of mSpy on your target computer, as well as set
										up all features for you remotely using TeamViewer. You’ll
										still need to have a physical access to the target device with
										an Internet connection.
									</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">How can I detect monitoring software on
									my computer?</h3>
								<div class="text">
									<p>Please, remember that mSpy is completely legal software
										and all our customers are obliged to comply with the legal
										terms while using mSpy. It means you are allowed to install
										mSpy on your own device, the device of your underage child or
										the owner of the device agrees to be monitored. If you notice
										any illegal usage of mSpy software, please inform us
										immediately!</p>
								</div>
							</div>
							<div class="item">
								<i class="skew left"></i> <i class="skew right"></i>
								<h3 class="title">What if I need technical support?</h3>
								<div class="text">
									<p>We offer four levels of mSpy technical assistance:</p>
									<ul>
										<li>Free service for Basic subscription users: e-mail
											support and live chat assistance.</li>
										<li>Free service for Premium subscription users: e-mail
											support and live chat assistance.</li>
										<li>Phone Support – personalized customer assistance in
											addition to the standard mSpy support for only $9.99
											(one-time payment). Have access to phone support, step by
											step walk through the installation process, and more! This
											service is optional and non-refundable.</li>
										<li>mAssistance - VIP assistance in installation of mSpy,
											all features setup through Team Viewer and 24/7 technical
											support over the phone, in live chat and emails for $37.99</li>
									</ul>
								</div>
								</li>
						</section>
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
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/script.js"></script>


</body>
</html>