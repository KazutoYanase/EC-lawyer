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
				<span class="font-lato font-lato__bold-i">Price</span>
				<span class="small">料金プラン</span>
			</h1>
		</div>
		
		<div class="ecl-pg-price">

			
			<div class="ecl-pg-price-box ecl-pg-price-list">
				<h2><span>弁護士費用（顧問契約）</span></h2>
				<div class="ecl-pg-price-list-label">
					<table>
						<tbody>
							<tr>
								<th>プラン</th>
								<th>ECビジネス<br>チェックプラン<br><span>(月額5万円)</span></th>
								<th>ECビジネス<br>専用プラン<br><span>(月額10万円)</span></th>
								<th>越境EC<br>対応プラン<br><span>(月額20万円)</span></th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="ecl-pg-price-list-body">
					<table>
						<tbody>
							<tr>
								<td colspan="4" class="label">通販・EC事業参⼊</td>
							</tr>
							<tr>
								<td class="labels">通販・EC事業コンサルティング・法律相談<span>（※１）</span></td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">サイト会員規約・サイト利用規約作成<br class="sp"></td>
								<td>×</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">プライバシーポリシー作成</td>
								<td>×</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">特定商取引法に基づく表示の作成</td>
								<td>×</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">契約書作成</td>
								<td>×</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td colspan="4" class="label">契約・規約・広告チェック<span>（※２）</span></td>
							</tr>
							<tr>
								<td class="labels">契約チェック</td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">利⽤規約・プライバシーポリシー・<br>特商法に基づく表⽰チェック</td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">広告・DM・特典・キャンペーンの法的チェック</td>
								<td>○</td>
								<td>○</td>
								<td>○</td>
							</tr>
							<tr>
								<td colspan="4" class="label">⾏政対応・許認可・債権回収<span>（※３）</span></td>
							</tr>
							<tr>
								<td class="labels">消費者庁対応⽀援</td>
								<td>×</td>
								<td>△</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">都道府県<br class="sp">薬務課対応⽀援</td>
								<td>×</td>
								<td>△</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">許認可取得（薬機法等）支援</td>
								<td>×</td>
								<td>△</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">債権回収支援</td>
								<td>×</td>
								<td>△</td>
								<td>○</td>
							</tr>
							<tr>
								<td colspan="4" class="label">越境EC<span>（※４）</span></td>
							</tr>
							<tr>
								<td class="labels">海外規制調査⽀援</td>
								<td>×</td>
								<td>×</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">英語版利⽤規約・プライバシーポリシー作成・チェック</td>
								<td>×</td>
								<td>×</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">英⽂契約チェック</td>
								<td>×</td>
								<td>×</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">ウェブコンプライアンス（GDPR・CCPA等）⽀援</td>
								<td>×</td>
								<td>×</td>
								<td>○</td>
							</tr>
							<tr>
								<td class="labels">現地許認可取得⽀援</td>
								<td>×</td>
								<td>×</td>
								<td>○</td>
							</tr>
						</tbody>
					</table>
				</div>
				<ul>
					<li>
						<div class="num">※1</div>
						<div class="txt">
							<p>顧問契約を前提とした法律相談：無料</p>
							<p>法律相談のみ：1時間以内40,000円（税別）</p>
							<p>
								法律相談では、貴社の状況をよくお聴きして、課題解決に向けた方法を共に考え、貴社のビジネスを加速させるためのご提案をさせていただきます。
							</p>
							<p>
								顧問契約後のイメージについては、「顧問サービス内容」のページで解説しています。
							</p>
							<p>
								<span>（</span><a href="<?php echo esc_url( home_url('/adviser') ); ?>">顧問サービス内容</a><span>）</span>
							</p>
						</div>
					</li>
					<li>
						<div class="num">※2</div>
						<div class="txt">
							<p>
								ECビジネスチェックプランは月１～３通程度、ECビジネス専用プランは月１～１０通程度のチェックを想定しています。<br>
								契約書の種類にもよりますが、分量の少ないものは当日中か翌営業日に、通常のものは２〜３営業日以内に、分量の多いものでも５営業日以内には、チェックを完了します。<br>
								新規サービスや新規ビジネスに用いる契約書の作成の場合、基本的には、ヒアリングに３日程度、ドラフト送付まで７日程度、そこから完成まで４日前後 、合計で２週間程度のお時間をいただきます。もっとも、NDAやシステム開発契約書など、標準的な契約書の作成の場合、半分程度のお時間で対応できます。<br>
								なお、英文の契約書のチェック・作成の場合は、概ねこれの２倍のお時間になります。
							</p>
							<p>
								各プラン毎の1ヶ月あたりの対応時間の目安は下記のとおりです。<br>
								月額5万円：1.5時間<br>
								月額10万円：3時間<br>
								月額20万円：7時間
							</p>
							<p>
								もちろん、厳格にこの時間をオーバーしたら即ストップではありません。<br>
								相談の少ない月が続いたら、その後の月で多少オーバーしても対応するなど、柔軟に対応しています。
							</p>
							<p>
								上記の1月あたりの目安時間ですが、当事務所弁護士のタイムチャージが1時間4万円になり、それをベースに、顧問であることを考慮したディスカウントの結果になります。<br>
								上記のタイムチャージの金額は、通販・EC分野に関して専門性の高い弁護士としての業務クオリティと、業務スピード（※即時に対応するということ自体が、ビジネスの現場では価値になります）からすれば、適正な金額と考えています。
							</p>
							<p>
								また、他の法律事務所では、法律相談が対面での打合せベースであることが多く、打合せは一般的に時間がかかりがちです。弁護士が顧客のオフィスに伺う場合はその移動時間も加算されたり、複数の弁護士が同席した場合はその人数分の時間も加算されてしまいます。<br>
								その上、通販・EC分野の理解が乏しい弁護士なら、相談に入る前に、顧客から詳細な説明が必要だったり、弁護士からの回答が要領を得なかったりして、やり取りが長引くので、あっという間にその月の顧問料の範囲内で対応可能な時間を消費してしまうでしょう。
							</p>
							<p>
								一方で、当事務所の法律相談はチャットがベースなので、上記の対面での打合せの問題が生じません。さらに、当事務所の弁護士は通販・EC分野の専門性が高く、即座に業界特有の問題点が把握できるので、同じ業務時間でも弁護士ができる内容が大きく変わってきます。
							</p>
						</div>
					</li>
					<li>
						<div class="num">※3</div>
						<div class="txt">
							<p>
								行政対応・許認可・債権回収については、法律相談が顧問契約の範囲に含まれます。<br>
								実際に対応を受任する場合には、業務の内容によって、別途実費報酬をお見積りさせて頂きます。
							</p>
						</div>
					</li>
					<li>
						<div class="num">※4</div>
						<div class="txt"><p>海外の専門家・専門企業（法律事務所、会計事務所、不動産業者等）の報酬及び翻訳等は、別途費用が必要になります。</p></div>
					</li>
				</ul>
			</div>
			
			
			<?php /* ?>-=-=-=-=-=-差し込み箇所-=-=-=-=-=-<?php */ ?>
			
			<div class="org_btn_wrap">
					<div class="org_btn">
						<a href="<?php echo esc_url( home_url('/inquiry/') ); ?>">
							顧問契約に関するお問合せはこちら
						</a>
					</div>
			
			<?php /* ?>-=-=-=-=-=-差し込み終わり-=-=-=-=-=-<?php */ ?>
			
			
		</div>
		
	</div>

<?php get_footer(); ?>



		