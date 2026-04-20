<?php
/**
 * ポリフィル層
 *
 * 古いPHP/WPバージョンで未定義の関数をフォールバック実装する。
 * 追加する際は必ず function_exists() で既存定義をチェックすること。
 *
 * @package IshinTheme
 */

declare(strict_types=1);

namespace IshinTheme\Compat;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Polyfill {

	public static function register(): void {
		// 現時点ではPHP 8.1+ / WP 6.1+ を必須としているため空。
		// 将来、さらに新しい関数を採用する際にここに追加する。
		//
		// 例:
		//   if ( ! function_exists( 'wp_interactivity_data_wp_context' ) ) {
		//       require __DIR__ . '/polyfills/interactivity.php';
		//   }
	}
}
