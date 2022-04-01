<?php

//セッティング
function pml_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'menus' );
  add_editor_style( array( 'css/editor-style.css' ) );
}
add_action( 'after_setup_theme', 'pml_setup' );


//検索ワードの区切りに全角を使えるようにする
if(isset($_GET['s'])) $_GET['s']=mb_convert_kana($_GET['s'],'s','UTF-8');


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );
add_image_size( 'middle-feature', 500, 330, true );


//固定ページのみ自動整形機能 （template_pagesを読み込んだ固定ページは自動整形させる）
function disable_page_wpautop() {
  if ( is_page() && !is_page_template('template_pages.php') || is_singular('profile') ) remove_filter( 'the_content', 'wpautop' );
}
add_action( 'wp', 'disable_page_wpautop' );


//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
  return 100;
}
add_filter('excerpt_length', 'my_excerpt_length');

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
  return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');


//CSS・JavaScript 定義
function pml_scripts() {
  //style
  wp_enqueue_style( 'https://fonts.googleapis.com/css?family=Lato:400,700,400i,700i',array(),'1' );
  wp_enqueue_style( 'pml-drawer-style', get_template_directory_uri().'/css/drawer/drawer.min.css', array(), '1' );
  wp_enqueue_style( 'pml-swiper-style', get_template_directory_uri().'/css/swiper.min.css', array(), '1' );
  wp_enqueue_style( 'pml-style', get_template_directory_uri().'/css/style.css', array(), '1.1' );
  wp_enqueue_style( 'wp-style', get_stylesheet_uri(), array(), '1' );

  // jQuery
  wp_deregister_script( 'jquery' ); // デフォルトで読み込まれるjQueryの登録を抹消
  wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4' );

  // JavaScript
  wp_enqueue_script( 'pml-script_iscroll', get_template_directory_uri().'/js/drawer/iscroll.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_drawer', get_template_directory_uri().'/js/drawer/drawer.min.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_swiper', get_template_directory_uri().'/js/swiper.min.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_floattable', get_template_directory_uri().'/js/floatthead/jquery.floatThead.min.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_blockrevealers', get_template_directory_uri().'/js/blockrevealers.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_anime', get_template_directory_uri().'/js/anime.min.js', array(), '1', true );
  wp_enqueue_script( 'pml-script_common', get_template_directory_uri().'/js/common.js', array(), '1.1', true );
}
add_action( 'wp_enqueue_scripts', 'pml_scripts' );


//ページネーション
//固定ページ（テンプレート/front-page含む）以外のページング
function wp_pagination() {
  global $wp_query;

  $big = 999999999;

  echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '/page/%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'end_size' => 1,
    'mid_size' => 4,
    'prev_text' => __('<svg version="1.1" id="arrow_l" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"  y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve"><path id="arrow" class="st0" d="M0,14l14.1,14l2.8-2.8L7.7,16H38v-4H7.7L17,2.8L14.1,0L0,14L0,14z"/></svg>'),
    'next_text' => __('<svg version="1.1" id="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="16px" viewBox="0 0 38 28" xml:space="preserve"><path id="arrow" class="st0" d="M38,14L23.9,0L21,2.8l9.3,9.2H0v4h30.3L21,25.2l2.8,2.8L38,14L38,14z"></path></svg>')
  ) );
  wp_reset_query();
}

