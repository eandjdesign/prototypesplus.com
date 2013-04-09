<?php
	// -- init config file
	require('inc/_config.php');

	// -- give your page some info
	$pageTitle = 'Welcome';
	$pageDescription = '';
	$pageKeywords = '';
	$isHomePage = true;

	// -- <head> portion, leaving </head> in case you want to include page-specific styles
	include(__DOCROOT__ . '/inc/parts/meta.php');
?>
	</head>
	<body>

		<?php include(__DOCROOT__ . '/inc/parts/header.php'); ?>

		<section class="main-content">
			<div class="content-contain">
				<section id="primary" class="primary-column"></section>
				<aside id="secondary" class="secondary-column"></aside>
			</div>
		</section>


		<?php include(__DOCROOT__ . '/inc/parts/footer.php'); ?>

	</body>
</html>
