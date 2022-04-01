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

	<!-- bread crumbs -->
	<?php //breadcrumb(); ?>
	<!-- //END bread crumbs -->

	<!-- side floating -->
	<?php //get_template_part( 'parts_floating-bnr' ); ?>
	<!-- //END side floating -->
	
	<div class="ecl-pg">
		
		<div class="ecl-pg-title">
			<h1 class="section-title">
				<span class="font-lato font-lato__bold-i">Adviser</span>
				<span class="small">顧問サービス内容</span>
			</h1>
		</div>
		
		<div class="ecl-pg-adviser">
			
			<div class="ecl-pg-adviser-box">
				<h2><span>チャット相談</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_01.jpg" alt="チャット相談"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>誰でも気軽に、なんでも相談</dt>
							<dd>
								法律が関係する問題なのか、弁護士に相談する問題なのか。
								悩む必要はありません。「困った」ことや「教えてほしい」ことがあれば、気軽にチャットで相談してください。経営層や法務部だけでなく、営業や開発の現場の担当者からでも、直接弁護士に チャットで相談ができます。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>契約書・規約のチェック</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_02.jpg" alt="契約書・規約のチェック"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>不利な契約は結ばせない</dt>
							<dd>
								取引先から示された契約書・規約は、取引先に有利、つまりこちらが不利な場合がほとんどです。遠慮する必要はありません。こちらに不利な 箇所は、きちんと修正をしてもらいましょう。
								不利な箇所の洗い出し、修正案の提示、さらには交渉のバックアップや窓口対応まで、すべてお任せください。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>契約書・規約の作成</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_03.jpg" alt="契約書・規約の作成"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>リスクを防ぎビジネスを加速させる</dt>
							<dd>
								新しく始めるビジネスには、トラブルがつきものです。
								予想外のリスクが潜んでいないか、ビジネスの内容を徹底的に分析することで、リスクを防ぎ、ビジネスを加速させる契約書・規約を、オーダーメイドで作成します。雛形を渡して終わり、なんてことはありません。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>契約書・規約の解説</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_04.jpg" alt="契約書・規約の解説"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>現場が内容を理解して使いこなす</dt>
							<dd>
								どんなに万全な契約書・規約を作成しても、現場が内容を理解せず、使いこなせなければ意味がありません。
								作成した契約書・規約は、全条文を1つずつチャットで丁寧に解説します。チャットのログがマニュアルになり、現場の誰もが、契約書・規約の内容を理解して、使いこなせるようになります。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>代金回収</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_05.jpg" alt="代金回収"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>代金回収を諦めない</dt>
							<dd>
								裁判をしてコストをかけてまで代金を回収するかは、悩ましい問題です。ですが、最初から諦めてはいけません。法律事務所がメールを 一本出すだけで、払ってくる相手も多いのです。裁判だけにこだわらず、費用対効果がもっとも高い方法を検討して、少しでも早く、少しでも多く回収できるよう、力を尽くします。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>労働問題</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_06.jpg" alt="労働問題"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>社員とのトラブルを円滑に解決</dt>
							<dd>
								残業代請求、解雇無効、メンタルヘルスetc。
								社員との労働問題は、増える一方です。労働問題の対応は、一歩誤れば、法的にも社会的にも、会社が大きな責任を負うことになります。社員とのトラブルを円滑に解決できるよう、交渉のバックアップや窓口対応、裁判になったときの対応まで、すべてお任せください。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>24時間以内の回答約束</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_07.jpg" alt="24時間以内の回答約束"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>チャットからの相談には24時間以内に回答</dt>
							<dd>打合せのアポイントを取る必要はありません。折り返しの電話やメールの返信を待つ必要もありません。あなたの「困った」を、すぐに解決します。</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>優先対応</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_08.jpg" alt="優先対応"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>まずは顧問のお客様から</dt>
							<dd>
								スポットでの依頼のお客様よりも、 顧問のお客様からの依頼を優先して対応します。顧問のお客様の中では、プラン順に対応します。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>緊急連絡</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_09.jpg" alt="緊急連絡"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>夜間・休日でも連絡がつく</dt>
							<dd>
								サーバーがダウンした。ネットで炎上した。トラブルが起きるのは、平日のビジネスアワーだけではありません。夜間・休日であっても、弁護士の携帯電話に緊急連絡をすることができます。翌日まで、週明けまで待つ必要はありません。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>顧問表示</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_10.jpg" alt="顧問表示"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>顧問法律事務所の存在を、対外的にアピール</dt>
							<dd>
								会社のウェブサイトやパンフ レットに、顧問法律事務所として当法律事務所を表示することができます。 取引先や顧客からの信頼を高 める効果が期待できます。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>専門家紹介</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_11.jpg" alt="専門家紹介"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>信頼できる専門家を紹介</dt>
							<dd>
								労務管理は社会保険労務士、知財管理は弁理士、登記は司法書士etc。ビジネス法務には、弁護士以外の専門家の力vが必要な業務もあります。その場合は、当法律 事務所が提携している、能力・実績・人柄、いずれも信頼できる専門家を紹介します。自社で探す必要はありません。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>顧問先割引</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_12.jpg" alt="顧問先割引"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>法務コストを下げる</dt>
							<dd>
								顧問料の範囲内で対応できない(顧問料と は別に費用がかかる)案件の場合に、スポットでの依頼のお客様よりも費用を割引きします。 顧問のお客様の中では、プラン毎の割引率 になります。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>訪問・会議参加</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_13.jpg" alt="訪問・会議参加"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>会議の場に弁護士の意見を</dt>
							<dd>
								弁護士が会社を訪問し、経営会議や企画会議に参加します。他社との業務提携や新商品の開発など、大掛かりなプロジェクトに、検討段階から弁護士が加わり、法的な視点からアドバイスをします。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<div class="ecl-pg-adviser-box">
				<h2><span>社内研修講師</span></h2>
				<div class="ecl-pg-adviser-item">
					<div class="ecl-pg-adviser-img"><img src="<?php echo esc_url( get_template_directory_uri()) ; ?>/img/adviser_14.jpg" alt="社内研修講師"></div>
					<div class="ecl-pg-adviser-exp">
						<dl>
							<dt>社内の法務レベルを向上</dt>
							<dd>
								社内研修の講師を担当します。普段弁護士と接しない社員が、直に弁護士から講義を受けることで、社内の法務レベルの向上が期待できます。研修のテーマは、リクエストをお受けします。
							</dd>
						</dl>
					</div>
				</div>
			</div>
			
			<?php /* ?>-=-=-=-=-=-差し込み箇所-=-=-=-=-=-<?php */ ?>
			
			<div class="org_btn_wrap">
					<div class="org_btn">
						<a href="<?php echo esc_url( home_url('/price/') ); ?>">
							顧問費用について詳しくはこちら
						</a>
					</div>
			
			<?php /* ?>-=-=-=-=-=-差し込み終わり-=-=-=-=-=-<?php */ ?>
			
		</div>
		
	</div>

<?php get_footer(); ?>