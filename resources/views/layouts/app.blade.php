<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Ryan - vCard / Resume / CV Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="vCard & Resume Template" />
	<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="beshleyua" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
	
	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="{{ asset('css/basic.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/layout.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/blogs.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/ionicons.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" />

	<!--
		Background Gradient
	-->
	<!--<link rel="stylesheet" href="css/gradient.css" />-->
	
	<!--
		Template New-Skin
	-->
	<!--<link rel="stylesheet" href="css/new-skin/new-skin.css" />-->

	<!--
		Template RTL
	-->
	<!--<link rel="stylesheet" href="css/rtl.css" />-->
	
	<!--
		Template Colors
	-->
	<link rel="stylesheet" href="css/template-colors/green.css" />
	<!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
	<!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

	<!--
		Template Dark
	-->
	<!--<link rel="stylesheet" href="css/template-dark/dark.css" />-->

	
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	
</head>

<body>
	<div class="page">
		
		<!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- background -->
		<div class="background"></div>

		<!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">

			<!--
				Header
			-->
			<header class="header">

				<!-- menu -->
				<div class="top-menu">
					<ul>
						<li class="active">
							<a href="#about-card">
								<span class="icon ion-person"></span>
								<span class="link">About</span>
							</a>
						</li>
						<li>
							<a href="#resume-card">
								<span class="icon ion-android-list"></span>
								<span class="link">Resume</span>
							</a>
						</li>
						<li>
							<a href="#works-card">
								<span class="icon ion-paintbrush"></span>
								<span class="link">Works</span>
							</a>
						</li>
						<li>
							<a href="#blog-card">
								<span class="icon ion-chatbox-working"></span>
								<span class="link">Blog</span>
							</a>
						</li>
						<li>
							<a href="#contacts-card">
								<span class="icon ion-at"></span>
								<span class="link">Contact</span>
							</a>
						</li>
					</ul>
				</div>

			</header>

			<!--
				Card - Started
			-->
			<div class="card-started" id="home-card">

				<!--
					Profile
				-->
				<div class="profile">

					<!-- profile image -->
					<div class="slide" style="background-image: url(images/background.jpg);"></div>

					<!-- profile photo -->
					<div class="image">
						<img src="images/passport1.jpg" alt="" />
					</div>

					<!-- profile titles -->
					<div class="title">Gideon Asare</div>
					<div class="subtitle">Web Developer</div>

					<!-- profile socials -->
					<div class="social">
						<a target="_blank" href="https://codepen.io/Gideon847/pens/public"><span class="fab fa-codepen"></span></a>
						<a target="_blank" href="https://github.com/asare847"><span class="fab fa-github"></span></a>
						{{-- <a target="_blank" href="https://stackoverflow.com/"><span class="fab fa-stack-overflow"></span></a> --}}
					</div>
					
					<!-- profile buttons -->
					<div class="lnks">
						<a href="/images/cv/GIDEON_ASARE113.docx" class="lnk">
							<span class="text">Download CV</span>
							<span class="ion ion-archive"></span>
						</a>`		
						<a href="#" class="lnk discover">
							<span class="text">Contact Me</span>
							<span class="arrow"></span>
						</a>
					</div>

				</div>

			</div>
            @yield('content')
       
        </div>
    </div>
            <script src="{{ asset('js/jquery.min.js')}}"></script>
            <script src="{{ asset('js/jquery.validate.js')}}"></script>
            <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
            <script src="{{ asset('js/imagesloaded.pkgd.js')}}"></script>
            <script src="{{ asset('js/isotope.pkgd.js')}}"></script>
            <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
            <script src="{{ asset('js/owl.carousel.js')}}"></script>
            
            <!--
                Google map api
            -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz2w7HUaWudHwd7AWQpCL48Qs050WOn9s"></script>
            
            <!--
                Main Scripts
            -->
            <script src="js/scripts.js"></script>
            
        </body>
        </html>