// パンくずリスト
function breadcrumb($divOption = array('class' => 'breadcrumbs')){

  global $post;
  $str ='';

  if(!is_home()&&!is_admin()){

    $str.= '<div class="breadcrumbs">';
    $str.= '<ol class="breadcrumbs__list font-montserrat">';
    $str.= '<li class="breadcrumbs__item"><a href="'. home_url() .'/">TOP</a></li>';


    if(is_category()) {
      
      //カテゴリーのアーカイブページ
      $cat = get_queried_object();
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str.='<li><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
        }
      }
      $str.='<li>'. $cat -> name . '</li>';

    } elseif(is_post_type_archive()){

      //カスタム投稿のアーカイブページ
      $cpt = get_query_var( 'post_type' );
      $obj = get_post_type_object( $cpt );

      $str.='<li>'. $obj->labels->name . '</li>';

    } elseif(is_singular('professional')){

      $str.='<li><a href="'.get_post_type_archive_link( 'professional' ).'">海外事業プロフェッショナル</a></li>';
      $str.='<li>'.get_the_title().'</li>';

    }  elseif(is_singular('reportdownload')){

      //レポートのシングルページ
      $str.='<li><a href="'. esc_url( home_url('/report-download') ) . '">レポート</a></li>';
      $str.='<li>'.get_the_title().'</li>';

    } elseif(is_single()){

      //ブログの個別記事ページ
      if ( $obj ) {
        $str.='<li><a href="'.  get_post_type_archive_link($cpt). '">'. $obj->labels->name . '</a></li>';
      } else {
        $str.='<li><a href="'. esc_url( home_url('/column') ) . '">コラム</a></li>';
      }

      $str.='<li>'.get_the_title().'</li>';

    } elseif(is_page()){

      //固定ページ
      if($post -> post_parent != 0 ){
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        foreach($ancestors as $ancestor){
          $str.='<li><a href="'. get_permalink($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
        }
      }
      if( !is_page(178) ) {
        $str.= '<li>'. $post -> post_title .'</li>';
      }

    } elseif(is_date()){

      //日付ベースのアーカイブページ
      if(get_query_var('day') != 0){
        //年別アーカイブ
        $str.='<li><a href="'. get_year_link(get_query_var('year')). '">' . get_query_var('year'). '年</a></li>';
        $str.='<li><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '">'. get_query_var('monthnum') .'月</a></li>';
        $str.='<li>'. get_query_var('day'). '日</li>';
      } elseif(get_query_var('monthnum') != 0){
        //月別アーカイブ
        $str.='<li><a href="'. get_year_link(get_query_var('year')) .'">'. get_query_var('year') .'年</a></li>';
        $str.='<li>'. get_query_var('monthnum'). '月</li>';
      } else {
        //年別アーカイブ
        $str.='<li>'. get_query_var('year') .'年</li>';
      }

    } elseif(is_search()) {

      //検索結果表示ページ
      $str.='<li>「'. get_search_query() .'」で検索した結果</li>';

    } elseif(is_author()){

      //投稿者のアーカイブページ
      $str .='<li>投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</li>';

    } elseif(is_tag()){

      //タグのアーカイブページ
      $str.='<li>タグ : '. single_tag_title( '' , false ). '</li>';

    } elseif(is_attachment()){

      //添付ファイルページ
      $str.= '<li>'. $post -> post_title .'</li>';

    } elseif(is_404()){

      //404 Not Found ページ
      $str.='<li>ERROR</li>';

    } else{

      //その他
      $str.='<li>'. wp_title('', true) .'</li>';

    }

    $str.='</ol>';
    $str.='</div>';
  }
  echo $str;
}


// 固定ページの親ページと子ページをスラッグで判定する
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}


/*
  スマートフォン / タブレットでの分岐
*/

//iphoneまたはipodで閲覧されているかどうかを判定
function is_iphone() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if( strpos($ua, 'iPhone')!== false || strpos($ua, 'iPod')!== false ) {
    return true;
  } else {
    return false;
  }
}

//androidスマートフォンで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を見ることで、タブレット端末をfalse判定
function is_android() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if( strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false) {
    return true;
  } else {
    return false;
  }
}

//Mozillaが開発するスマートフォン用OS「Firefox OS」の判定関数
function is_firefox_os(){
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if( strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false ) {
    return true;
  } else {
    return false;
  }
}

