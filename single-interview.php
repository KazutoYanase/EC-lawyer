<?php get_header(); ?>

	<!-- bread crumbs -->
	<?php //breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php //get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

	<?php while(have_posts()) : the_post(); ?>
	<div class="ecl-pg">

		<div class="ecl-pg-title">
			<h1 class="section-title">
				<span class="font-lato font-lato__bold-i">Interview</span>
				<span class="small">依頼企業様事例</span>
			</h1>
		</div>
		
		<div class="ecl-pg-interview">
			
			<div class="ecl-pg-interview-co">
				<div class="ecl-pg-interview-co-inner">
					<div class="ecl-pg-interview-co-logo"><img src="<?php echo esc_url(get_field('interview_co_logo')) ?>"></div>
					<div class="ecl-pg-interview-co-data">
						<dl>
							<dt><?php the_title(); ?></dt>
							<dd><?php echo wp_kses(get_field('interview_co_data'), wp_kses_allowed_html( 'post' )); ?></dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-interview-main">
				<div class="ecl-pg-interview-main-inner">
					<h2><?php echo wp_kses(get_field('interview_main_lead'), wp_kses_allowed_html( 'post' )); ?></h2>
					<div class="ecl-pg-interview-main-lead"><?php echo wp_kses(get_field('interview_main_body'), wp_kses_allowed_html( 'post' )); ?></div>
				</div>
			</div>
			
			<?php if(get_field('interview_project')): ?>
			<div class="ecl-pg-interview-project">
				<div class="ecl-pg-interview-project-inner">
					<h2>プロジェクト概要</h2>
					<ul>
						<?php while(the_repeater_field('interview_project')): ?>
						<li>
							<dl>
								<dt><?php echo wp_kses(get_sub_field('interview_project_title'), wp_kses_allowed_html( 'post' )); ?></dt>
								<dd><?php echo wp_kses(get_sub_field('interview_project_body'), wp_kses_allowed_html( 'post' )); ?></dd>
							</dl>
						</li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
			<?php endif; ?>
			
			<div class="ecl-pg-interview-story">
				<h2>STORY</h2>
				<div class="ecl-pg-interview-story-inner">
					<div class="ecl-pg-interview-story-img"><img src="<?php echo esc_url(get_field('interview_story_img')) ?>"></div>
					<div class="ecl-pg-interview-story-body">
						<dl>
							<dt><?php echo wp_kses(get_field('interview_story_title'), wp_kses_allowed_html( 'post' )); ?></dt>
							<dd><?php echo wp_kses(get_field('interview_story_body'), wp_kses_allowed_html( 'post' )); ?></dd>
						</dl>
					</div>
				</div>
			</div>
			
			<?php if(get_field('interview_box')): while(the_repeater_field('interview_box')): ?>
			<div class="ecl-pg-interview-box">
				<div class="ecl-pg-interview-box-inner">
					<h2><?php echo wp_kses(get_sub_field('interview_box_title'), wp_kses_allowed_html( 'post' )); ?></h2>
					<?php echo wp_kses(get_sub_field('interview_box_body'), wp_kses_allowed_html( 'post' )); ?>
				</div>
			</div>
			<?php endwhile; endif; ?>
				
		</div>
		
	</div>
	<?php endwhile; ?>

<?php get_footer(); ?>