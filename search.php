<?php get_header(); ?>

	<main role="main">

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

	<!-- column -->
		<section class="section-wrap column archive">

			<div class="section-inner">
				<h1 class="section-title">
					「<?php the_search_query(); ?>」で検索した結果
				</h1>

				<ul class="column__list">

				<?php
					$wrapList = 1;

					if( have_posts() ) :
					while( have_posts() ) : the_post();
				?>

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

					<?php else: ?>
							<li>検索結果は0件です。</li>
					<?php endif; ?>
					
				</ul>

				<!-- paging nav -->
				<div class="paging-nav">
					
					<?php wp_pagination(); ?>

				</div>
				<!-- //END paging nav -->

			</div>
		</section>
		<!-- //END column -->

<?php get_footer(); ?>