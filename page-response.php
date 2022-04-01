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
			<li><a href="#business">消費者庁対応支援</a></li>
			<li><a href="#ecsite">都道府県薬務課対応支援</a></li>
			<li><a href="#terms">許認可取得（薬機法等）</a></li>
			<li><a href="#policy">債権回収</a></li>
		</ul>
	</div>
	
	<div class="ecl-pg-box">
		<h2><?php echo esc_html($page_title) ?></h2>
		<div class="ecl-pg-lead">
			通販・EC事業では、消費者庁や都道府県薬務課とのやりとりが発生する場合があります。薬機法に基づく許認可が必要になる場合もありますし、消費者からの苦情などがあれば、これらの行政機関から連絡があり、対応を迫られることもあります。ファースト＆タンデムスプリント法律事務所では、豊富な行政対応の実務経験を有しており、適切な行政対応をアドバイスできます。<br>
			また、ファースト＆タンデムスプリント法律事務所では、通販・EC事業を運営する上で生じる売掛金債権の回収を行う体制を整えております。
		</div>
		<div class="ecl-pg-list">
			<ul>
				<li id="business">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>消費者庁対応支援</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業では、多数の消費者を顧客とするため、消費者保護のための様々な行政法規に対応する必要があります。例えば、繊維製品・合成樹脂加工品・家庭電気製品・雑貨などについては、家庭用品品質表示法の関係で消費者庁のチェックがあります。また、消費者からの苦情などがあれば、消費者庁から連絡があり、対応を迫られることもあります。ファースト＆タンデムスプリント法律事務所では、豊富な消費者庁対応の実務経験を有しており、適切な行政対応をアドバイスできます。
					</div>
				</li>
				<li id="ecsite">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>都道府県薬務課対応支援</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						化粧品やサプリメントなどについては、薬機法の関係で都道府県薬務課のチェックがあります。通販・ECサイトのLPなどは定期的にチェックが行われており、改善について都道府県薬務課から指摘を受けることもあります。ファースト＆タンデムスプリント法律事務所では、豊富な薬務課対応の実務経験を有しており、適切な行政対応をアドバイスできます。
					</div>
				</li>
				<li id="terms">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>許認可取得（薬機法等）</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						化粧品やサプリメントなどについては、薬機法の関係で許認可が必要になる場合があります。具体的には、医薬部外品、医薬品、医療機器等を輸入したり販売したりするためには、あらかじめそれぞれの種類に応じた「製造販売業」の許可と、「製造業」の許可（医療機器および体外診断用医薬品の場合は登録）を行わなければなりません。ファースト＆タンデムスプリント法律事務所では、これらの許認可申請を支援しています。
					</div>
				</li>
				<li id="policy">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>債権回収</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業では、多数の売掛金債権が発生し、場合によっては回収が難しいケースもあります。少額ではあっても、数が多くなると、企業経営を圧迫する場合があります。ファースト＆タンデムスプリント法律事務所では、このような債権回収について実績があり、クライアント企業様の業務フローに応じてご支援が可能です。
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
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__sakura.png" alt="さくらフォレスト株式会社"></div>
					<dl>
						<dt>さくらフォレスト株式会社</dt>
						<dd>
							所在地：福岡県福岡市中央区警固2-12-23<br>
							設立：平成26年4月1日<br>
							資本金：1,000万円<br>
							売上高：70億円<br>
							事業内容：サプリメント通信販売、WEB企画・販売戦略・商品企画、コンサルティン　　グ、コールセンター、不動産、宿泊業
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