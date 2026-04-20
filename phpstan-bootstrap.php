<?php
/**
 * PHPStan bootstrap — define theme constants so static analysis understands them.
 */

declare(strict_types=1);

if ( ! defined( 'ISHIN_VERSION' ) ) define( 'ISHIN_VERSION', '0.1.0' );
if ( ! defined( 'ISHIN_MIN_PHP' ) ) define( 'ISHIN_MIN_PHP', '8.1.0' );
if ( ! defined( 'ISHIN_MIN_WP' ) )  define( 'ISHIN_MIN_WP', '6.1.0' );
if ( ! defined( 'ISHIN_DIR' ) )     define( 'ISHIN_DIR', __DIR__ );
if ( ! defined( 'ISHIN_URI' ) )     define( 'ISHIN_URI', '' );
if ( ! defined( 'ABSPATH' ) )       define( 'ABSPATH', __DIR__ . '/' );
