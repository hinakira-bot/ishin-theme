# ISHIN — WordPress Theme

個人ブロガー向けのWordPressテーマ。控えめな和の意匠とモダンな技術基盤を両立させた、ゼロから書き起こしたクリーンルーム実装です。

## 特徴（目標）

- **FSE (Full Site Editing) ネイティブ対応** — `theme.json` + ブロックテンプレートベース
- **和の控えめな装飾** — ON/OFF可能なデコレーション（見出し枠・囲み・罫など）
- **アクセシビリティ重視** — WCAG 2.1 AA 準拠を目指す
- **モダンPHP** — PHP 8.1+ / 型宣言 / readonly / enum
- **モダンJS** — `@wordpress/scripts` / TypeScript
- **保守性** — PSR-4 / PHPStan L8 / PHPCS / PHPUnit
- **WP/PHPバージョン互換層を初めから内蔵** — 将来のアップグレードに強い

## ステータス

🚧 **Phase 0 — 基盤構築中**

現状は最小限の足場のみ。機能実装はこれから。詳細な進行計画は `docs/` 参照（随時追加）。

## 要件

- WordPress 6.1+
- PHP 8.1+
- Node.js 20+ (開発時)
- Composer 2+ (開発時)

## ライセンス

GPL v2 or later — WordPressテーマの標準ライセンスに準拠。

詳細は [`LICENSE`](./LICENSE) を参照。

## 独立性の声明 (Independent Work Statement)

このテーマは**完全にゼロから書き起こされた独立した作品**です。商用/フリーを問わず、他のWordPressテーマのソースコードを一切参照・流用していません。

設計・実装のいずれにおいても、参照元は以下のみです:

- WordPress 公式ドキュメント（developer.wordpress.org）
- WordPress 公式テーマ（Twenty Twenty-Four 等）
- MDN Web Docs
- PHP/JavaScript 公式仕様書

アイデア・機能レベルで先行する各種WordPressテーマからインスピレーションを得ることはありますが、コード・ファイル構造・UI配置等の**具体的な表現は独自に設計**しています。

## 開発

```bash
# 依存インストール
composer install
npm install

# 開発サーバー (CSSビルド watch)
npm run start

# 本番ビルド
npm run build

# 静的解析
composer analyse
composer lint

# テスト
composer test
```

## コントリビュート

現在のところクローズド開発中。将来的にコントリビュート歓迎予定。

## Author

[hinakira-bot](https://github.com/hinakira-bot)
