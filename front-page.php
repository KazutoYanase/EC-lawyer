<?php get_header(); ?>

<!-- main visual -->
<section class="top-main-visual">
	<div class="top-main-visual__upper">
		<div class="top-main-visual__inner">
			<h1 class="top-main-visual__title">
				<div id="rev-1">
					<span class="font-lato font-lato__i">ECビジネスの｢攻め｣と｢守り｣を</span>
				</div><br>
				<div id="rev-2" class="top-main-visual__title__em">
					弁護士がサポート
				</div>
			</h1>
			<div class="hinagata_dl_banner">
				<div>
					<a href="https://gihyo.jp/book/2023/978-4-297-13265-1" target="_blank"  rel="noopener noreferrer">
						<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/banner_book.jpg">
					</a>
				</div>
				<div style="padding-top: 5px;">
					<a href="<?php echo esc_url( home_url('/report-download/') ); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/banner_dl.jpg">
					</a>
				</div>
			</div>
			<div class="seminar_banner">
				<a href="<?php echo esc_url( home_url('/lp/') ); ?>" target="_blank">
					<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/bnr_seminar.png">
				</a>
			</div>
		</div>
	</div>
	<div class="top-main-visual__list">
		<ul>
			<li>
				<a href="<?php echo esc_url( home_url('/mailorder/') ); ?>">
					<span class="top-main-visual__list__shoulder">ビジネスモデルを転換する</span>
					通販・EC事業参入
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url('/check/') ); ?>">
					<span class="top-main-visual__list__shoulder">守りを固めて果敢に攻める</span>
					契約・規約・広告チェック
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url('/response/') ); ?>">
					<span class="top-main-visual__list__shoulder">トラブルを回避する</span>
					行政対応・許認可・債権回収
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url( home_url('/crossborder/') ); ?>">
					<span class="top-main-visual__list__shoulder">世界市場に乗り出す</span>
					越境EC
				</a>
			</li>
		</ul>
	</div>
	<!--<div class="hide-pc">
			<p class="top-main-visual__en-link"><a href="http://japan-lawyer.com/">外資系企業の方へ　英語サイトはこちら</a></p>
		</div>-->
</section>
<!-- //END main visual -->


