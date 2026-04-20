<?php
/**
 * Fallback template.
 *
 * FSE (Full Site Editing) 対応テーマのため、
 * 通常は templates/*.html が優先されます。
 * このファイルは WP がFSEを認識できない最終フォールバックです。
 *
 * @package IshinTheme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="primary" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e( '記事が見つかりませんでした。', 'ishin' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
