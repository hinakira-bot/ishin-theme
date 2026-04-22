<?php
/**
 * Title: 記事グリッド (3列)
 * Slug: ishin/post-grid
 * Categories: query, posts
 * Keywords: grid, posts, recent, 記事一覧
 * Description: 最新記事を3列グリッドで表示するパターン。トップページや固定ページで。
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-2-xl-font-size"><?php echo esc_html__( '最新の記事', 'ishin' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"4px"}}} /-->
				<!-- wp:post-date {"fontSize":"sm","textColor":"nibi"} /-->
				<!-- wp:post-title {"isLink":true,"level":3,"fontSize":"lg"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
