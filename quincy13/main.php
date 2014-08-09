<body <?php body_class(); ?>>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>
<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Lo siento, la página no existe.'); ?></p>
	<?php endif; ?>
</body>