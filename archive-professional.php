<?php get_header(); ?>

	<main role="main">

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

		<div class="bg_world">

			<div class="section-wrap profile__member">
				<div class="section-inner">
					<h2 class="section-title">
						<span class="font-lato font-lato__bold-i">Professional</span>
						<span class="small">海外事業プロフェッショナル</span>
					</h2>

					<ul class="profile__member__list">
					<?php
						$wrapList = 1;

						if( have_posts() ) :
						while( have_posts() ) : the_post();
					?>
					
					<?php if ( $wrapList % 3 == 1 && $wrapList != 1 ): ?>
					</ul>
					<ul class="profile__member__list">
					<?php endif; ?>

						<li>
							<a href="<?php the_permalink() ?>">
								<?php
									$image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id, true);

									echo ( '<img src="'.$image_url[0].'" width="217" height="217">' );
								?>

								<div>
									<dl>
										<dt><?php the_title(); ?></dt>
										<dd><?php echo get_post_meta($post->ID, 'professional_title', true); ?></dd>
									</dl>
									<p>プロフィール詳細<i class="fa fa-angle-right" aria-hidden="true"></i></p>
								</div>
							</a>
						</li>

						<?php $wrapList++;  ?>
						<?php
							endwhile;
							endif;
						?>
						<?php wp_reset_postdata(); ?>

					</ul>

				</div>
			</div>
		</div>

	</main>
<?php get_footer(); ?>