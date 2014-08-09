<?php 
/**
 * Template Name: videos anafinet
 * Description: Plantilla para listar entradas catalogadas como "Socios"
 * 
 * @package WordPress
 * @subpackage Anafinet
 * @since Anafinet 1.0
 */
 ?>

<?php get_header() ?>
<div class="container">
	<div class="row">
				 <div id="content" role="main">
				 	<?	// Arreglo para Paginación
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		// Definimos Argumentos y solicitamos entradas de la categoría "Lo más reciente" (ID → 4)
		$args = array(
					'cat'				=>	1,
					'post_status'		=>	'publish',
					'posts_per_page'	=>	30,
					'paged'				=>	$paged,
				);
		// Query
		query_posts($args);
		// Loop
		if (have_posts()) : while (have_posts()) : the_post(); //Loop
	?>	
          <div class="col-md-4">
          	<article class="front-post">
				<a href="<?php the_permalink() ?>" rel="bookmark">
					<figure>
						<?php if ( has_post_thumbnail() ) ?> 
						<?php the_post_thumbnail( 'title-image', array(150,100) ); ?>
						<figcaption class="caption">
							<h2 class="post-head"><?php the_title(); ?></h2>
						</figcaption>
						<span class="date"><?php the_time('d/m/Y'); ?></span>
					</figure>
				</a>
			</article>
		
	<? endwhile; else: //Sin Entradas y/o Error ?>
		<?php get_template_part('error'); ?>
	<? endif; ?>
			        </div>
			     </div><!-- #content -->
	</div>
</div>

<?php get_footer(); ?>