<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php if (is_mymobile()): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php else: ?>
	<meta content="width=1024" name="viewport">
	<?php endif; ?>

	<meta name="google-site-verification" content="zeN3csaIcs4PiZOSBYnrl3Dr2gZi-xKlvOKCjaY5xWY" />

	<?php wp_head(); ?>

	<?php if( is_page('price') ) : ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()) ; ?>/css/price.css">
	<?php elseif( is_page('adviser') ) : ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()) ; ?>/css/adviser.css">
	<?php elseif( is_page('english-agreement') ) : ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()) ; ?>/css/ai-translation.css">
	<?php elseif( is_page('accelerator') || is_page('immigration') ) : ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()) ; ?>/css/lp.css">
	<?php endif; ?>

	<!--<script src="https://use.fontawesome.com/ad45fe2624.js"></script>-->
    <script src="https://kit.fontawesome.com/7be5ecfb27.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()) ; ?>/css/ecl.css">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89510126-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-89510126-3');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P34N9C4');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class('drawer drawer--top'); ?> ontouchstart="">
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P34N9C4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<header class="g-header" role="banner">

		<div class="g-header__upper-cont">
			<p class="g-header__catchphrase">
				<strong>
					<a href="<?php echo esc_url( home_url() ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo.svg" alt="TandemSprint" width="50">
						<span>
							<span class="g-header__catchphrase__shoulder">EC・通販法務サービス</span>
							<span class="g-header__catchphrase__main">ファースト＆タンデムスプリント法律事務所</span>
						</span>
					</a>
				</strong>
			</p>
			<div class="g-header__search hide-sm">
				<!--<p class="g-header__en-link"><a href="http://japan-lawyer.com/">外資系企業の方へ　英語サイトはこちら</a></p>-->
				<?php get_search_form(); ?>
			</div>
			<div class="g-header__menu-sp hide-pc">
				<div class="g-header__sp-call">
					<?php /*<a href="tel:0344054611">*/ ?>
					<a href="<?php echo esc_url( home_url('/inquiry') ); ?>">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</a>
				</div>
				<div class="g-header__menu-sp__btn drawer-toggle drawer-hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!-- SP用メニュー-->
		<div class="g-header__menu-sp__cont drawer-nav" role="navigation">
			<ul class="drawer-menu">
				<li><a href="<?php echo esc_url( home_url('#profile') ); ?>">専門家紹介<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/adviser') ); ?>">顧問サービス内容<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/interview') ); ?>">依頼企業様事例<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/price') ); ?>">料金プラン<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/news') ); ?>">新着情報<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/report-download') ); ?>">レポート<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/column') ); ?>">コラム<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li><a href="<?php echo esc_url( home_url('/inquiry') ); ?>">お問い合わせ<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
				<li>
					<div class="g-header__search">
						<?php get_search_form(); ?>
					</div>
				</li>
			</ul>
			<!--<p class="g-header__menu-sp__en-link"><a href="http://japan-lawyer.com/">外資系企業の方へ　英語サイトはこちら</a></p>-->
		</div>
		<!-- PC用メニュー-->
		<nav class="g-header__nav hide-sm">
			<ul>
				<li class="profile-nav"><a href="<?php echo esc_url( home_url('#profile') ); ?>" >専門家紹介</a></li>
				<li><a href="<?php echo esc_url( home_url('/adviser') ); ?>" class="<?php if ( is_page('adviser') ) { echo ' active'; } ?>">顧問サービス内容</a></li>
				<li><a href="<?php echo esc_url( home_url('/interview') ); ?>" class="<?php if ( is_singular('interview') || is_post_type_archive('interview') ) { echo ' active'; } ?>">依頼企業様事例</a></li>
				<li><a href="<?php echo esc_url( home_url('/price') ); ?>" class="<?php if ( (is_page('price')) && (!is_parent_slug()) ) { echo ' active'; } ?>">料金プラン</a></li>
				<li><a href="<?php echo esc_url( home_url('/news') ); ?>" class="<?php if ( is_singular('news') || is_post_type_archive('news') ) { echo ' active'; } ?>">新着情報</a></li>
				<li><a href="<?php echo esc_url( home_url('/report-download') ); ?>" class="<?php if ( is_singular('reportdownload') || is_post_type_archive('reportdownload') ) { echo ' active'; } ?>">レポート</a></li>
				<li><a href="<?php echo esc_url( home_url('/column') ); ?>" class="<?php if ( is_single() && !is_singular('interview') &&is_singular('news') ||   is_page('column') ) { echo ' active'; } ?>">コラム</a></li>
				<li><a href="<?php echo esc_url( home_url('/inquiry') ); ?>" class="<?php if ( is_page('inquiry') ) { echo ' active'; } ?>">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<!-- //END global header -->
	
	<div class="ecl-sidebar"><a href="<?php echo esc_url( home_url('/inquiry') ); ?>"><span><i class="fa fa-comment-dots" aria-hidden="true"></i>お問い合わせ</span></a></div>
	<!--
	<div class="ecl-sidebar_2"><a href="<?php echo esc_url( home_url('/mailmagazine') ); ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i>メルマガ登録</span></a></div>
	-->