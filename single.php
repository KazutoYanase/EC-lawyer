<?php get_header(); ?>

<!-- bread crumbs -->
<?php breadcrumb(); ?>
<!-- //END bread crumbs -->

<!-- side floating -->
<?php //get_template_part( 'parts_floating-bnr' ); ?>
<!-- //END side floating -->
	
<?php 
$cat = get_the_category();
$cat = $cat[0];
$page_slug = $cat->slug;
$page_title = $cat->name;
?>

<div class="ecl-pg-header" style="background-image:url(<?php echo esc_url( get_template_directory_uri()) ; ?>/img/pg_bg_<?php echo esc_html($page_slug) ?>.jpg)">
	<h1><?php echo esc_html($page_title) ?></h1>
</div>

<?php while( have_posts() ) : the_post(); ?>

<?php /*
<article class="article__wrap">

	<div class="article__header">
		<div class="article__header__info">
			<time class="font-lato article__header__time"><?php the_time( 'Y.m.d' ); ?></time>
			<p class="article__header__category"><?php the_category(' &bull; '); ?></p>
		</div>
		<h1 class="article__header__title"><?php the_title(); ?></h1>
		<p class="article__header__name"><span class="font-lato font-lato__b">by</span> <?php the_author(); ?></p>
	</div>

	<div class="article__body">
		<?php the_content(); ?>
	</div>

	<div class="article__footer">
		<p class="article__footer__back-btn">
			<a href="<?php echo esc_url( home_url('/column'); ?>">
				<svg version="1.1" id="arrow_l" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"	y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
					<path id="arrow" class="st0" d="M0,14l14.1,14l2.8-2.8L7.7,16H38v-4H7.7L17,2.8L14.1,0L0,14L0,14z"/>
				</svg>
				<span>コラム一覧へ</span>
			</a>
		</p>
	</div>

</article>
*/ ?>

<article class="ecl-pg-column">
	<div class="ecl-pg-column-header">
		<time class="ecl-pg-column-header-time"><?php the_time( 'Y.m.d' ); ?></time>
		<h1 class="ecl-pg-column-header-title"><?php the_title(); ?></h1>
	</div>
	<div class="ecl-pg-column-body">
		<?php the_content(); ?>
	</div>
</article>

<!-- btn area -->
<div class="btn-area ecl-btn-area">
	<a href="<?php echo esc_url( home_url('/inquiry') ); ?>">
		ご相談・お問合せはこちら
		<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
			<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
		</svg>
	</a>
</div>
<!-- //END btn area -->

<?php endwhile; ?>

<?php get_footer(); ?>