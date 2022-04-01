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
				<span class="font-lato font-lato__bold-i">Mail Magazine</span>
				<span class="small">メルマガ登録</span>
			</h1>
		</div>

		<div class="ecl-pg-inquiry">
			<h1 class="section-title">メルマガ登録完了</h1>
			<p class="pamphlet__text">この度は、弁護士法人ファースト＆タンデムスプリント法律事務所のメルマガにご登録をいただき、ありがとうございました。<br></p>
		</div>
		
	</div>
	
	<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
	  location = 'https://pm-lawyer.com/inquiry-thanks/'; 
	}, false );
	</script>

<?php get_footer(); ?>