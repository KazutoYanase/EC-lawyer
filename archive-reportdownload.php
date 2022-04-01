<?php
/**
 * Template Name: report-download */
?>
    <?php get_header(); ?>

	<main role="main">

	<!-- bread crumbs -->
	<?php breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

	<!-- column -->
		<section class="section-wrap report__download">

			<div class="section-inner">
				<h1 class="section-title">
						<span class="font-lato font-lato__bold-i">Report Download</span>
						<span class="small">レポートダウンロード(無料)</span>
				</h1>


        <div class="btn-square-report-download"><a href="<?php echo home_url(); ?>/report-download-form/" target="_blank">閲覧用ID・パスワード無料発行はこちら&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <?php
                if ( !is_paged() ) {
                    $class_top = 'first-page';
                } else {
                    $class_top = '';
                }
            ?>
        <ul class="report__download__list <?php echo $class_top; ?>">
            <?php $posts_per_page = $paged > 1 ? 6 : 5;
                parse_str ( $query_string, $org_args );
                $add_args = array (
                    'posts_per_page' => $posts_per_page
                );
                if ( $paged > 1 )
                    $add_args['offset'] = 5 + ( $paged - 2 ) * 6;
                $args = array_merge ( $org_args, $add_args );
            ?>
            <?php $wp_query = new WP_Query( $args );
            if (( $wp_query->found_posts > 5 ) && ( $wp_query->found_posts < 11 )) {
            $wp_query->max_num_pages = 2;
            } else {
            $wp_query->max_num_pages = ceil ( ( $wp_query->found_posts + 1 ) / 6 );
            }
            ?>
        <?php if ( $wp_query->have_posts() ): ?>
        <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
        
			<li>
				<a href="<?php the_permalink() ?>">
					<div class="inner">
						<dl>
							<dt><h3><?php the_title(); ?></h3></dt>
							<dd class="img">
            					<?php
                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, true);
                                echo ( '<img src="'.$image_url[0].'" width="100%" height="auto">' );
                                ?>
                            </dd>
                            <dd class="tx"><time class="font-lato"><?php the_time( 'Y.m.d' ); ?></time></dd>
							<dd class="tx"><?php echo wp_trim_words( get_the_content(), 36, '...' ); ?></dd>
						</dl>
						<p class="align-r"><span>詳細を見る<i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
					</div>
				</a>
			</li>

        <?php wp_reset_postdata(); endwhile; ?>
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