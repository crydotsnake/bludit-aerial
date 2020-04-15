<!-- Header -->
<?php include(THEME_DIR_PHP.'header.php'); ?>

					<header id="header">
					<?php foreach($content as $page): ?>
						<h1><?php echo $page->title(); ?></h1>
						<p><?php echo $page->content(); ?></p>
					<?php endforeach ?>
					<nav>
							<ul>
								<?php
									if ($site->twitter()){
										echo '<li><a target="_blank" href="'.$site->twitter().'" class="icon brands fa-twitter"></a></li>';
										}
									if ($site->instagram()){
										echo '<li><a target="_blank" href="'.$site->instagram().'" class="icon brands fa-instagram"></a></li>';
										}
									if ($site->facebook()){
										echo '<li><a target="_blank" href="'.$site->facebook().'" class="icon brands fa-facebook-f"></a></li>';
										}
									if ($site->github()){
										echo '<li><a target="_blank" href="'.$site->github().'" class="icon brands fa-github"></a></li>';
										}
						?>
							</ul>
						</nav>
					</header>

<!-- Footer -->
<?php include(THEME_DIR_PHP.'footer.php'); ?>
