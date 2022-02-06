<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA1310979-kmusubi');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', '');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'm!n&dD+fPQc`?X~|26@)ee|fay49wVum8lm{$n_vlZQH7-Bu$OII8Mo[{WJx^?kI');
define('SECURE_AUTH_KEY', 'lUC#g+Ipv47]!VYZhO=jty[EbQQ&Nv5F`:`$gBDOg4;b#~I(|4/pcq3t`kr|rH7K');
define('LOGGED_IN_KEY', 'xedJFYFpWd39s;9IST;QJR^FZ*K]A9dqj5d#Er`Lt3%rr|333(j+d${6]#Q/AD!/');
define('NONCE_KEY', '*^}}S,he^bI7r3,a)co+{sAlQiyy_*`ekQGvyTtZB":qj-%Z}"WXl]A.=<73b:;B');
define('AUTH_SALT', '}2dG$V!]@%Cp,4o5YBJY5[~_z&glFx{<gR50"Y$yv@-fi(r|?K6j@{p5^.oj@)Wl');
define('SECURE_AUTH_SALT', 'aK"+igA["I<i+4u8Ho[lA0<x"[>7?6}i6-1ul@)W({Z6mb|y2HngMQ:(Nol@jkvI');
define('LOGGED_IN_SALT', 'rSVH$qTF9D[:R,%=EVaR@.qLQ!RCieR;5(w@BFngYT<3{ooeFZ/JME,^-Cx!5dm#');
define('NONCE_SALT', '#!"iq4g;QFp%mbK2PIKtyCdQ>O)9d;"(#a%qB5I^"2Hd4![Rkcpb_j`;dc;bYW3>');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp20210926112957_';

/* added in 2021/9/16 for upload gif */
define('ALLOW_UNFILTERED_UPLOADS', true);


/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */
//カスタマイズ
define('WP_POST_REVISIONS', 1);//リビジョンの数を指定

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
