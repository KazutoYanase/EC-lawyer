<?php
/**
 * Template Name: カテゴリ別コラム一覧テンプレート */
?>

<?php get_header(); ?>

	<?php
	$parent_id = $post->post_parent;
	$parent_slug = get_post($parent_id)->post_name;
	$parent_title = get_post($parent_id)->post_title;
	?>

	<main role="main">

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

		<!-- column -->
		<div class="ecl-pg-header" style="background-image:url(<?php echo esc_url( get_template_directory_uri()) ; ?>/img/pg_bg_<?php echo esc_html($parent_slug) ?>.jpg)">
			<h1><?php echo esc_html($parent_title) ?></h1>
		</div>
		
		<section class="column ecl-pg-box">

			<div class="section-inner">
				<h3><span>Column</span></h3>

				<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
				$args =	array(
						'category_name'		=> $parent_slug,
						'posts_per_page'	=> 12,
						'orderby'			=> 'date',
						'order'				=> 'DESC',
						'post_type'			=> 'post',
						'post_status'		=> 'publish',
						'caller_get_posts'	=> 1,
						'paged'				=>  $paged
				);
				$wp_query = new WP_Query($args);
				$wrapList = 1;
				?>

				<ul class="column__list">
		
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				
				<?php if ( $wrapList % 3 == 1 && $wrapList != 1 ): ?>
				</ul>
				<ul class="column__list">
				<?php endif; ?>

					<li>
						<a href="<?php the_permalink() ?>">
							<div class="column__list__text">
								<time class="font-lato"><?php the_time( 'Y.m.d' ); ?></time>
								<?php
									$category = get_the_category();
									$end = end( $category );
									if($category) :
								?>
								<p class="column__list__category">
									<?php
										foreach ($category as $c){
											if( $c === $end ) {
												echo $c->cat_name;
											} else {
												echo $c->cat_name.'・';
											}
										}
									?>
								</p>
								<?php endif; ?>
								<p class="column__list__title"><?php the_title(); ?></p>
							</div>
							<div class="column__list__img">
								<?php the_post_thumbnail( 'middle-feature', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
								<span class="column__list__arrow hide-sm">
									<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
								<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
							</svg>
								</span>
							</div>
						</a>
					</li>

					<?php $wrapList++;  ?>

					<?php endwhile; ?>

				</ul>

				<!-- paging nav -->
				<div class="paging-nav">
					
				<?php
				global $wp_rewrite;
				$paginate_base = get_pagenum_link(1);
				
				if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
					$paginate_format = '';
					$paginate_base = add_query_arg('paged','%#%');
				} else{
					$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
					user_trailingslashit('page/%#%/','paged');;
					$paginate_base .= '%_%';
				}
				echo paginate_links(array(
					'base' => $paginate_base,
					'format' => $paginate_format,
					'total' => $wp_query->max_num_pages,
					'mid_size' => 4,
					'end_size' => 1,
					'current' => ($paged ? $paged : 1),
					'prev_text' => __('<svg version="1.1" id="arrow_l" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"  y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve"><path id="arrow" class="st0" d="M0,14l14.1,14l2.8-2.8L7.7,16H38v-4H7.7L17,2.8L14.1,0L0,14L0,14z"/></svg>'),
					'next_text' => __('<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve"><path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"></path></svg>')
				));
				?>

				</div>
				<!-- //END paging nav -->

				<?php wp_reset_postdata(); ?>

			</div>
		</section>
		<!-- //END column -->

<?php get_footer(); ?>