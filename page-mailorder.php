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
			<li><a href="#business">通販・EC事業<br class="pc">ビジネスコンサルティング</a></li>
			<li><a href="#ecsite">利用規約作成</a></li>
			<li><a href="#terms">プライバシーポリシーの作成</a></li>
			<li><a href="#policy">特商法に基づく表示の作成</a></li>
			<li><a href="#act">契約書作成</a></li>
		</ul>
	</div>
	
	<div class="ecl-pg-box">
		<h2><?php echo esc_html($page_title) ?></h2>
		<div class="ecl-pg-lead">
			消費者がインターネットで買い物をしたりサービスを受けたりすることが当然になった今日では、企業が発展していくためにはEC（E-Commerce）に関わるビジネスでの競争力が勝負です。<br>
			ファースト＆タンデムスプリント法律事務所では、これまでに、例えば店舗型小売業を行っていた企業がウェブ通販を始める場合などのコンサルティングに携わってきました。これらの経験を活かし、EC事業のビジネスコンサルティング、ECサイト作成の法務コンサルティング、利用規約作成、プライバシーポリシーの作成、特商法に基づく表示の作成など、通販・EC事業に参入する企業様の総合的なご支援が可能です。
		</div>
		<div class="ecl-pg-list">
			<ul>
				<li id="business">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>通販・EC事業<br>ビジネスコンサルティング</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業への参入にあたっては、ビジネスモデル自体が適法なものであるかどうかを十分に確認することが重要です。法律的な検討が不十分なまま通販・EC事業を進めてしまうと、事業の成長速度が遅くなったり、継続ができなくなったりするリスクがあります。ファースト＆タンデムスプリント法律事務所では、このような法律的な観点に加え、顧客の獲得のしやすさ（営業面）、利益の確保のしやすさ（収益面）、法的リスクの少なさ（コンプライアンス面）から最善のスキームを設計できるよう、コンサルティングを行います。
					</div>
				</li>
				<li id="ecsite">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>利用規約作成</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業においては、会社と多数の顧客との間で合意される法律関係を記載した利用規約が必要です。利用規約は、ビジネスモデルに合わせてカスタマイズされた適切なものが準備されていると、民法などの法律よりも有利な条件を得られたり、顧客からのクレームに速やかに対応できたりします。他方で、テンプレートや他社の利用規約を真似した利用規約で、自社のビジネスの実態に合わないものを使用していると、いざという時に自社を防御できず事業の継続が危うくなります。<br>
						ファースト＆タンデムスプリント法律事務所では、多くの通販・EC事業の利用規約を作成してきた経験のみならず、これまでのトラブル事例なども踏まえて、企業様の事業内容に沿った利用規約を作成させていただきます。
					</div>
				</li>
				<li id="terms">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>プライバシーポリシーの作成</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業では、顧客の個人情報を多く取り扱います。個人情報は、顧客への商品・サービスの提供のために必要なことはもちろんですが、個人情報を含むビッグデータを活用することで、企業はマーケティングの効果を上げることや、更なる事業の拡大が可能になります。<br>
						もっとも、個人情報の取扱いについては、個人情報保護法やガイドラインに従った適切かつ慎重な準備が必要になります。これを怠ると、法令違反の問題のみならず、顧客からの信頼を失い、ビジネスの発展が阻害されかねません。<br>
						ファースト＆タンデムスプリント法律事務所では、これまで多くの企業様のプライバシーポリシーを作成してきました。また、個人情報に関連するクレーム対応のご相談や、取得したビッグデータを活かした次のビジネス戦略のご相談にも多く対応してきました。その経験を活かし、通販・EC事業のモデルに応じて、守りと攻めの両方に役立つプライバシーポリシーを作成させていただきます。
					</div>
				</li>
				<li id="policy">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>特商法に基づく表示の作成</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						特定商取引法に基づく表示とは、「通信販売に関する広告を行う際に表示すべき項目」として同法が指定している事項をまとめて表示するためのものです。通販・EC事業におけるLP（ランディングページ）は、広告の機能も有するため、これを表示する必要があります。<br>
						具体的には、対価・送料、対価の支払時期と支払方法、商品の引き渡し時期・サービスの提供時期などをはじめ、１１の項目について表示します。この表示があることで、法令が遵守されるのみならず、顧客は安心してサービスを利用できるため、サイトの信頼度も上がります。<br>
						ファースト＆タンデムスプリント法律事務所では、これまで多数の特商法に基づく表示の作成を行ってきた経験を活かし、適正な特商法に基づく表示の作成をさせていただきます。
					</div>
				</li>
				<li id="act">
					<div class="ecl-pg-list-label">
						<dl>
							<dt>契約書作成</dt>
							<dd></dd>
						</dl>
					</div>
					<div class="ecl-pg-list-body">
						通販・EC事業を行うためには、仕入れ・販売・広告・物流をはじめ、様々な業者と契約をする必要があります。その際、ビジネスのスピードの観点からは、先方から提示された契約書をチェックして書き換えるのが最速ですが、他方で、自社に有利な契約書を作成して、先方に提示する方法もあります。ファースト＆タンデムスプリント法律事務所では、貴社基準のオリジナル契約フォーマットを作成し、貴社が自社に有利な契約書を提示して交渉をスタートできるよう、ご支援いたします。
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
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__tattva.png" alt="株式会社tattva"></div>
					<dl>
						<dt>株式会社tattva</dt>
						<dd>
							所在地：東京都渋谷区道玄坂1-21-1 渋谷ソラスタ 3F<br>
							資本金：4億5999万2000円（資本準備金含む）<br>
							設立：2011年3月<br>
							事業内容：自社ブランドの商品の企画・販売、EC事業
						</dd>
					</dl>
				</li>
				<li>
					<div class="ecl-pg-colist-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo__twig.png" alt="株式会社ツイギー"></div>
					<dl>
						<dt>株式会社ツイギー</dt>
						<dd>
							所在地：東京都渋谷区神宮前3-35-7-001<br>
							設立：1998年5月<br>
							事業内容：ヘアサロンの運営、ヘアプロダクトの企画販売、EC事業
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