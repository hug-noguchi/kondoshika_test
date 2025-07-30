<?php


function growp_setup() {
	// automatic feed をサポート
	add_theme_support( 'automatic-feed-links' );

	// タイトルタグをサポート
	add_theme_support( 'title-tag' );
	// HTML5構造化マークアップで出力
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'growp_setup' );

/* カスタム投稿タイプを追加 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'blog_syouni', //カスタム投稿タイプ名を指定
		array(
			'labels' => array(
			'name' => __( '小児歯科ブログ' ),
			'singular_name' => __( '小児歯科ブログ' )
		),
		'rewrite' => array('slug'=>'kdc-column/blog_syouni'),//スラッグはリライト
		'public' => true,
		'has_archive' => true, /* アーカイブページを持つ */
		'menu_position' =>5, //管理画面のメニュー順位
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
    	)
	);
}
add_filter('redirect_canonical','my_disable_redirect_canonical');

function my_disable_redirect_canonical( $redirect_url ) {

	if ( is_single() ){
		$subject = $redirect_url;
		$pattern = '/\/page\//'; // URLに「/page/」があるかチェック
		preg_match($pattern, $subject, $matches);

		if ($matches){
		//リクエストURLに「/page/」があれば、リダイレクトしない。
		$redirect_url = false;
		return $redirect_url;
		}
	}
}

//-- 最初の画像をアイキャッチにする
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = bloginfo('template_directory')."/common/img/icatch.jpg";
    }
    return $first_img;
}


//Custom CSSFile Widget
add_action('admin_menu', 'custom_css2_hooks');
add_action('save_post', 'save_custom_css2');
add_action('wp_head','insert_custom_css2');
function custom_css2_hooks() {
    add_meta_box('custom_css2', '個別CSSファイル', 'custom_css2_input', 'post', 'normal', 'high');
    add_meta_box('custom_css2', '個別CSSファイル', 'custom_css2_input', 'page', 'normal', 'high');
}
function custom_css2_input() {
    global $post;
    echo '<input type="hidden" name="custom_css2_noncename" id="custom_css2_noncename" value="'.wp_create_nonce('custom-css2').'" />';
    echo '<textarea name="custom_css2" id="custom_css2" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css2',true).'</textarea>';
}
function save_custom_css2($post_id) {
    if (!wp_verify_nonce($_POST['custom_css2_noncename'], 'custom-css2')) return $post_id;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
    $custom_css2 = $_POST['custom_css2'];
    update_post_meta($post_id, '_custom_css2', $custom_css2);
}
function insert_custom_css2() {
    if (is_page() || is_single()) {
        if (have_posts()) : while (have_posts()) : the_post();

            if (get_post_meta(get_the_ID(), '_custom_css2', true) !='') {

				$string=get_post_meta(get_the_ID(), '_custom_css2', true);
				if(strstr($string, PHP_EOL)!==true){//--改行がある場合は複数ファイルに対応
						$st_array = explode(PHP_EOL,$string);
						foreach($st_array as $st){
						echo "<link rel=\"stylesheet\" href=\"";
						echo bloginfo('template_url').str_replace(array("\r\n","\r","\n"),'',$st)."\" type=\"text/css\" media=\"all\" />\n";
						}
				}else{
					echo "<link rel=\"stylesheet\" href=\"";
					echo bloginfo('template_url').$string."\" type=\"text/css\" media=\"all\" />\n";
				}
			}
        endwhile; endif;
        rewind_posts();
    }
}


