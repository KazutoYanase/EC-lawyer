<?php get_header(); ?>


	<!-- breadcrumbs -->
	<?php breadcrumb(); ?>
	<!-- //ENDbreadcrumbs -->

	<!-- ERROR -->
	<section class="error-info">

		<div class="section-inner">
		<h1 class="font-lato font-lato__b">
			404 ERROR
		</h1>

		<div class="error-info__text">
			<p>
				申し訳ありません。お探しのページは見つかりませんでした。<br>
				ページが削除されたか、移動された可能性があります。<br>
				下記リンクからページをお探しください。
			</p>
		</div>

		<div class="btn">
			<a href="<?php echo esc_url( home_url() ); ?>">
				トップページ
				<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
					<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
				</svg>
			</a>
		</div>

	</section>
	<!-- //END ERROR -->

<?php get_footer(); ?>