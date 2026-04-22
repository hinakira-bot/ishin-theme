<?php
/**
 * Title: シンプルなヒーローエリア
 * Slug: ishin/hero-simple
 * Categories: featured, banner
 * Description: トップページ等で使える、サイトタイトルと説明文のシンプルなヒーロー。
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"kinari","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-kinari-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"3xl"} -->
	<h1 class="wp-block-heading has-text-align-center has-3-xl-font-size"><?php echo esc_html__( 'ISHINへようこそ', 'ishin' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"nibi","fontSize":"lg"} -->
	<p class="has-text-align-center has-nibi-color has-text-color has-lg-font-size"><?php echo esc_html__( '個人ブログのためのシンプルで読みやすいテーマ。', 'ishin' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"sumi","textColor":"shironeri"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-shironeri-color has-sumi-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( '記事を読む', 'ishin' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
