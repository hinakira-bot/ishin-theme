<?php
/**
 * 環境互換チェック (WP/PHPバージョン)
 *
 * @package IshinTheme
 */

declare(strict_types=1);

namespace IshinTheme\Compat;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Environment {

	/**
	 * 最小要件を満たしているか判定する
	 */
	public static function isSupported(): bool {
		return self::isPhpSupported() && self::isWpSupported();
	}

	public static function isPhpSupported(): bool {
		return version_compare( PHP_VERSION, ISHIN_MIN_PHP, '>=' );
	}

	public static function isWpSupported(): bool {
		$wp_version = self::currentWpVersion();
		return version_compare( $wp_version, ISHIN_MIN_WP, '>=' );
	}

	public static function currentWpVersion(): string {
		global $wp_version;
		return (string) ( $wp_version ?? '0.0.0' );
	}

	/**
	 * 非互換時の管理画面警告を登録する
	 */
	public static function registerAdminNotice(): void {
		add_action( 'admin_notices', static function (): void {
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}

			$messages = [];

			if ( ! self::isPhpSupported() ) {
				$messages[] = sprintf(
					/* translators: 1: 要求PHP版 2: 現在PHP版 */
					__( 'ISHINテーマは PHP %1$s 以上が必要です（現在: %2$s）。', 'ishin' ),
					esc_html( ISHIN_MIN_PHP ),
					esc_html( PHP_VERSION )
				);
			}

			if ( ! self::isWpSupported() ) {
				$messages[] = sprintf(
					/* translators: 1: 要求WP版 2: 現在WP版 */
					__( 'ISHINテーマは WordPress %1$s 以上が必要です（現在: %2$s）。', 'ishin' ),
					esc_html( ISHIN_MIN_WP ),
					esc_html( self::currentWpVersion() )
				);
			}

			if ( $messages === [] ) {
				return;
			}

			printf(
				'<div class="notice notice-error"><p><strong>ISHIN</strong><br>%s</p></div>',
				wp_kses_post( implode( '<br>', $messages ) )
			);
		} );
	}
}
