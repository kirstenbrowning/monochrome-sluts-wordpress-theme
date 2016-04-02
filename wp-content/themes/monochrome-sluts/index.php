<div class="site-container">

<?php get_header() ?>

	<main class="site-content">
		<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
		<article>
<!-- 			<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2> -->
			
			<?php the_post_thumbnail(); 
				if ( has_post_thumbnail () ):
				the_post_thumbnail ();
				else: ?>
				<img src="http://lorempixel.com/1200/400/fashion/7/" alt="fashion stuff">
			<?php endif ?>

			<?php the_excerpt() ?>
			<p><a href="<?php the_permalink() ?>">See more</a></p>
		</article>

		<?php endwhile; endif; ?>
	</main>

<?php get_footer() ?>

</div>