<?php
/**
 * Title: 注意書きボックス (警告)
 * Slug: ishin/callout-warning
 * Categories: text, call-to-action
 * Keywords: warning, alert, 警告, 注意
 * Description: 記事内で注意を促したい時の目立つボックス。
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"left":{"color":"var:preset|color|shu","width":"4px"}}},"backgroundColor":"kinari","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-kinari-background-color has-background" style="border-left-color:var(--wp--preset--color--shu);border-left-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"shu"} -->
	<p class="has-shu-color has-text-color" style="font-weight:700"><?php echo esc_html__( '⚠️ 注意', 'ishin' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'ここに注意事項を書きます。読者に必ず気をつけてほしい内容を明確に。', 'ishin' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
