		<!-- Favicon -->
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'>
		<!-- Website styling -->
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/media-queries.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,700" rel="stylesheet"> 
		<!-- Animate.css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<!-- jQuery CDN -->
		<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
		<!-- SlickNav -->
		<link rel="stylesheet" href="css/slicknav.css">
		<script src="js/slicknav.js"></script>
		<!-- Script to add .current to active nav elements -->
		<script>
			$(function(){
				$('#navDesktop a').each(function() {
					if ($(this).prop('href') == window.location.href) {
					$(this).addClass('current');
					}
				});
			});
		</script>
		<!-- Google Analytics implementation -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46897929-3', 'auto');
		  ga('send', 'pageview');
		</script>
    </head>
  
    <body>
		<div class="wrapper">
			<nav id="headerDesktop">
				<a href="index.php"><img src="img/logo.svg" id="siteLogo" alt="Bo Gjerløw"></a>
				<ul id="navDesktop">
					<li class="navItemDesktop"><a href="index.php" id="work">WORK</a></li>
					<li class="navItemDesktop"><a href="about.php">ABOUT</a></li>
					<li class="navItemDesktop"><a href="contact.php">CONTACT</a></li>
				</ul>	
			</nav>

			<nav id="headerMobile">
				<ul id="navMobile">
					<li class="navItemMobile"><a href="index.php">Work</a></li>
					<li class="navItemMobile"><a href="about.php">About</a></li>
					<li class="navItemMobile"><a href="contact.php">Contact</a></li>
				</ul>

				<script>
					$(function(){
						$('#navMobile').slicknav();
					});

					$(function(){
						$('.slicknav_menu').prepend('<a href="index.php"><img id="siteLogoMobile" src="img/logo-mobile.svg" alt="Bo Gjerløw"/></a>');
					});
				</script>
			</nav>