<div class="top-page-contents">

	<!-- advisory companies -->
	<!--section class="advisory-com">
			<h2 class="advisory-com__title">顧問企業</h2>
			<div class="swiper-container">
				<ul class="swiper-wrapper">
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_takahashi-group@2x.png" alt="TAKAHASHI GROUP" width="102" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_golf-partners@2x.png" alt="GOLF PARTNERS" width="162" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_frontier@2x.png" alt="frontier" width="162" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_skydisc@2x.png" alt="SKYDISC" width="148" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_sakura-forest@2x.png" alt="SAKURA FOREST" width="162" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_twiggy@2x.png" alt="twiggy" width="117" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_kanpou-shouyaku-kenkyujo@2x.png" alt="漢方生薬研究所" width="96" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_xas@2x.png" alt="XAS" width="96" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_encourage-inc@2x.png" alt="Encourage Inc" width="154" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_bl-dining@2x.png" alt="BL DINING" width="96" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_esta@2x.png" alt="Esta" width="96" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_supoga@2x.png" alt="スポガ" width="121" height="60"></li>
					<li class="swiper-slide"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/logo_arcfield-inc@2x.png" alt="Arcfield Inc" width="102" height="60"></li>
				</ul>
				<div class="swiper-button-prev"></div>
    		<div class="swiper-button-next"></div>
			</div>
		</section>
		<!-- //END advisory companies -->

	<!-- side floating -->
	<?php get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->

	<!-- about service -->
	<section class="section-wrap ecl-client">
		<div class="section-inner">
			<div class="ecl-client-img">
				<ul>
					<li class="label"><span>EC 主要顧問企業</span></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/client_1.png"></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/client_2.png"></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/client_3.jpg"></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/client_4.jpg"></li>
				</ul>
			</div>
			<div class="ecl-client-txt">
				<p>EC ビジネスに取り組む小売業の皆様、以下のような課題はありませんか。</p>
				<ul>
					<li>EC への取り組みを急加速させる必要があるが、法的に何をクリアすればいいか分からない</li>
					<li>キャンペーンや広告、DM など「攻め」の取り組みをするときに、景品表示法や個人情報保護法、著作権法などの法律問題をクリアしているのか不安</li>
					<li>Webサイトに掲載している規約、特定商取引法に基づく表示、プライバシーポリシーなどが、ビジネスの実態と合っているのか、会社の「守り」になっているのか不安</li>
				</ul>
				<p>EC ビジネスは、攻めも守りも、法律が重要に関わってきます。</p>
				<p>とはいえ、法律の専門家に相談しようにも、EC ビジネスに詳しい法律の専門家が周りにいない。相談しても、難しい法律 の話ばかりで、結局具体的に何をすればいいのかわからない。できない理由ではなく、できる方法を教えてもらいたい。 皆様はそのような悩みを抱えていると思います。</p>
				<p>弁護士法人ファースト&タンデムスプリント法律事務所は、EC ビジネスの攻めと守りをサポートします。</p>
			</div>
		</div>
		<div id="prof_index"></div>
	</section>
	<!-- //END about service -->

	<!-- column -->
	<section class="section-wrap column ecl-column">
		<div class="section-inner">
			<!--<h2 class="section-title">
					<span class="font-lato font-lato__bold-i">Column</span>
					<span class="small">コラム</span>
				</h2>-->


			<ul class="column__list">
				<?php
					$wrapList = 1;

					$cat_id_01 = get_category_by_slug("report");
					$cat_id_01 = $cat_id_01->cat_ID;

					$args =	array(
							'posts_per_page'   => 3,
							'post_type'        => 'post',
							'category__not_in' => array($cat_id_01)
					);
					$wp_query = new WP_Query($args);
					while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

				<?php if ( $wrapList % 3 == 1 && $wrapList != 1 ): ?>
			</ul>
			<ul class="column__list">
				<?php endif; ?>

				<?php include('assets/column-post-list.php');?>

				<?php $wrapList++;  ?>
				<?php
					endwhile;
					wp_reset_postdata();
				?>

			</ul>

			<div class="btn">
				<a href="<?php echo esc_url( home_url('/column') ); ?>">
					コラム一覧
					<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
						<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z" />
					</svg>
				</a>
			</div>
		</div>
	</section>
	<!-- //END column -->

	<!-- about service -->
	<section class="about-service ecl-about-service">
		<div class="section-inner">
			<div class="about-service__header">
				<h2 class="about-service__header__title">
					<span>
						国内通販から越境ECまで、<br>
						ECビジネスを<br>
						ワンストップで支援！
					</span>
				</h2>
				<p class="about-service__header__text">
					<span>＜ビジネスをEC対応にして事業を拡大する４つのポイント＞</span>
					消費者がインターネットで買い物をしたりサービスを受けたりすることが主流になった今日では、企業の生き残りはEC（E-Commerce）に関わるビジネスでの競争力の有無にかかっています。また、ECには国境がなく、日本企業がビジネスを国際化して事業を拡大するためにも、ECへのビジネスモデルの転換が必要です。私たちは、①通販・EC事業参入、②契約・規約・広告チェック、③行政対応・許認可・債権回収、④越境ECの４つの支援メニューにより、クライアント企業様のEC事業の拡大を加速します。
				</p>
			</div>
		</div>
		<div id="prof_index"></div>
	</section>
	<!-- //END about service -->


	<div class="btn-area">
		<a href="<?php echo esc_url( home_url('/price/') ); ?>">
			当事務所の顧問契約費用はこちら
			<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
				<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z" />
			</svg>
		</a>
	</div>


	<!-- Featuurs -->
	<section class="section-wrap ecl-features">
		<div class="section-inner">
			<h2 class="section-title">
				<span class="font-lato font-lato__bold-i">Features</span>
				<span class="small">当事務所の3つの特徴</span>
			</h2>
			<div class="ecl-features-list">
				<ul>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/features_1.png" alt="著名なECシステム企業の顧問先多数"></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/features_2.png" alt="できない理由ではなく、できる方法を考えてアド橋う"></li>
					<li><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/features_3.png" alt="相談方法はビジネスチャットとビデオ会議システム"></li>
				</ul>
			</div>
			<div class="ecl-features-exp">
				<ul>
					<li>
						<dl>
							<dt>■ 多数の著名なECシステム企業が選ぶ法律事務所</dt>
							<dd>
								当法律事務所は、ITビジネスと海外ビジネスに特化した顧問契約サービスを提供し、EC・通販法務には特に高い知見と経験を有しています。<br>
								<br>
								「futureshop」の株式会社フューチャーショップ様、「助ネコ」の株式会社アクアリーフ様、「CROSS MALL」の株式会社アイル様など、著名なECシステム企業が多数、当法律事務所の顧問契約サービスを利用されています。
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>■ ビジネスを加速させる</dt>
							<dd>
								企業の皆様は、そのビジネスのリスクは何なのか、リスクが発生する可能性はどれくらいあるのか、リスクを無くしたり減らしたりする方法はないのか、結局会社としてどうすれば良いのか、どの方法が一番オススメなのか、そこまで踏み込んだアドバイスを、弁護士に求めています。<br>
								当法律事務所は、できない理由を探すのではなく、できる方法を考えます。クライアントのビジネスを加速させるために、知恵を絞り、責任をもってアドバイスをします。
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>■ 全国どこからでも相談できる</dt>
							<dd>
								皆様の周りには、ECビジネスに詳しい法律の専門家はいますか。地元にそのような専門家がいなくてお困りではないですか。<br>
								当法律事務所は、クライアントからの相談に、ビジネスチャットツール「Chatwork」とビデオ会議システムで対応することで、日本各地に所在する皆様の相談に対応できる体制を備えています。
							</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- //END Featuurs -->

	<!-- interview -->
	<?php
		$args = array(
			'post_type' => 'interview',
			'numberposts' => 4
		);
		$news_posts = get_posts( $args );
		if( $news_posts ) :
		?>
	<section class="section-wrap section-bg ecl-interview">
		<div class="section-inner">
			<h2 class="section-title">
				<span class="font-lato font-lato__bold-i">Case</span>
				<span class="small">依頼企業様事例</span>
			</h2>
			<ul class="ecl-interview-list">
				<?php foreach( $news_posts as $post ) : setup_postdata( $post ); ?>
				<li><a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail( 'full' ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
	<?php endif; wp_reset_postdata(); ?>
	<!-- //END interview -->

	<!-- member profile -->
	<section class="profile" id="profile">

		<div class="ecl-profile">
			<div class="ecl-profile-wrap">
				<div class="ecl-profile-box">
					<div class="ecl-profile-box-header">
						<div class="ecl-profile-box-header-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_ono.png"></div>
						<div class="ecl-profile-box-header-data">
							<p class="font-lato font-lato__i ecl-profile-box-header-data-ttl">Profile</p>
							<p class="ecl-profile-box-header-data-post">弁護士</p>
							<p class="ecl-profile-box-header-data-name">小野 智博</p>
							<p class="ecl-profile-box-header-data-post">東京弁護士会所属</p>
						</div>
					</div>
					<div class="ecl-profile-box-message">
						弁護士法人ファースト＆タンデムスプリント法律事務所　代表弁護士<br>
						慶應義塾大学環境情報学部、青山学院大学法科大学院卒業。企業法務、国際取引、知的財産権、訴訟に関する豊富な実務経験を持つ。日本及び海外の企業を代理して商取引に関する法務サービスを提供している。<br>
						2008年に弁護士としてユアサハラ法律特許事務所に入所。2012年に米国カリフォルニア州に赴任し、 Yorozu Law Group (San Francisco) 及び Makman and Matz LLP (San Mateo) にて、米国に進出する日本企業へのリーガルサービスを専門として、経験を積む。<br>
						2014年に帰国。カリフォルニアで得た経験を活かし、日本企業の海外展開支援に本格的に取り組む。2017年に米国カリフォルニア州法人TandemSprint, Inc.の代表取締役に就任し、米国への進出支援を事業化する。<br>
						2018年に弁護士法人ファースト＆タンデムスプリント法律事務所を開設。世界市場で戦う日本企業をビジネスと法律の両面でサポートしている。<br>
						ウェブ通販・EC事業については特に強みがあり、事業の立上げ・運営・販売促進・トラブル対応・海外展開まで、一貫してサポートできる体制を整えている。<br>
						高橋株式会社社外取締役、株式会社フロンティア社外監査役、株式会社サムシングファン社外監査役
					</div>
				</div>

				<div class="ecl-profile-box">
					<div class="ecl-profile-box-header">
						<div class="ecl-profile-box-header-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_fujii.png"></div>
						<div class="ecl-profile-box-header-data">
							<p class="font-lato font-lato__i ecl-profile-box-header-data-ttl">Profile</p>
							<p class="ecl-profile-box-header-data-post">弁護士</p>
							<p class="ecl-profile-box-header-data-name">藤井 総</p>
							<p class="ecl-profile-box-header-data-post">第一東京弁護士会所属</p>
						</div>
					</div>
					<div class="ecl-profile-box-message">
						弁護士法人ファースト＆タンデムスプリント法律事務所　代表弁護士<br>
						慶應義塾大学法学部法律学科卒業。「世界を便利にしてくれるITサービスをサポートする」ことを使命（ミッション）に掲げて、ITサービスを運営する企業に「法律顧問サービス」を提供している。<br>
						2015年に弁護士法人ファースト法律事務所を開設。ITサービスを提供する企業やIT関連部門、IT関連組織が法律顧問サービスの主な導入企業になり、その業種はASPサービス事業者、ISP事業者、EDI事業、ハードウェアメーカー、コンサルティングファーム、海外政府系機関等、多様。中堅・上場企業だけでなく、ベンチャー企業もサポートしている。<br>
						また、業務にチャットを導入することで、サービス提供エリアは全国。事務所所在地は東京（丸の内）でありながら、東北、関東、関西、中部、九州など、全国に点在している顧問先と、リアルタイムでのやり取りを可能にしている。<br>
						2018年に弁護士法人ファースト＆タンデムスプリント法律事務所を開設。取扱業務は、コーポレート、契約書・Webサービスの利用規約（作成・審査・交渉サポート）、労働問題、債権回収、知的財産、経済特別法など、企業法務全般に対応している。
					</div>
				</div>
			</div>
		</div>

		<div class="bg_world">
			<div class="section-wrap staff">
				<div class="section-inner">
					<h2 class="section-title">
						<span class="font-lato font-lato__bold-i">Senior Associate</span>
						<span class="small">シニア・アソシエイト</span>
					</h2>
					<ul class="staff__list">
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_kadowaki.png" alt="" width="120" height="120">
							<dl>
								<dt>門脇 史享</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_kimura.png" alt="" width="120" height="120">
							<dl>
								<dt>木村 真実</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yanagida.png" alt="" width="120" height="120">
							<dl>
								<dt>柳田 純子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_sugaya.png" alt="" width="120" height="120">
							<dl>
								<dt>菅谷 元秀</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_kazuko_suzuki.png" alt="" width="120" height="120">
							<dl>
								<dt>鈴木 和子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yamaguchiatsuyo.png" alt="" width="120" height="120">
							<dl>
								<dt>山口 敦世</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_ishida.png" alt="" width="120" height="120">
							<dl>
								<dt>石田 翠</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_taoka.png" alt="" width="120" height="120">
							<dl>
								<dt>田岡 駿介</dt>
								<dd>保有資格：司法書士・<br class="pc">行政書士</dd>
							</dl>
						</li>
					</ul>
					<h2 class="section-title">
						<span class="font-lato font-lato__bold-i">Associate</span>
						<span class="small">アソシエイト</span>
					</h2>
					<ul class="staff__list">
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_suzuki.png" alt="" width="120" height="120">
							<dl>
								<dt>鈴木 寛</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yamakado.png" alt="" width="120" height="120">
							<dl>
								<dt>山角 牧子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_komoriya.png" alt="" width="120" height="120">
							<dl>
								<dt>小森谷 圭太郎</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_noriko-ando.png" alt="" width="120" height="120">
							<dl>
								<dt>安齋 紀子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_takashi-yamamoto.png" alt="" width="120" height="120">
							<dl>
								<dt>山本 貴志</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yuh-kobayashi.png" alt="" width="120" height="120">
							<dl>
								<dt>小林 優</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_imatomi.png" alt="" width="120" height="120">
							<dl>
								<dt>今富 亮平</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_kishida.png" alt="" width="120" height="120">
							<dl>
								<dt>岸田 彩</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_miyamoto.png" alt="" width="120" height="120">
							<dl>
								<dt>宮本 学</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_mishima.png" alt="" width="120" height="120">
							<dl>
								<dt>三島 愛喜</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_boku.png" alt="" width="120" height="120">
							<dl>
								<dt>朴 忠一</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yano.png" alt="" width="120" height="120">
							<dl>
								<dt>矢野 尚美</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_tominaga.png" alt="" width="120" height="120">
							<dl>
								<dt>冨永 敬子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_yoneyama.png" alt="" width="120" height="120">
							<dl>
								<dt>米山 健一</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_kimura_miho.png" alt="" width="120" height="120">
							<dl>
								<dt>木村 美帆</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_otomo.png" alt="" width="120" height="120">
							<dl>
								<dt>大友 美果</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
						<li class="staff__item">
							<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/prof_tomita.png" alt="" width="120" height="120">
							<dl>
								<dt>冨田 まゆ子</dt>
								<dd>保有資格：行政書士</dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- //END member profile -->


	<!-- news -->
	<section class="section-wrap section-bg news">
		<div class="section-inner">
			<h2 class="section-title">
				<span class="font-lato font-lato__bold-i">News</span>
				<span class="small">新着情報</span>
			</h2>

			<ul class="news__list">

				<?php
					$args = array(
						'post_type' => 'news',
						'numberposts' => 3
					);
					$news_posts = get_posts( $args );
					if( $news_posts ) : foreach( $news_posts as $post ) : setup_postdata( $post );

						$newsUrl = get_field('news_url');
				?>
				<li>
					<?php if($newsUrl) : ?>
					<a href="<?php echo $newsUrl ?>">
						<time class="font-lato font-lato__b"><?php the_time( 'Y.m.d' ); ?></time>
						<p><?php the_title(); ?></p>
					</a>
					<?php else : ?>
					<time class="font-lato font-lato__b"><?php the_time( 'Y.m.d' ); ?></time>
					<p><?php the_title(); ?></p>
					<?php endif; ?>
				</li>

				<?php
					endforeach;
					endif;
					wp_reset_postdata();
				?>
			</ul>

			<div class="btn">
				<a href="<?php echo esc_url( get_post_type_archive_link('news') ); ?>">
					新着情報一覧
					<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
						<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z" />
					</svg>
				</a>
			</div>
		</div>
	</section>
	<!-- //END news -->

	<!-- btn area -->
	<div class="btn-area">
		<a href="<?php echo esc_url( home_url('/inquiry') ); ?>">
			ご相談・お問合せはこちら
			<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
				<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z" />
			</svg>
		</a>
	</div>
	<!-- //END btn area -->

</div>

<?php get_footer(); ?>