<?php get_header() ?>
<div class="container">
	<div class="row">
		<div class="col-xs-9 color3">
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <div class="dos-tercios listado">
					 <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					 <p class="published">Publicado: <? the_time('j'); ?> de <? the_time('F'); ?> del <? the_time('Y'); ?></p>
					 <?php the_content(); ?>
				 </div><!-- end of dos-tercios -->
				 <?php endwhile; else: ?>
				 <h2>No encontrado</h2>
				 <p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
				 <?php endif; ?>
		</div>
		<div class="col-xs-3 color4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>