<?php
/**
 * ISHIN Theme — 個人ブロガー向けWordPressテーマ
 *
 * @package IshinTheme
 * @license GPL-2.0-or-later
 * @link    https://github.com/hinakira-bot/ishin-theme
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * テーマ定数
 */
define( 'ISHIN_VERSION', '0.2.0' );
define( 'ISHIN_MIN_PHP', '8.1.0' );
define( 'ISHIN_MIN_WP', '6.1.0' );
define( 'ISHIN_DIR', get_template_directory() );
define( 'ISHIN_URI', get_template_directory_uri() );

/**
 * 最小構成のオートローダー (PSR-4: IshinTheme\ => src/)
 *
 * Composer未インストールでも動作するようフォールバック実装。
 */
spl_autoload_register( static function ( string $class ): void {
	$prefix   = 'IshinTheme\\';
	$base_dir = ISHIN_DIR . '/src/';

	if ( strncmp( $prefix, $class, strlen( $prefix ) ) !== 0 ) {
		return;
	}

	$relative = substr( $class, strlen( $prefix ) );
	$file     = $base_dir . str_replace( '\\', '/', $relative ) . '.php';

	if ( is_file( $file ) ) {
		require $file;
	}
} );

/**
 * 環境互換チェック (WP/PHPバージョン)
 * 非互換の場合、管理画面に警告を表示しテーマの初期化を停止する。
 */
if ( ! \IshinTheme\Compat\Environment::isSupported() ) {
	\IshinTheme\Compat\Environment::registerAdminNotice();
	return;
}

/**
 * ポリフィル層 (PHP/WP古いバージョン向け)
 */
\IshinTheme\Compat\Polyfill::register();

/**
 * テーマのブートストラップ
 */
add_action( 'after_setup_theme', static function (): void {
	// 翻訳
	load_theme_textdomain( 'ishin', ISHIN_DIR . '/languages' );

	// テーマサポート
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'appearance-tools' );

	// エディタースタイル
	add_editor_style( 'assets/css/base.css' );
} );

/**
 * フロント側のCSS enqueue
 */
add_action( 'wp_enqueue_scripts', static function (): void {
	wp_enqueue_style(
		'ishin-base',
		ISHIN_URI . '/assets/css/base.css',
		[],
		ISHIN_VERSION
	);
} );

/**
 * ブロックパターンカテゴリの追加
 */
add_action( 'init', static function (): void {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}
	register_block_pattern_category(
		'ishin',
		[ 'label' => __( 'ISHIN', 'ishin' ) ]
	);
} );

/**
 * Deprecation 監視 (本番環境ではログのみ)
 * PHP/WPアップグレード時の兆候を早期発見する。
 */
\IshinTheme\Compat\Deprecation::watch();
