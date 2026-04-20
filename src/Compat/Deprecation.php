<?php
/**
 * Deprecation 監視
 *
 * PHP E_DEPRECATED をキャッチして debug.log に記録する。
 * WP_DEBUG_LOG が有効な場合のみ動作。
 * PHP 8.x→9.x 等の移行時、廃止予定コードを早期発見するための仕組み。
 *
 * @package IshinTheme
 */

declare(strict_types=1);

namespace IshinTheme\Compat;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Deprecation {

	private static bool $active = false;

	public static function watch(): void {
		if ( self::$active ) {
			return;
		}
		if ( ! ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {
			return;
		}

		self::$active = true;

		set_error_handler(
			static function ( int $errno, string $errstr, string $errfile, int $errline ): bool {
				if ( $errno === E_DEPRECATED || $errno === E_USER_DEPRECATED ) {
					// ISHIN 配下の deprecation のみ記録 (他プラグインのノイズを除外)
					if ( strpos( $errfile, ISHIN_DIR ) === 0 ) {
						error_log( sprintf( '[ISHIN][DEPRECATED] %s in %s:%d', $errstr, $errfile, $errline ) );
					}
				}
				return false; // 通常のハンドラにも伝搬させる
			},
			E_DEPRECATED | E_USER_DEPRECATED
		);
	}
}
