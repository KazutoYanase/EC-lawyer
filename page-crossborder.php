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
			<li><a href="#business">海外規制調査支援</a></li>
			<li><a href="#ecsite">英語版利用規約・<br class="pc">プライバシーポリシー作成・チェック</a></li>
			<li><a href="#terms">英文契約チェック</a></li>
			<li><a href="#policy">ウェブコンプライアンス<br class="pc">（GDPR・CCPA等）支援</a></li>
			<li><a href="#act">現地許認可取得支援</a></li>
		</ul>
	</div>
	
	<div class="ecl-pg-box">
		<h2><?php echo esc_html($page_title) ?></h2>
		<div class="ecl-pg-lead">
			実店舗を構える小売業と異なり、通販・EC事業には国境はありません。商品力さえあれば、海外の顧客に対して商品を販売することで、ビジネスを大きく拡大することができます。ファースト＆タンデムスプリント法律事務所では、国際ビジネスを支援してきた豊富な経験に基づく、越境ECにチャレンジするクライアント企業様を応援します。
		</div>
		<div class="ecl-pg-list">
			<ul>
				<li id="business">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>海外規制調査支援</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						越境ECを行うためには、相手国のルールを遵守する必要があります。近年の越境ECの増加に伴い、各国とも越境ECについて独自のルールを策定し始めています。ファースト＆タンデムスプリント法律事務所では、現地の弁護士等と協力し、越境ECに必要な相手国の規制を調査することが可能です。
					</div>
				</li>
				<li id="ecsite">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>英語版利用規約・<br>プライバシーポリシー作成・<br>チェック</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						越境ECを行うためには、現地のルールに基づき、現地の言葉で利用規約やプライバシーポリシーを準備する必要があります。ファースト＆タンデムスプリント法律事務所では、英語版の利用規約やプライバシーポリシー等を作成いたします。
					</div>
				</li>
				<li id="terms">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>英文契約チェック</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						越境ECを行うためには、現地の企業と、英語でさまざまな契約を結ぶ必要があります（広告・マーカティングに関する契約、売買契約・物流に関する契約等）。ファースト＆タンデムスプリント法律事務所では、多くの海外取引をご支援してきた経験に基づき、英文契約であっても、クライアント企業様のリスクを減らし、できる限り有利な条項となるように、迅速にアドバイスをいたします。
					</div>
				</li>
				<li id="policy">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>ウェブコンプライアンス<br>（GDPR・CCPA等）支援</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						アメリカや欧州への越境ECでは、現地の個人情報保護のための規制（GDPR・CCPA等）を遵守する必要があります。ファースト＆タンデムスプリント法律事務所では、ウェブサイトをこれらの規制に対応させるためのアドバイスをご提供しています。
					</div>
				</li>
				<li id="act">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>現地許認可取得支援</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						越境ECでは、商品や地域によっては現地の許認可を取得することが必要な場合があります。ファースト＆タンデムスプリント法律事務所では、現地の弁護士等と連携し、現地の許認可取得を支援しています。
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
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__golfp.png" alt="株式会社ゴルフパートナー"></div>
					<dl>
						<dt>株式会社ゴルフパートナー</dt>
						<dd>
							所在地：東京都千代田区神田錦町3丁目20番地 錦町トラッドスクエア 13F<br>
							設立：1999年6月30日<br>
							資本金：1億円<br>
							上場：ゼビオグループ、東証一部<br>
							売上高：348億円<br>
							事業内容：総合ゴルフショップ「ゴルフパートナー」フランチャイズチェーン事業、「フェスティバルゴルフ」事業、EC事業
						</dd>
					</dl>
				</li>
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
			</ul>
		</div>
	</div>

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