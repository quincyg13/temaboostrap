<!-- 
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

			<div  class="panel panel-default">
				<div class="panel-heading"><h1 class="widget-title"><?php _e( 'Search', 'govpress' ); ?></h1></div>
				<div class="panel-body"><?php get_search_form(); ?></div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><h1 class="widget-title"><?php _e( 'Archives', 'govpress' ); ?></h1></div>
				<div class="panel-body"><ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul></div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><h1 class="widget-title"><?php _e( 'Meta', 'govpress' ); ?></h1></div>
				<div class="panel-body">
					<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</div>
			</div>

		<?php endif; // end sidebar widget area ?>
	</div> --><!-- #secondary -->

	<div>

	<?php if ( ! dynamic_sidebar( 'Sidebar Personalizada' )) : ?>
		<!-- Widgets de la Barra Frontal Derecha -->
	<?php endif; ?>

</div> <!-- #Sidebar-Right -->
