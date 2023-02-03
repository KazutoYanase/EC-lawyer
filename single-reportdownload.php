<?php get_header(); ?>

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->


	<?php while( have_posts() ) : the_post(); ?>
	<article class="article__wrap single__report-download">

		<div class="article__header">
			<div class="article__header__info">
				<time class="font-lato article__header__time">
					<?php the_time( 'Y.m.d' ); ?>
				</time>
				<!--<p class="article__header__category">
					<?php the_category(' &bull; '); ?>
				</p>-->
			</div>
			<h1 class="article__header__title"><?php the_title(); ?></h1>
			<!--
			<p class="article__header__name">
				<span class="font-lato font-lato__b">by</span> <?php the_author(); ?>
			</p>
			-->
		</div>

        <?php $report_download_pdf = get_field('attached_pdf'); ?>
		<div class="article__body">
		    <div class="img-thum">
<!--
		        <p class="link-pdf"><a href="<?php echo site_url().'/wp-content/uploads/report-download-pdf/'.$report_download_pdf; ?>" target="_blank">レポートはこちら&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
-->
		        <figure><?php
            $image_id = get_post_thumbnail_id();
            $image_url = wp_get_attachment_image_src($image_id, true);
            echo ( '<img src="'.$image_url[0].'" width="100%" height="auto">' );
            ?></figure>
		    </div>
		    <section class="flex-column justify-content-sa">
		        <div class="link-box">
		            <!--<p class="link-pdf"><a href="<?php echo home_url().'/wp-content/uploads/report-download-pdf/'.$report_download_pdf; ?>" target="_blank">レポートはこちら&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>-->
		            <p class="link-form"><a href="<?php echo home_url(); ?>/report-download-form/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/repot-download-form-link-btn.png" alt="" width="280" height="auto"></a></p>
		        </div>
		        <div class="main-box">
		            <?php the_content(); ?>
<!--
		            <p class="link-pdf"><a href="<?php echo site_url().'/wp-content/uploads/report-download-pdf/'.$report_download_pdf; ?>" target="_blank">レポートはこちら&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
-->
		        </div>
		    </section>
			<div class="link-pdf">
				<a href="<?php echo site_url().'/wp-content/uploads/report-download-pdf/'.$report_download_pdf; ?>" target="_blank">ID/パスワードを入力してダウンロードする&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>

		<div class="article__footer">
			<div class="article__footer__sns">
			<?php 
				if( function_exists( "wp_social_bookmarking_light_output_e") ){
				    wp_social_bookmarking_light_output_e( null, get_permalink(), the_title("", "", false) );
				}
			?>
			</div>
			<p class="article__footer__back-btn">
				<a href="<?php echo esc_url( home_url('/report-download') ); ?>">
					<svg version="1.1" id="arrow_l" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"	y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
						<path id="arrow" class="st0" d="M0,14l14.1,14l2.8-2.8L7.7,16H38v-4H7.7L17,2.8L14.1,0L0,14L0,14z"/>
					</svg>
					<span>レポート一覧へ</span>
				</a>
			</p>
		</div>

	</article>
	<?php endwhile; ?>


<?php get_footer(); ?>