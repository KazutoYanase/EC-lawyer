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
		<h1><?php echo esc_html($page_title) ?></h1>
	</div>
	
	<div class="ecl-pg-nav">
		<ul>
			<li><a href="#business">契約チェック</a></li>
			<li><a href="#ecsite">規約チェック</a></li>
			<li><a href="#terms">広告チェック</a></li>
		</ul>
	</div>
	
	<div class="ecl-pg-box">
		<h2><?php echo esc_html($page_title) ?></h2>
		<div class="ecl-pg-lead">
			通販・EC事業を行うためには、仕入れ・販売・広告・物流をはじめ、様々な業者と契約をする必要があります。また、販売の際には、多数の顧客との法律関係を定める規約も必要です。さらに、販売促進のためには、広告やユーザーに対する特典・キャンペーン施策なども必要です。ファースト＆タンデムスプリント法律事務所では、これらの契約・規約・広告が法律を守り、クライアント企業様にとって有利となるよう、迅速にチェックできる体制を整えています。
		</div>
		<div class="ecl-pg-list">
			<ul>
				<li id="business">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>契約チェック</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業を行うためには、仕入れ・販売・広告・物流をはじめ、様々な業者と契約をする必要があります。ファースト＆タンデムスプリント法律事務所で多くチェックをお受けしている契約としては、例えば次のようなものがあります。仕入れのための売買契約、倉庫の賃貸借契約、物流業者との業務委託契約、広告制作会社との契約、タレント事務所との広告出演契約、広告代理店との広告運用契約、、ECサイト運営事業者との業務委託契約、外部スタッフとの業務委託契約、従業員採用のための人材紹介契約、従業員との雇用契約、各種業者との秘密保持契約など。
					</div>
				</li>
				<li id="ecsite">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>規約チェック</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業を運営するためには、利用規約・プライバシーポリシー・特商法に基づく表示が必須です。ファースト＆タンデムスプリント法律事務所では、利用規約については民法・消費者契約法、プライバシーポリシーについては個人情報保護法、特商法に基づく表示については特定商取引法に基づいて、適切にチェックとアドバイスをいたします。
					</div>
				</li>
				<li id="terms">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>広告チェック</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業において販売を促進するためには、広告やユーザーに対する特典・キャンペーン施策なども必要です。これらは、効果的に行うことで売上を伸ばすことができますが、同時に、景品等表示法、著作権法、薬機法を遵守しなければ、行政や他社との関係で、法律問題とない、継続ができなくなるリスクがあります。<br>
						ファースト＆タンデムスプリント法律事務所では、ランディングページ（LP）やSNS広告などの表現をはじめ、リスティングやPPC広告、その他キャンペーンに関する表現まで、ビジネスのスピードを落とさないよう迅速にチェックとアドバイスが可能です。
					</div>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="ecl-pg-box">
		<h3><span>このサービスをご利用の企業様</span></h3>
		<div class="ecl-pg-colist">
			<ul>
				<li>
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__fronti.png" alt="株式会社フロンティア"></div>
					<dl>
						<dt>株式会社フロンティア</dt>
						<dd>
							所在地：福岡県福岡市中央区天神2丁目3番36号 ibb fukuoka<br>
							設立：平成14年1月<br>
							資本金：3,000万円<br>
							上場：東京証券取引所　TOKYO　PRO　Market<br>
							売上高：348億円<br>
							事業内容：自動車用品製造・輸入・販売、商品企画開発・インターネット通販事業
						</dd>
					</dl>
				</li>
				<li>
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__herbal.png" alt="株式会社ハーバルアイ"></div>
					<dl>
						<dt>株式会社ハーバルアイ</dt>
						<dd>
							所在地：<br>
							東京本社<br>
							東京都品川区西五反田7-5-8 Mi Casa4階<br>
							福岡オフィス<br>
							福岡県福岡市中央区天神三丁目1番12号北天神ビル6階<br>
							設立：平成27年12月<br>
							資本金：2362万5000円<br>
							事業内容：医薬品・指定医薬部外品・健康食品の通信販売及び店舗販売
						</dd>
					</dl>
				</li>
			</ul>
		</div>
	</div>

	<div class="column ecl-pg-box">
		<div class="section-inner">
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
		</div>
	</div>
	
</div>

<?php get_footer(); ?>