//Custom CSS Widget
add_action('admin_menu', 'custom_css_hooks');
add_action('save_post', 'save_custom_css');
add_action('wp_head','insert_custom_css');
function custom_css_hooks() {
    add_meta_box('custom_css', '個別CSS', 'custom_css_input', 'post', 'normal', 'high');
    add_meta_box('custom_css', '個別CSS', 'custom_css_input', 'page', 'normal', 'high');
}
function custom_css_input() {
    global $post;
    echo '<input type="hidden" name="custom_css_noncename" id="custom_css_noncename" value="'.wp_create_nonce('custom-css').'" />';
    echo '<textarea name="custom_css" id="custom_css" rows="5" cols="30" style="width:100%;">'.get_post_meta($post->ID,'_custom_css',true).'</textarea>';
}
function save_custom_css($post_id) {
    if (!wp_verify_nonce($_POST['custom_css_noncename'], 'custom-css')) return $post_id;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
    $custom_css = $_POST['custom_css'];
    update_post_meta($post_id, '_custom_css', $custom_css);
}
function insert_custom_css() {
    if (is_page() || is_single()) {
        if (have_posts()) : while (have_posts()) : the_post();
            if (get_post_meta(get_the_ID(), '_custom_css', true) !='') {
                echo "<style type=\"text/css\" media=\"all\">\n".get_post_meta(get_the_ID(), '_custom_css', true)."\n</style>\n";
        }
        endwhile; endif;
        rewind_posts();
    }
}



//--NEWSLIST用ショートコード
function getCatItems($atts, $content = null) {
	extract(shortcode_atts(array(
//ここの数値を変えれば表示する件数が変わります
		"num" => '30'
	), $atts));
	global $post;
	$oldpost = $post;

	$retHtml="";
	$args = array(
	'posts_per_page' => 30, // 表示件数の指定
	'orderby'=>'post_date',
	'order'=>'DESC',
	'post_type' => array('post')
	);
	$posts = get_posts( $args );
	if ( have_posts() ) :

	foreach ( $posts as $posts ): // ループの開始
	setup_postdata( $posts ); // 記事データの取得

	$retHtml.='<div class="gray fsize16">';
	$retHtml.='<h4>'.get_the_date("",$posts->ID).'</h4>';
	$retHtml.='<p class="bold">'.get_the_title($posts->ID).'</p>';
	$retHtml.=get_the_content();
	$retHtml.='</div>';

	endforeach; // ループの終了
	else :
	$retHtml.='<div class="gray fsize16">';
	$retHtml.='<p class="bold">新着情報はありません。</p>';
	$retHtml.='</div>';
	endif;
	wp_reset_postdata(); // 直前のクエリを復元する
	$post = $oldpost;

	return $retHtml;
}
add_shortcode('newslists', 'getCatItems');


function getCatItemsB($atts, $content = null) {
	extract(shortcode_atts(array(
		"num" => '30'
	), $atts));
	global $post;
	$oldpost = $post;
$retHtml="";

$retHtml.='<div id="breadcrumbs">';
 if ( is_single() ) :
$retHtml.='<a href="'.bloginfo('url').'">立川小児矯正なら近藤歯科クリニック</a>&nbsp;>&nbsp';
$cat = get_the_category();
$retHtml.=get_category_parents($cat[0], true, '&nbsp;>&nbsp;');
$retHtml.=get_page($parid)->post_title;
endif;

if ( is_page() ) :
$retHtml.='<a href="'.get_option('home').'">立川小児矯正なら近藤歯科クリニック</a>&nbsp;>&nbsp';
foreach ( array_reverse(get_post_ancestors($post->ID)) as $parid ) {
$retHtml.='<a href="'.get_page_link( $parid ).'" title="'.get_page($parid)->post_title.'">';
$retHtml.=get_page($parid)->post_title.'</a>&nbsp;>&nbsp';
}
$retHtml.=get_page($parid)->post_title;
endif;
$retHtml.='</div>';
$post = $oldpost;
	return $retHtml;
}
add_shortcode('breadcrumbs', 'getCatItemsB');


function growp_head_cleanup() {
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	global $wp_widget_factory;
	remove_action( 'wp_head',
		array(
			$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
			'recent_comments_style',
		)
	);
}
add_filter( 'init', 'growp_head_cleanup', 10 );
