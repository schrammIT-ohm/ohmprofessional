<header>
	<title>Ohm - Page not found </title>
		<div class="col-sm-12"> <!--Hier liegt das Logo, das links oben auf der Seite erscheint -->
			<?php
				// --- Logo
				// if site-icons is defined: Use the uploaded site icon (Admin->Customizer->Website Infos ->Website Icon)
				// otherwise use default Logo from ../img/...
				$logoUrl = has_site_icon() ? get_site_icon_url() : get_bloginfo('template_directory') . '/img/ohm-logo.png';
			?>
			<a href="front-page.php">
			<img class="img-responsive" src="<?php echo $logoUrl; ?>" alt="Logo - <?php echo get_bloginfo('name'); ?>">
		</a>
					<h1>Error 404 - Not found </h1>
		</div>

	</header>


				<div class="container-fluid">

					<h2><?php _e( 'Die URL ist falsch oder veraltet', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'Suchen Sie nach einem bestimmten Stichwort? Dann geben Sie dieses hier ein:', 'twentythirteen' ); ?>
					<?php get_search_form(); ?>
					<br>
					<p>Oder nehmen Sie direkt <a href="Kontakt.php" target="Kontakt.php">Kontakt</a> mit uns auf.</p>
				</div><!-- .page-content -->



<?php get_footer(); ?>
