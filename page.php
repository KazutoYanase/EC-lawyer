<?php get_header(); ?>

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

	<?php while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

<?php get_footer(); ?>