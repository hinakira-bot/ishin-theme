# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.2.0] - 2026-04-20

### Added (Phase 1 — FSE基盤)

- **FSEテンプレート** (`templates/`):
  - `index.html`, `home.html` (ブログ一覧)
  - `single.html` (個別記事: コメント・ナビゲーション込み)
  - `page.html` (固定ページ)
  - `archive.html` (カテゴリー・タグ・日付アーカイブ)
  - `search.html` (検索結果)
  - `404.html` (エラーページ)
- **テンプレートパーツ** (`parts/`):
  - `header.html` (ロゴ・サイトタイトル・ナビゲーション)
  - `footer.html` (コピーライト・ページトップリンク)
  - `sidebar.html` (最近の投稿・カテゴリー)
- **ブロックパターン** (`patterns/`):
  - `hero-simple.php` (シンプルなヒーローエリア)
  - `callout-info.php` / `callout-warning.php` (注意書きボックス)
  - `post-grid.php` (3列の記事グリッド)
- **基本CSS** (`assets/css/base.css`):
  - フォーカスリング強化
  - 引用・コード・テーブルの読みやすさ改善
  - モバイルタップ領域
  - `prefers-reduced-motion` 尊重
- **functions.php 拡張**:
  - フロント側 `wp_enqueue_scripts` で base.css 読み込み
  - `add_editor_style()` でエディタと同期
  - `register_block_pattern_category( 'ishin' )` でパターンをまとめる

### Changed

- **デザイン方針の明確化**: デフォルトは「誰でも使えるモダン・ミニマル」。和テイストは配色のみに留め、装飾要素はPhase 2以降でブロックスタイル/バリエーションとしてOPT-INで提供予定。
- theme.json パレットを16色→8色に縮小（墨/鈍/灰色/銀鼠/生成り/白練/朱/藍）。和由来の色名を残しつつ、ブログ用途に十分かつ万人向けのミニマム構成へ。
- デフォルト見出しフォントを 明朝 → **ゴシック** に変更。明朝は選択肢として利用可能。
- `settings.custom.decoration` を `settings.custom.wa-mode` にリネームし、OPT-IN前提を明示。

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