//Windows Phoneで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を確認することで、タブレット端末をfalse判定
function is_windows_phone(){
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if( strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false) {
    return true;
  } else {
    return false;
  }
}

//BlackBerryで閲覧されているかどうかを判定する関数
function is_blackberry() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if( strpos($ua, 'BlackBerry')!== false ) {
    return true;
  } else {
    return false;
  }
}

function is_mymobile() {
  if( is_iphone() || is_android() || is_firefox_os() || is_windows_phone() || is_blackberry()) {
    return true;
  } else {
    return false;
  }
}

/*
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
  $pamphletID = get_page_by_path("pamphlet");
  $pamphletID = $pamphletID->ID;

  $inquiryID = get_page_by_path("inquiry");
  $inquiryID = $inquiryID->ID;

  $reportdownloadID = get_page_by_path("report-download-form");
  $reportdownloadID = $reportdownloadID->ID;

  $translationID = get_page_by_path("english-agreement");
  $translationID = $translationID->ID;

if(is_page($pamphletID)):
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://pm-lawyer.com/pamphlet-dl/'; 
}, false );
</script>
EOD;
elseif(is_page($inquiryID)):
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://pm-lawyer.com/inquiry-thanks/'; 
}, false );
</script>
EOD;
elseif(is_page($reportdownloadID)):
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://pm-lawyer.com/report-download-form-thanks/'; 
}, false );
</script>
EOD;
elseif(is_page($translationID)):
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://pm-lawyer.com/english-agreement-thanks/'; 
}, false );
</script>
EOD;
else :
endif;
}
*/

// professionalアーカイブを日付の昇順に変更
function change_posts_per_page($query) {
  if( is_admin() || ! $query->is_main_query() ){
   return;
 }
 if ( $query->is_post_type_archive( 'professional' ) ) {
    $query -> set('order','ASC');
    $query -> set('orderby', 'date');
    return;
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

// tocのJSを投稿ページにのみ表示する
function show_toc() {
wp_deregister_script('toc-front');
  if (is_single()) {
    if (class_exists('doc')) {
      wp_register_script( 'toc-front', plugins_url( 'front.min.js', __FILE__ ) , array('jquery'), false, true );
    }
  }
}
add_action( 'wp_enqueue_scripts', 'show_toc');


// home_url short code
add_shortcode('hurl', 'shortcode_hurl');
function shortcode_hurl() {
return home_url( '/' );
}
// img path shortner
function imagepathshort($arg) {
$content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $arg);
return $content;
}
add_action('the_content', 'imagepathshort');

// pdf path shortner
function pdfpathshort($arg) {
$content = str_replace('"pdf/', '"' . get_bloginfo('template_directory') . '/pdf/', $arg);
return $content;
}
add_action('the_content', 'pdfpathshort');

//upload folder direction
function upload_dir() {
$upload_dir = wp_upload_dir();
$upload_dir = $upload_dir['baseurl'];
echo $upload_dir;
}
//
add_shortcode('upload_url','shortcode_up');
function shortcode_up() {
$upload_dir = wp_upload_dir();
return $upload_dir['baseurl'];
}

//to include php files in page and single
//my-template.php -> [include_php file='my-template']
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('include_php', 'my_php_Include');

// [pagelink id=ID slug=slug_name]
function linkpage_func ( $atts ) {
  extract( shortcode_atts( array(
      'id' => '', //ID
      'slug' => '', //paga slug
  ), $atts ) );
  $my_url = home_url( '/' );
  if($slug){ //スラッグを指定したときに投稿IDを取得する
      $id = url_to_postid($my_url. $slug);
  }
  $link = get_permalink($id);
  $title = get_the_title($id); //投稿IDで指定した投稿のレコードをデータベースから取得
  return '<div class="pagelink-btn-01 align-c"><a href="'. $link .'"' .'>'.'当コラムに関するレポートはこちら →'. '</a></div>';
}
add_shortcode('pagelink', 'linkpage_func');