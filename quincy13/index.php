<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php get_template_part('main'); ?>
			</div>
	<div class="col-md-3 color4">
			<?php get_sidebar(); ?>
	</div>
	</div>
</div>
<body <?php body_class(); ?>>

		
	
</body>
<?php get_footer(); ?>