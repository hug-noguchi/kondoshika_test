<?php
/**
 * Setup script for this theme
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * =====================================================''
 */

/**
 * テーマのセットアップ
 * @return void
 */


function growp_setup() {

	load_theme_textdomain( 'growp', get_template_directory() . '/languages' );
	load_theme_textdomain( 'tgmpa', get_template_directory() . '/languages' );

	// automatic feed をサポート
	add_theme_support( 'automatic-feed-links' );

	// パンくず をサポート
	add_theme_support( 'growp-breadcrumbs' );

	// ページネーション をサポート
	add_theme_support( 'growp-pagination' );

	// アイキャッチ画像のサポート
	add_theme_support( 'post-thumbnails' );

	// メニューのサポート
	add_theme_support( 'menus' );

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

	// editor-style を登録
	add_editor_style( GROWP_STYLESHEET_URL );

	add_filter( 'growp_asset_url', function ( $url ) {
		return $url . '?ver=' . GROWP_VERSIONING;
	} );
}

add_action( 'after_setup_theme', 'growp_setup' );

/**
 * wp_head() で出力されるタグの調整
 *
 * @return void
 */
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


/**
 * 著者一覧を表示しない
 */
function growp_protect_authorpage() {
	if ( is_author() ) {
		wp_redirect( home_url( '/404/' ) );
		exit;
	}
}

add_action( 'template_redirect', 'growp_protect_authorpage' );


// 登録のサンプル
function growp_register_menus() {
	new GROWP_MenuPosts( 'global_nav', 'グローバルナビゲーション' );
}

add_action( "registered_taxonomy", "growp_register_menus" );


/**
 * 編集者の権限を変更し、ユーザーを追加することができるように
 */
function growp_add_editor_roles() {
	$role = get_role( 'editor' );
	$role->add_cap( 'delete_users' );
	$role->add_cap( 'create_users' );
	$role->add_cap( 'remove_users' );
	$role->add_cap( 'edit_users' );
	$role->add_cap( 'list_users' );
}

add_action( 'admin_init', 'growp_add_editor_roles' );

/**
 * 管理者以外は新規ユーザー登録で管理者権限アカウントを追加できないように
 */
function growp_filter_editable_roles( $all_roles ) {

	$current_user = wp_get_current_user();
	if ( isset( $current_user->roles[0] ) && $current_user->roles[0] !== "administrator" ) {
		unset( $all_roles["administrator"] );
	}

	return $all_roles;
}

add_filter( "editable_roles", "growp_filter_editable_roles" );

/**
 * TinyMCEのspanタグ等の自動削除を停止
 */
function growp_override_mce_options( $init_array ) {
	global $allowedposttags;

	$init_array['valid_elements']          = '*[*]';
	$init_array['extended_valid_elements'] = '*[*]';
	$init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
	$init_array['indent']                  = true;
	$init_array['wpautop']                 = false;
	$init_array['force_p_newlines']        = false;

	return $init_array;
}

add_filter( 'tiny_mce_before_init', 'growp_override_mce_options' );

/**
 * ページヘッダーのフィルター
 *
 * @param $init_array
 */
function growp_page_headers( $pageheaders ) {
	// ACF での更新をサポートする際
	// if ( is_page() ) {
	// 	$_pageheaders            = array(
	// 		'title'    => get_field( "title", get_the_ID() ),
	// 		'subtitle' => get_field( "subtitle", get_the_ID() ),
	// 		'image'    => get_field( "image", get_the_ID() ),
	// 	);
	// 	$pageheaders["title"]    = ( isset( $_pageheaders["title"] ) && $_pageheaders["title"] ) ? $_pageheaders["title"] : $pageheaders["title"];
	// 	$pageheaders["subtitle"] = ( isset( $_pageheaders["subtitle"] ) && $_pageheaders["subtitle"] ) ? $_pageheaders["subtitle"] : $pageheaders["subtitle"];
	// 	$pageheaders["image"]    = ( isset( $_pageheaders["image"] ) && $_pageheaders["image"] ) ? wp_get_attachment_image_url( $_pageheaders["image"], 'full' ) : $pageheaders["image"];
	// }
	return $pageheaders;
}

add_filter( "growp/page_header", 'growp_page_headers' );

function growp_icpo_admin_style() {
?>
<style>#the-list .ui-sortable-placeholder {display:none;}</style>
<?php
}
add_action( 'admin_head', 'growp_icpo_admin_style' );
 



