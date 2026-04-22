<?php
/**
 * Title: 注意書きボックス (情報)
 * Slug: ishin/callout-info
 * Categories: text, call-to-action
 * Keywords: notice, info, callout, 注意, 情報
 * Description: 記事内で補足情報を目立たせたい時のボックス。
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"left":{"color":"var:preset|color|ai","width":"4px"}}},"backgroundColor":"kinari","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-kinari-background-color has-background" style="border-left-color:var(--wp--preset--color--ai);border-left-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"ai"} -->
	<p class="has-ai-color has-text-color" style="font-weight:700"><?php echo esc_html__( 'ℹ️ 補足情報', 'ishin' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'ここに補足したい内容を書きます。読者に"これは知っておくと良い"と伝えたい情報を。', 'ishin' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
