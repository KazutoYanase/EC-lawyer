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
				<span class="font-lato font-lato__bold-i">News</span>
				<span class="small">新着情報</span>
			</h1>
		</div>

		<!-- news -->
		<section class="news archive">
			<div class="section-inner">
	
				<?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args =	array(
							'posts_per_page'   => 9,
							'orderby'          => 'date',
							'order'            => 'DESC',
							'post_type'        => 'news',
							'post_status'      => 'publish',
							'caller_get_posts' => 1,
							'paged'            =>  $paged
					);
					$wp_query = new WP_Query($args);
				?>
	
				<ul class="news__list">
	
				<?php
					while ($wp_query->have_posts()) : $wp_query->the_post();
					$newsUrl = get_field('news_url');
				?>
					<li>
						<?php if($newsUrl) : ?>
							<a href="<?php echo $newsUrl ?>">
								<time class="font-lato font-lato__b"><?php the_time( 'Y.m.d' ); ?></time>
								<p><?php the_title(); ?></p>
							</a>
						<?php else : ?>
							<time class="font-lato font-lato__b"><?php the_time( 'Y.m.d' ); ?></time>
							<p><?php the_title(); ?></p>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
	
				</ul>
	
			</div>
		</section>
		<!-- //END news -->
		
	</div>

<?php get_footer(); ?>