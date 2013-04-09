<?php

	// -- init config file
	require('../inc/_config.php');

	// -- give your page some info
	$pageTitle = 'Welcome';
	$pageDescription = '';
	$pageKeywords = '';
	$isHomePage = false;
	$isStyleGuide = true;

	// -- <head> portion, leaving </head> in case you want to include page-specific styles
	include(__DOCROOT__ . '/inc/parts/meta.php');

?>
		<link rel="stylesheet" href="/assets/css/lib/styleguide.css" type="text/css">
	</head>
	<body>
		<?php include(__DOCROOT__ . '/inc/parts/header.php'); ?>

		<section class="main-content">
			<div class="content-contain">
				<div class="row">
					<section id="primary" class="col-eight primary-column">
						<h1 class="section-title">Color Palette</h1>
						<ul class="color-palette">
							<li class="color-primary">#d14014</li>
							<li class="color-secondary">#f38e40</li>
							<li class="color-tertiary">#04a7de</li>
							<li class="color-quaternary">#214281</li>
							<li class="color-quinary">#666666</li>
							<li class="color-alternate">#9a9a9a</li>
						</ul>
						<h2 class="section-subtitle">Body Font Styling</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#" title="">Duis aute irure dolor</a> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <a href="#" title="">quis nostrud exercitation</a> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</section>
					<aside id="secondary" class="col-four secondary-column">
						<h1 class="section-title">Typography</h1>
						<h1>Header Level 1</h1>
						<p>Lorem Ipsum</p>
						<h2>Header Level 2</h2>
						<p>Lorem Ipsum</p>
						<h3>Header Level 3</h3>
						<p>Lorem Ipsum</p>
						<h4>Header Level 4</h4>
						<p>Lorem Ipsum</p>
						<h5>Header Level 5</h5>
						<p>Lorem Ipsum</p>
						<h6>Header Level 6</h6>
						<p>Lorem Ipsum</p>
						<hr>
						<h1 class="section-title">Forms</h1>
						<button class="btn">Button</button>
						<input type="submit" class="btn">
						<input type="button" class="btn" value="Button">
						<a href="#" class="btn btn-primary">Button</a>
						<div class="btn-row">
							
						</div>
					</aside>
				</div>
				<section id="grid" class="styleguide-grid">
					<div class="row">
						<h1 class="section-title">Grid Layout</h1>
						<div class="col-twelve">col-twelve</div>
					</div>
					<div class="row">
						<div class="col-eleven">col-eleven</div>
						<div class="col-one">col-one</div>
					</div>
					<div class="row">
						<div class="col-ten">col-ten</div>
						<div class="col-two">col-two</div>
					</div>
					<div class="row">
						<div class="col-nine">col-nine</div>
						<div class="col-three">col-three</div>
					</div>
					<div class="row">
						<div class="col-eight">col-eight</div>
						<div class="col-four">col-four</div>
					</div>
					<div class="row">
						<div class="col-seven">col-seven</div>
						<div class="col-five">col-five</div>
					</div>
					<div class="row">
						<div class="col-six">col-six</div>
						<div class="col-six">col-six</div>
					</div>
					<div class="row">
						<div class="col-five">col-five</div>
						<div class="col-seven">col-seven</div>
					</div>
					<div class="row">
						<div class="col-four">col-four</div>
						<div class="col-eight">col-eight</div>
					</div>
					<div class="row">
						<div class="col-three">col-three</div>
						<div class="col-nine">col-nine</div>
					</div>
					<div class="row">
						<div class="col-two">col-two</div>
						<div class="col-ten">col-ten</div>
					</div>
					<div class="row">
						<div class="col-one">col-one</div>
						<div class="col-eleven">col-eleven</div>
					</div>
				</section>
			</div>
		</section>

		<?php include(__DOCROOT__ . '/inc/parts/footer.php'); ?>
	</body>
</html>
