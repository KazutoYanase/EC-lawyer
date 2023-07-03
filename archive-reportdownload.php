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
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            
            // もっとも日付が古い3つの記事を取得
            $args_oldest = array(
                'posts_per_page'   => 3,
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'reportdownload',
                'post_status'      => 'publish',
                'caller_get_posts' => 1,
            );
            $oldest_query = new WP_Query($args_oldest);
            $oldest_posts = $oldest_query->posts;
            
            // 最古の3つの記事のIDを取得
            $oldest_post_ids = array();
            foreach ($oldest_posts as $oldest_post) {
                $oldest_post_ids[] = $oldest_post->ID;
            }
            
            $args = array(
                'posts_per_page'   => 6,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => 'reportdownload',
                'post_status'      => 'publish',
                'caller_get_posts' => 1,
                'paged'            =>  $paged,
                'post__not_in'     => $oldest_post_ids, // 最古の3つの記事を除外
            );
            $wp_query = new WP_Query($args);
            ?>
            
            <?php if ($wp_query->have_posts()) : ?>
                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <!-- 記事の表示コードを記述 -->
                    <!-- ... -->
                <?php endwhile; ?>
            <?php endif; ?>


            <ul class="report__download__list">
                
                <?php if($paged < 2): ?>
                
                <li>
                    <a href="https://ec-lawyer.com/report-download/dl-rk/">
                        <div class="inner">
                            <dl>
                                <dd class="img">
                                    <img src="https://ec-lawyer.com/wp-content/uploads/2023/01/DL-riyokiyaku.png" width="100%" height="auto">
                                </dd>
                                <dd class="tx"><time class="font-lato">　</time></dd>
                            </dl>
                            <p class="align-r"><span>詳細を見る<i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://ec-lawyer.com/report-download/dl-pp/">
                        <div class="inner">
                            <dl>
                                <dd class="img">
                                    <img src="https://ec-lawyer.com/wp-content/uploads/2023/01/DL-privacypolicy.png" width="100%" height="auto">
                                </dd>
                                <dd class="tx"><time class="font-lato">　</time></dd>
                            </dl>
                            <p class="align-r"><span>詳細を見る<i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://ec-lawyer.com/report-download/dl_mishukin/">
                        <div class="inner">
                            <dl>
                                <dd class="img">
                                    <img src="https://ec-lawyer.com/wp-content/uploads/2023/04/DL-mishukin.png" width="100%" height="auto">
                                </dd>
                                <dd class="tx"><time class="font-lato">　</time></dd>
                            </dl>
                            <p class="align-r"><span>詳細を見る<i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
                        </div>
                    </a>
                </li>
                <?php endif; ?>

                <?php
                while ($wp_query->have_posts()) : $wp_query->the_post();
                $newsUrl = get_field('news_url');
                ?>
                <li>
                    <a href="<?php the_permalink() ?>">
                        <div class="inner">
                            <dl>
                                <!--<dt><h3><?php the_title(); ?></h3></dt>-->
                                <dd class="img">
                                    <?php
                            $image_id = get_post_thumbnail_id();
                            $image_url = wp_get_attachment_image_src($image_id, true);
                            echo ( '<img src="'.$image_url[0].'" width="100%" height="auto">' );
                            ?>
                                </dd>
                                <dd class="tx"><time class="font-lato"><?php the_time( 'Y.m.d' ); ?></time></dd>
                                <!--
                                <dd class="tx"><?php echo wp_trim_words( get_the_content(), 36, '...' ); ?></dd>
                                -->
                            </dl>
                            <p class="align-r"><span>詳細を見る<i class="fa fa-angle-right" aria-hidden="true"></i></span></p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>

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