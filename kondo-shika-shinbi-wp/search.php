<?php
/**
 * 検索結果用テンプレート
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */

if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title">
			<i class="fa fa-search"></i>
			<?php
			$search_text = __( 'Search Results for&#x3A; %s', 'growp' );
			printf( $search_text, '<span>「' . get_search_query() . '」</span>' ); ?></h1>
	</header><!-- .page-header -->

	<?php
	while ( have_posts() ) :

		the_post();
		GTemplate::get_project("post-item");

	endwhile;

	// growp_paging_nav();

else :

	get_template_part( 'templates/content', 'none' );

endif;
