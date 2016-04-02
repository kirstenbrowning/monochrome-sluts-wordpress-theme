<div class="site-container"

<?php get_header() ?>
<?php the_post() ?>

	<div id="main">
		<article>
			<h2><?php the_title() ?></a></h2>
			<img src="http://lorempixel.com/900/300/fashion/7/" alt="fashion stuff">
			<?php the_content() ?>
		</article>
	</div>

<?php get_footer() ?>

</div>