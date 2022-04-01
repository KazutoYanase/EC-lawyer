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
				<span class="font-lato font-lato__bold-i">Inquiry</span>
				<span class="small">お問い合わせ</span>
			</h1>
		</div>

		<div class="ecl-pg-inquiry">
			<div class="ecl-pg-inquiry-lead">
				必要事項をご入力の上、〔送信〕ボタンをクリックしてください。<br>
				原則として24時間以内に、弁護士からメールを返信させていただきます。
			</div>
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		
	</div>
	
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	  location = 'http://ec-lawyer.com/inquiry-thanks/'; 
	}, false );
	</script>

<?php get_footer(); ?>