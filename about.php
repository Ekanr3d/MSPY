
<?php

    require_once 'get_ip.php';
    $ip=ip();
    $agent = $_COOKIE['OPID'];
	$agent=str_replace("http://mspy.go2cloud.org/SH2rP?source=","",$agent);
    mysql_connect('212.72.155.176','root','Gl-1114');
    mysql_select_db('mspy');
    mysql_set_charset ( 'utf8');
    
    mysql_query("INSERT INTO `access_log` 
    						(`date`, `ip`, `page`, `agent`) 
    				VALUES 
    						(NOW(), '$ip', 'კონტაქტი', '$agent');");
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="utf-8">
<title>დაიცავით ბავშვები mSpy-ით - კონტაქტი</title>
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
<body class="en about">
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
						<a class="item" href="mspy_demo/user.view.dashboard.phone_id-1.html">Live Demo</a> 
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
				<h1 class="page_title">კონტაქტი</h1>
				<div class="row-fluid">
					<div class="span6">
						<p>If you have any questions about how to install mSpy, or if
							you need assistance regarding the purchasing process, please
							contact our Customer Support representatives. They will do their
							best to ensure your mSpy monitoring experience is hassle-free.</p>
						<p>Our Service Team works around the clock to serve the needs
							of all mSpy customers.</p>
						<div class="address_block">
							<h3 class="title">Email us:</h3>
							<p class="item">
								<span class="text">Sales Department:</span>
								<noindex>
								<a rel="noindex"
									href="cdn-cgi/l/email-protection#5023313c3523103d2320297e333f3d"><span
									class="__cf_email__"
									data-cfemail="b5c6d4d9d0c6f5d8c6c5cc9bd6dad8">[email&#160;protected]</span>
								<script cf-hash='f9e31' type="text/javascript">
									/* <![CDATA[ */!function() {
										try {
											var t = "currentScript" in document ? document.currentScript
													: function() {
														for (var t = document
																.getElementsByTagName("script"), e = t.length; e--;)
															if (t[e]
																	.getAttribute("cf-hash"))
																return t[e]
													}();
											if (t && t.previousSibling) {
												var e, r, n, i, c = t.previousSibling, a = c
														.getAttribute("data-cfemail");
												if (a) {
													for (e = "", r = parseInt(a
															.substr(0, 2), 16),
															n = 2; a.length - n; n += 2)
																i = parseInt(
																		a
																				.substr(
																						n,
																						2),
																		16)
																		^ r,
																e += String
																		.fromCharCode(i);
															e = document
																	.createTextNode(e),
															c.parentNode
																	.replaceChild(
																			e,
																			c)
												}
											}
										} catch (u) {
										}
									}();/* ]]> */
								</script></a></noindex>
							</p>
							<p class="item">
								<span class="text">Technical Support:</span>
								<noindex>
								<a rel="noindex"
									href="cdn-cgi/l/email-protection#a6d5d3d6d6c9d4d2e6cbd5d6df88c5c9cb"><span
									class="__cf_email__"
									data-cfemail="50232520203f2224103d2320297e333f3d">[email&#160;protected]</span>
								<script cf-hash='f9e31' type="text/javascript">
									/* <![CDATA[ */!function() {
										try {
											var t = "currentScript" in document ? document.currentScript
													: function() {
														for (var t = document
																.getElementsByTagName("script"), e = t.length; e--;)
															if (t[e]
																	.getAttribute("cf-hash"))
																return t[e]
													}();
											if (t && t.previousSibling) {
												var e, r, n, i, c = t.previousSibling, a = c
														.getAttribute("data-cfemail");
												if (a) {
													for (e = "", r = parseInt(a
															.substr(0, 2), 16),
															n = 2; a.length - n; n += 2)
																i = parseInt(
																		a
																				.substr(
																						n,
																						2),
																		16)
																		^ r,
																e += String
																		.fromCharCode(i);
															e = document
																	.createTextNode(e),
															c.parentNode
																	.replaceChild(
																			e,
																			c)
												}
											}
										} catch (u) {
										}
									}();/* ]]> */
								</script></a></noindex>
							</p>
							<p class="item">
								<span class="text">Press and Media:</span>
								<noindex>
								<a rel="noindex"
									href="cdn-cgi/l/email-protection#6e030b0a070f2e031d1e17400d0103"><span
									class="__cf_email__"
									data-cfemail="2a474f4e434b6a47595a5304494547">[email&#160;protected]</span>
								<script cf-hash='f9e31' type="text/javascript">
									/* <![CDATA[ */!function() {
										try {
											var t = "currentScript" in document ? document.currentScript
													: function() {
														for (var t = document
																.getElementsByTagName("script"), e = t.length; e--;)
															if (t[e]
																	.getAttribute("cf-hash"))
																return t[e]
													}();
											if (t && t.previousSibling) {
												var e, r, n, i, c = t.previousSibling, a = c
														.getAttribute("data-cfemail");
												if (a) {
													for (e = "", r = parseInt(a
															.substr(0, 2), 16),
															n = 2; a.length - n; n += 2)
																i = parseInt(
																		a
																				.substr(
																						n,
																						2),
																		16)
																		^ r,
																e += String
																		.fromCharCode(i);
															e = document
																	.createTextNode(e),
															c.parentNode
																	.replaceChild(
																			e,
																			c)
												}
											}
										} catch (u) {
										}
									}();/* ]]> */
								</script></a></noindex>
							</p>
							<p class="item">
								<span class="text">Affiliate Information:</span>
								<noindex>
								<a rel="noindex"
									href="cdn-cgi/l/email-protection#e9888f8f808580889d8c9aa9849a9990c78a8684"><span
									class="__cf_email__"
									data-cfemail="2a4b4c4c4346434b5e4f596a47595a5304494547">[email&#160;protected]</span>
								<script cf-hash='f9e31' type="text/javascript">
									/* <![CDATA[ */!function() {
										try {
											var t = "currentScript" in document ? document.currentScript
													: function() {
														for (var t = document
																.getElementsByTagName("script"), e = t.length; e--;)
															if (t[e]
																	.getAttribute("cf-hash"))
																return t[e]
													}();
											if (t && t.previousSibling) {
												var e, r, n, i, c = t.previousSibling, a = c
														.getAttribute("data-cfemail");
												if (a) {
													for (e = "", r = parseInt(a
															.substr(0, 2), 16),
															n = 2; a.length - n; n += 2)
																i = parseInt(
																		a
																				.substr(
																						n,
																						2),
																		16)
																		^ r,
																e += String
																		.fromCharCode(i);
															e = document
																	.createTextNode(e),
															c.parentNode
																	.replaceChild(
																			e,
																			c)
												}
											}
										} catch (u) {
										}
									}();/* ]]> */
								</script></a></noindex>
							</p>
						</div>
					</div>
					<div class="span6">
						<p>Send us a message using the form below (all fields are
							required):</p>
						<div class="feedback_form">
							<form action="about.php" onSubmit="return feedback(this)"
								method="post">
								<div class="validate prepend2">
									<p id="login-validate">* Enter Valid Name</p>
									<p id="email-validate">* Enter Email</p>
									<p id="mail-validate">* Enter Valid Email</p>
									<p id="message-validate">* Enter Your Message</p>
									<p id="key-validate">* Enter Valid Numbers</p>
								</div>
								<div class="broken_block">
									<div class="item">
										<input type="text" class="text-field" id="user-login"
											placeholder="Name" name="username">
									</div>
									<div class="item">
										<input type="email" class="text-field" id="email"
											placeholder="Email" name="email">
									</div>
									<div class="item">
										<textarea type="text" class="text-field" id="message" rows="5"
											placeholder="Message" name="message"></textarea>
									</div>
									<div class="item">
										<div class="label">
											<span class="num capA"></span> <span class="num plus">+</span>
											<span class="num capB"></span> <span class="num equally">=</span>
										</div>
										<input type="number" class="text-field" id="capcha"
											placeholder="Type the sum of the numbers" name="captcha">
									</div>
								</div>
								<div id="submit" class="submit_btn align_center">
									<button type="submit" class="btn mid violet submit">SEND</button>
								</div>
								<input type="hidden" name="do_send" value="1" />
							</form>
						</div>
					</div>
				</div>
				<div class="clr"></div>
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
								My Spy (mSpy) არ იღებს პასუხისმგებლობას, თუ მომხმარებელი მონიტორინგისთვის აირჩევს მოწობილობას, 
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

		
	<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>