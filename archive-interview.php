<?php get_header(); ?>

	<!-- bread crumbs -->
	<?php //breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php //get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->
	
	<div class="ecl-pg">

		<div class="ecl-pg-title">
			<h1 class="section-title">
				<span class="font-lato font-lato__bold-i">Interview</span>
				<span class="small">依頼企業様事例</span>
			</h1>
		</div>

		<!-- interview -->
		<section class="archive-interview">

			<?php if ( have_posts() ) : ?>
			<ul class="ecl-interview-list">
				<?php while ( have_posts() ) : the_post();//Start the Loop ?>
				<li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'full' ); ?></a></li>
				<?php endwhile;//end of the loop. ?>
			</ul>
			<?php endif; ?>

		</section>
		<!-- //END interview -->
		
	</div>

<?php get_footer(); ?>