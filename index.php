<?php
	// -- init config file
	require('inc/_config.php');

	// -- give your page some info
	$pageTitle = 'Welcome to Prototypes Plus';
	$pageDescription = '';
	$pageKeywords = '';
	$isHomePage = true;

	// -- <head> portion, leaving </head> in case you want to include page-specific styles
	include(__DOCROOT__ . '/inc/parts/meta.php');
?>
	</head>
	<body>
		<div class="content-contain">

			<?php include(__DOCROOT__ . '/inc/parts/header.php'); ?>

			<section class="main-content">
				<section id="primary" class="primary-column">
					<h1>Combined Services</h1>
					<p>Together we offer a wide range of prototype modeling services:</p>
					<ul class="row">
						<li class="col-five">CNC Machining</li>
						<li class="col-five">RTV Molding/Casting</li>
						<li class="col-five">Finishing</li>
						<li class="col-five">Stereolithography</li>
						<li class="col-five">Laser Sintering</li>
						<li class="col-five">Light Assembly</li>
					</ul>
					<h1>About A+J</h1>
					<p>A+J Product Solutions is a fast growing consumer electronics product prototyping company that places its highest values on excellence in customer service, quality, speed and working relationships.</p>
					<p>We help product developers and designers turn their ideas into 3D forms that can be touched, held and manipulated. A prototype is a near representation of the real thing. Whether you are a manufacturing engineer or an industrial designer, we can help you bring your ideas to (near) life.</p>
					<p>Call us to arrange a visit to our production facility and meet the people that can make these solutions happen for you.</p>
				</section>
				<aside id="secondary" class="secondary-column">
					<h1>Let's Get Started</h1>
					<p>Get in touch today!<br />(408) 400-9501</p>
					<h2>Visit Us</h2>
					1245 Birchwood Drive<br />
					Sunnyvale, CA 94089<br />
					Map &amp; Directions
				</aside>
			</section>

			<?php include(__DOCROOT__ . '/inc/parts/footer.php'); ?>

		</div>
	</body>
</html>
