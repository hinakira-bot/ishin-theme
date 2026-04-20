<?php
/**
 * 機能検出レイヤ
 *
 * WPバージョン依存機能の存在確認を集約する。
 * バージョン番号で分岐するより、実際の関数/クラス存在を確認する方が安全。
 *
 * @package IshinTheme
 */

declare(strict_types=1);

namespace IshinTheme\Compat;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Features {

	/**
	 * Full Site Editing テンプレートが使えるか
	 */
	public static function hasBlockTemplates(): bool {
		return function_exists( 'wp_is_block_theme' ) && wp_is_block_theme();
	}

	/**
	 * Interactivity API (WP 6.5+) が使えるか
	 */
	public static function hasInteractivityApi(): bool {
		return function_exists( 'wp_interactivity_state' )
			|| class_exists( 'WP_Interactivity_API' );
	}

	/**
	 * theme.json v3 が使えるか (WP 6.6+)
	 */
	public static function hasThemeJsonV3(): bool {
		global $wp_version;
		return version_compare( (string) $wp_version, '6.6.0', '>=' );
	}

	/**
	 * ブロックパターン REST API が使えるか (WP 6.0+)
	 */
	public static function hasPatternApi(): bool {
		return function_exists( 'register_block_pattern' );
	}
}
