# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1.0] - 2026-04-20

### Added

- Initial theme scaffold (Phase 0 of development plan).
- `style.css` theme header (ISHIN v0.1.0, GPL v2+).
- `theme.json` v3 schema with Japanese-inspired color palette (墨, 生成り, 朱, 紺, 藍, 松葉 etc.) and typography stack (明朝 / ゴシック / 等幅).
- `functions.php` with strict_types, minimal PSR-4 autoloader fallback, environment check gating, after_setup_theme bootstrap.
- `index.php` minimal fallback template.
- Environment compatibility layer (`src/Compat/`):
  - `Environment.php` — PHP 8.1+ / WP 6.1+ enforcement with admin notice on violation.
  - `Features.php` — runtime feature detection (FSE, Interactivity API, theme.json v3, Pattern API).
  - `Polyfill.php` — placeholder for future forward-compat polyfills.
  - `Deprecation.php` — PHP E_DEPRECATED watcher writing to debug.log when WP_DEBUG is on.
- `composer.json` with PSR-4 autoload and dev tooling (PHPStan, PHPCS, PHPUnit).
- `package.json` with `@wordpress/scripts` build toolchain.
- `.gitignore`, `.editorconfig`, `LICENSE` (GPLv2+), `README.md`, `CHANGELOG.md`.

### Notes

This is a clean-room implementation. No code has been copied from any other WordPress theme (commercial or free). All source files written from scratch referencing only WordPress official documentation and public web standards.
