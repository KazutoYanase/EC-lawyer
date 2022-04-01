<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package EC Lawyer
 */

get_header(); ?>

<?php
$page = get_post( get_the_ID() );
$page_slug = $page->post_name;
$page_title = $page->post_title;
?>

<div class="ecl-pg">

	<div class="ecl-pg-header" style="background-image:url(<?php echo esc_url( get_template_directory_uri()) ; ?>/img/pg_bg_<?php echo esc_html($page_slug) ?>.jpg)">
		<h1>誹謗中傷・<br class="sp">風評被害対策</h1>
	</div>
	
	<div class="ecl-pg-nav">
		<ul>
			<li><a href="#business">商品に関するレビュー被害<br class="pc">・ネガティブレビュートラブル対応</a></li>
			<li><a href="#ecsite">会社に対する風評被害<br class="pc">・悪質レビュートラブル対応</a></li>
			<li><a href="#risk">悪質な口コミを<br class="pc">放置することのリスク</a></li>
			<li><a href="#supportex">当事務所でのサポート事例</a></li>
		</ul>
	</div>
	
	<div class="ecl-pg-box">
		<h2><?php echo esc_html($page_title) ?></h2>
		<div class="ecl-pg-lead">
			EC事業を行ううえで、売上に大きく影響を及ぼすのが「クチコミ」です。自社の製品を利用していただいたユーザーの方からの声によって自社製品の売上が大幅に増加する効果が得られる可能性もありますが、マイナスな評価を書きこまれてしまった場合にはEC事業では致命的となってしまいます。<br>
			ファースト＆タンデムスプリント法律事務所では、悪質な書き込みの削除は発信者の情報特定を行うことで、クライアント企業様を守るために尽力いたします。
		</div>
		<div class="ecl-pg-list">
			<ul>
				<li id="business">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>商品に関する<br class="sp">レビュー被害・<br>ネガティブレビュートラブル対応</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						自社で展開している商品に対する事実ではない悪質なレビューを放置しておくことはEC事業を行ううえでも大きなリスクがあります。ファースト＆タンデムスプリント法律事務所では、商品に対する自社サイトやポータルサイトへの悪質な書き込みに対する削除依頼を実施、その後も継続して被害に遭っている場合には書き込みをした人物の特定するための発信者情報開示請求の対応が可能です。
					</div>
				</li>
				<li id="ecsite">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>会社に対する風評被害・<br>悪質レビュートラブル対応 </dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						商品への悪質なレビューが継続的に発生していると、さらに発展して会社への悪質なレビュー・書き込みをされてしまうケースも少なくありません。近年は転職サイト等の発達により退職者による書き込みも増加しています。ファースト＆タンデムスプリント法律事務所では、そういった会社に対する風評被害についても対応が可能です。削除対応を行うことで売上のみではなく、優秀な人材の獲得にも繋がります。
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="ecl-pg-box" id="risk">
		<h3><span>悪質な口コミを<br class="sp">放置することのリスク</span></h3>
		<div class="ecl-pg-rumourslist">
			<ul>
				<li>クチコミをみたことで購入の見送り、結果として売上が減少してしまう</li>
				<li>情報収集時に悪いクチコミを見られることで企業のブランドイメージが悪化</li>
				<li>書き込みやクチコミでの悪評によるビジネスへの悪影響</li>
			</ul>
		</div>
	</div>

	<div class="ecl-pg-box" id="supportex">
		<h3><span>当事務所でのサポート事例</span></h3>
		<div class="ecl-pg-rumourslist">
			<ul>
				<li>ここにサポート事例のテキストが入ります。テキストが入ります。</li>
				<li>ここにサポート事例のテキストが入ります。テキストが入ります。</li>
				<li>ここにサポート事例のテキストが入ります。テキストが入ります。</li>
			</ul>
		</div>
	</div>

<!--
	<div class="ecl-pg-box section-wrap column archive">
		<div class="section-inner">
			<h3><span>Column</span></h3>
			
			<?php
			$args =	array(
				'category_name'		=> $page_slug,
				'posts_per_page'	=> 6,
				'orderby'			=> 'date',
				'order'				=> 'DESC',
				'post_type'			=> 'post',
				'post_status'		=> 'publish',
				'caller_get_posts'	=> 1,
			);
			$wp_query = new WP_Query($args);
			$wrapList = 1;
			?>
	
			<ul class="column__list">
	
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			
			<?php if ( $wrapList % 3 == 1 && $wrapList != 1 ): ?>
			</ul>
			<ul class="column__list">
			<?php endif; ?>
	
				<li>
					<a href="<?php the_permalink() ?>">
						<div class="column__list__text">
							<time class="font-lato"><?php the_time( 'Y.m.d' ); ?></time>
							<?php
								$category = get_the_category();
								$end = end( $category );
								if($category) :
							?>
							<p class="column__list__category">
								<?php
									foreach ($category as $c){
										if( $c === $end ) {
											echo $c->cat_name;
										} else {
											echo $c->cat_name.'・';
										}
									}
								?>
							</p>
							<?php endif; ?>
							<p class="column__list__title"><?php the_title(); ?></p>
						</div>
						<div class="column__list__img">
							<?php the_post_thumbnail( 'middle-feature', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
							<span class="column__list__arrow hide-sm">
								<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
							<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
						</svg>
							</span>
						</div>
					</a>
				</li>
	
				<?php $wrapList++;  ?>
	
				<?php endwhile; ?>
	
			</ul>
			<div class="ecl-pg-more"><a href="<?php echo esc_url( home_url('/'.$page_slug.'/column') ); ?>">コラム一覧</a></div>
-->

<?php /* ?>-=-=-=-=-=-差し込み箇所-=-=-=-=-=-<?php */ ?>
			<div class="ecl-pg-to_form">
				<div class="to_form-title">
					ご相談の流れ
				</div>
				<ol>
					<li>平日・休日・時間帯問わず、いつでも、<a href="<?php echo esc_url( home_url('/inquiry/') ); ?>">メールフォーム</a>に必要事項をご記入の上、送信してください。</li>
					<li>原則として24時間以内に、当事務所からメールを返信させていただきます。</li>
					<li>貴社の現状、ご要望を詳しくお聞きして、法律上の問題点を整理した上で、見通しや、解決の方法について、具体的にアドバイスいたします。</li>
				</ol>
				<div class="btn_wrap">
					<div class="orangebtn">
						<a href="<?php echo esc_url( home_url('/inquiry/') ); ?>">
							ご相談はこちら →
						</a>
					</div>
				</div>
			</div>
<?php /* ?>-=-=-=-=-=-差し込み終わり-=-=-=-=-=-<?php */ ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>