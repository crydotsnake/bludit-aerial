<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?php echo Theme::lang() ?>">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<!-- meta description -->
		<?php echo Theme::metaTagDescription(); ?>

		<!-- Dynamic title tag -->
		<?php echo Theme::metaTagTitle(); ?>

		<!-- Include the CSS Files -->
		<?php echo Theme::css('assets/css/main.css') ?>		

		<!-- Load Bludit Plugins: Site head -->
		<?php Theme::plugins('siteHead'); ?>
	
	</head>


	<body class="is-preload">

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">

					<?php foreach($content as $page): ?>

						<h1><?php echo $page->title(); ?></h1>
						<p><?php echo $page->content(); ?></p>
					
					<?php endforeach; ?>
					
					<nav>
							<ul>
								<li><a target="_blank" href="<?php echo $site->twitter() ?>" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a target="_blank" href="<?php echo $site->facebook() ?>" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a target="_blank" href="<?php echo $site->github() ?>" class="icon brands fa-github"><span class="label">Github</span></a></li>
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<?php echo $site->footer(); ?><a href="http://html5up.net">HTML5 UP</a>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>

	</body>
</html>