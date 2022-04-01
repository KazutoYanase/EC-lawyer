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
		<!-- //END news -->
		
	</div>

<?php get_footer(); ?>