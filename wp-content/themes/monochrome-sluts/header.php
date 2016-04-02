<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title>Monochrome Sluts</title>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/font-awesome/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>favicon.png" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/instafeed.min.js"></script>

	<script type="text/javascript">
	    var feed = new Instafeed({
	        get: 'user',
	        userId: '21785746',
	        accessToken: '12173487.1677ed0.8112b74a7f064898b66a15fcf2562e4d',
	        // resolution: 'standard_resolution',
	        limit: '8',
	        after: function() {
      		$("#instafeed a").attr("target","_blank");
      		}
		});
		feed.run();
	</script>
</head>
<body>
	<header>

		<div class="site-logo"><a href="index.php"><img src="<?php echo get_template_directory_uri() ?>/images/monochromesluts-logo.svg"></a></div>
			<div class="mobile-logo"><a href="index.php"><img src="<?php echo get_template_directory_uri() ?>/images/monochromesluts-logo-nobox-mobile.svg"></a></div>
<!-- 		<h1><a href="<?php echo site_url() ?>"><?php bloginfo ( 'title' ) ?></a></h1> -->
<!-- 		<h2><?php bloginfo ( 'description' ) ?></h2> -->

		<?php 
		$args = array( 'container' => 'nav');
		wp_nav_menu( $args ) ?>
		<a class="nav-icon" href="#"><i class="fa fa-bars fa-2x"></i></a>
	</header>