<?php
/**
 * Template Name: 海外進出サブトップ */
?>

<?php get_header(); ?>

	<!-- main visual -->
	<section class="sub-top-main-visual">
		<div class="sub-top-main-visual__inner">
			<div class="sub-top-main-visual__spwrap">
				<h1 class="sub-top-main-visual__title"><span>日本から、海外事業を</span><span>マネジメントする。</span><em><span>世界市場で</span><span>勝利を掴む</span><span>ために。</span></em></h1>
			</div>
			<div class="sub-top-main-visual__btn">
				<a href="<?php echo esc_url( home_url('/example') ); ?>">
					海外進出事例
					<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
						<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
					</svg>
				</a>
				<a href="<?php echo esc_url( home_url('/service') ); ?>">
					提供サービス一覧
					<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
						<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
					</svg>
				</a>
			</div>
			<div class="sub-top-main-visual__bnr">
				<a href="<?php echo esc_url( home_url('/service/contract-negotiation/english-agreement/') ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/bnr_ai_top.jpg" alt="英文契約書の作成・チェックが必要な企業の皆様へ　AI翻訳×弁護士レビュー" width="350" height="60">
				</a>
			</div>
		</div>
	</section>
	<!-- //END main visual -->


	<div class="top-page-contents">

		<!-- side floating -->
		<?php get_template_part( 'parts_floating-bnr' ); ?>
		<!-- //END side floating -->

		<!-- column -->
		<section class="section-wrap column">
			<div class="section-inner">
				<!--<h2 class="section-title">
					<span class="font-lato font-lato__bold-i">Column</span>
					<span class="small">コラム</span>
				</h2>-->

				<ul class="column__list">

				<?php
					$cat_id_01 = get_category_by_slug("foreign-employee-management");
					$cat_id_01 = $cat_id_01->cat_ID;
					$cat_id_02 = get_category_by_slug("report");
					$cat_id_02 = $cat_id_02->cat_ID;
					$args =	array(
							'posts_per_page'   => 3,
							'post_type'        => 'post',
							'category__not_in' => array($cat_id_01,$cat_id_02)
					);
					$wp_query = new WP_Query($args);
					while ($wp_query->have_posts()) : $wp_query->the_post();
				?>

			<?php include('assets/column-post-list.php');?>

				<?php
					endwhile;
					wp_reset_postdata();
				?>

				</ul>

				<div class="btn">
					<a href="<?php echo esc_url( home_url('/column') ); ?>">
						コラム一覧
						<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
							<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
						</svg>
					</a>
				</div>
			</div>
		</section>
		<!-- //END column -->

		<!-- about service -->
		<section class="about-service">

			<div class="section-inner">
				<div class="about-service__header">
					<h2 class="about-service__header__title">
						<span>
							海外進出の全ての業務を<br>
							進出前から進出後まで<br>
							ワンストップで支援！
						</span>
					</h2>
					<p class="about-service__header__text">
						<span>＜海外進出に必要な５つのポイント＞</span>
						日本企業が海外事業を成功させるためには、①海外に販路を開拓し、②海外に拠点を開設し、③海外の企業と交渉して契約を結び、④現地法人を運営・管理することが必要です。同時に、⑤コンプライアンス対策を行うことで、リスクを抑えつつ海外事業を進めることができます。<br>
						通常は、これら５つの活動を行うためには、現地を訪問して取引先候補を探すとともに、現地の専門家も選定して依頼して、個別に交渉を進めなければなりません。また、海外において契約の履行を確保し続けるのは容易ではありません。これらの業務を日本からワンストップで実現するのが、私たちの仕事です。
					</p>
				</div>
			</div>

			<div class="about-service__pml">
				<dl class="section-inner">
					<dt>PMLとは・・・</dt>
					<dd>
						<img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/about-pml_img.jpg" alt="" width="392" height="210" >
						<p>PML (Project Management Lawyer) とは、依頼企業のプロジェクトを成功させるためにマネジメント業務を行う弁護士のことです。プロジェクトの過程を通じて一貫して法的視点を加味した交渉と調整を行うことで、プロジェクトを構成する各活動の計画立案、進捗管理、実行支援等のマネジメントを安全かつ強力に推進することを特徴としています。海外事業の場面では、進出相手国の弁護士、会計士等の専門家とチームを編成して現地でのプロジェクトを支援するとともに、依頼企業の取引先となる現地企業との交渉から契約締結後の実行支援までを一貫してマネジメントすることで、依頼企業が日本から海外事業をコントロールすることを可能にする役割を担います。</p>
					</dd>
				</dl>
			</div>

			<div class="about-service__body">
				<div class="about-service__timeline hide-sm">
					<ul>
						<li>進出前</li>
						<li>進出時</li>
						<li>進出後</li>
					</ul>
				</div>

				<div class="section-inner">
					<div class="about-service__cont">
						<ul>

							<li>
								<div class="about-service__item">
									<div class="service__group bg_01">
										<div class="service__group__inner">
											<span class="service__group__title">販路開拓</span>
											<a href="<?php echo esc_url( home_url('/service/develop-sales-channel') ); ?>">
												詳しくはこちら
												<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 38 28" xml:space="preserve">
													<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
								<ul class="about-service__detail">
									<li>
										<p>規制調査</p>
										<div class="service-time service-time__1">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>許認可取得</p>
										<div class="service-time service-time__2">
											<div class="service-time__inner">
												<span class="hide-pc service__off">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>現地企業との契約締結</p>
										<div class="service-time service-time__1-2">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="about-service__item">
									<div class="service__group bg_02">
										<div class="service__group__inner">
											<span class="service__group__title">不動産</span>
											<a href="<?php echo esc_url( home_url('/service/real-estate') ); ?>">
												詳しくはこちら
												<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 38 28" xml:space="preserve">
													<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
								<ul class="about-service__detail">
									<li>
										<p>物件調査</p>
										<div class="service-time service-time__1">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p class="font-ajust">デューデリジェンス</p>
										<div class="service-time service-time__1">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>売買交渉</p>
										<div class="service-time service-time__1-2">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>管理</p>
										<div class="service-time service-time__3">
											<div class="service-time__inner">
												<span class="hide-pc service__off">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="about-service__item">
									<div class="service__group bg_03">
										<div class="service__group__inner">
											<span class="service__group__title">契約支援</span>
											<a href="<?php echo esc_url( home_url('/service/contract-negotiation') ); ?>">
												詳しくはこちら
												<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 38 28" xml:space="preserve">
													<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
								<ul class="about-service__detail">
									<li>
										<p class="font-ajust">リーガルリサーチ</p>
										<div class="service-time service-time__1">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<!--<li>
										<p>海外コンプライアンス支援</p>
										<div class="service-time service-time__1-2">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>-->
									<li>
										<p>契約書作成</p>
										<div class="service-time service-time__1">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>英文契約書レビュー</p>
										<div class="service-time service-time__1-3">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>実行支援</p>
										<div class="service-time service-time__3">
											<div class="service-time__inner">
												<span class="hide-pc service__off">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="about-service__item">
									<div class="service__group bg_04">
										<div class="service__group__inner">
											<span class="service__group__title">現地法人運営</span>
											<a href="<?php echo esc_url( home_url('/service/local-company-management') ); ?>">
												詳しくはこちら
												<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 38 28" xml:space="preserve">
													<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
								<ul class="about-service__detail">
									<li>
										<p>設立 / 管理</p>
										<div class="service-time service-time__2-3">
											<div class="service-time__inner">
												<span class="hide-pc service__off">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>雇用 / ビザ</p>
										<div class="service-time service-time__1-2">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__off">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>資金調達</p>
										<div class="service-time service-time__1-3">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>知的財産権</p>
										<div class="service-time service-time__1-3">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
								</ul>
							</li>

							<li>
								<div class="about-service__item">
									<div class="service__group bg_05">
										<div class="service__group__inner">
											<span class="service__group__title">海外コンプライアンス</span>
											<a href="<?php echo esc_url( home_url('/service/compliance') ); ?>">
												詳しくはこちら
												<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" height="14px" viewBox="0 0 38 28" xml:space="preserve">
													<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
								<ul class="about-service__detail">
									<li>
										<p>不祥事防止</p>
										<div class="service-time service-time__3">
											<div class="service-time__inner">
												<span class="hide-pc service__off">
													進出前
												</span>
												<span class="hide-pc service__off">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p>個人情報保護</p>
										<div class="service-time service-time__1-3">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
									<li>
										<p class="font-ajust"><span>親会社</span><span>経営判断支援</span></p>
										<div class="service-time service-time__1-3">
											<div class="service-time__inner">
												<span class="hide-pc service__on">
													進出前
												</span>
												<span class="hide-pc service__on">
													進出時
												</span>
												<span class="hide-pc service__on">
													進出後
												</span>
											</div>
										</div>
									</li>
								</ul>
							</li>

						</ul>
					</div>

					<div class="btn">
						<a href="<?php echo esc_url( home_url('/service') ); ?>">
							提供サービス一覧
							<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
								<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
							</svg>
						</a>
					</div>
				</div>
			</div>


			<section class="section-wrap price-contents">
	<span class="section-inner">
		<h1 class="section-title">
			<span class="font-lato font-lato__bold-i">Price</span>
			<span class="sub">- 相談費用 -</span>
                        <span class="sub">初回相談：無料 (60分)</span><span class="small">※国内の契約関係から海外進出まで、幅広くご対応致します。</span>
			<!-- <span class="btn-01"><a class="bg-orange fff" href="<?php echo esc_url( home_url('/overseas/price/') ); ?>">顧問契約に関する費用はコチラ&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></a></span> -->
		</h1>
		<div class="btn-area">
			<a href="<?php echo esc_url( home_url('/overseas/price/') ); ?>">
			顧問契約に関する費用はこちら
				<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
					<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
				</svg>
			</a>
		</div>
		</div>
		</section>

		</section>
		<!-- //END about service -->

		<!-- interview -->
		<section class="section-wrap section-bg interview">
			<div class="section-inner">
				<h2 class="section-title">
					<span class="font-lato font-lato__bold-i">Interview</span>
					<span class="small">依頼者インタビュー</span>
				</h2>
			</div>

			<ul class="interview__list">

			<?php
				$args = array(
					'post_type' => 'interview',
					'numberposts' => 6
				);
				$interview_posts = get_posts( $args );

				if( $interview_posts ) : foreach( $interview_posts as $post ) : setup_postdata( $post );

					$bnr_path = get_field('interview_bnr');
					$bnr_alt = get_field('interview_alt');

					if(get_post_meta($post->ID, 'interview_bnr', true)):
			?>

				<li>
					<a href="<?php the_permalink() ?>">
						<img src="<?php echo $bnr_path; ?>" alt="<?php echo $bnr_alt; ?>" width="496" height="168">
					</a>
				</li>

			<?php
				endif;
				endforeach;
				endif;
				wp_reset_postdata();
			?>

			</ul>

			<div class="section-inner">
				<div class="btn">
					<a href="<?php echo get_post_type_archive_link('interview'); ?>">
						依頼者インタビュー一覧
						<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
							<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
						</svg>
					</a>
				</div>
			</div>
		</section>
		<!-- //END interview -->

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
					<a href="<?php echo get_post_type_archive_link('news'); ?>">
						新着情報一覧
						<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
							<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
						</svg>
					</a>
				</div>
			</div>
		</section>
		<!-- //END news -->

		<!-- btn area -->
		<div class="btn-area">
			<a href="<?php echo esc_url( home_url('/inquiry') ); ?>">
				無料相談はこちら
				<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
					<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
				</svg>
			</a>
			<a href="<?php echo esc_url( home_url('/magazine') ); ?>">
				メルマガ登録はこちら
				<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve">
					<path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"/>
				</svg>
			</a>
		</div>
		<!-- //END btn area -->

	</div>

<?php get_footer(); ?>