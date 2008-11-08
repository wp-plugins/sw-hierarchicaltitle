=== SW HierarchicalTitle ===
Contributors: Scuderia-Web
Donate link: http://scuderia-web.com/
Tags: title, post, path, template, theme
Requires at least: 2.2.3
Tested up to: 2.2.3
Stable tag: 1.0

タイトルをパンくずのような階層表示にします。
This is a plug-in that makes the title a hierarchical display like the topic 
path. 


== Description ==
**It is being developed by the Japanese. The explanation in English doesn't exist or there is a possibility that the grammar is not accurate.**

このプラグインは[ScuderiaWeb](http://scuderia-web.com/)によって開発されたタイトルをパンくずのような階層表示にするものです。

This is a plug-in that makes the title a hierarchical display like the topic 
path. 

SEO対策を行う上で、titleタグにキーワードを含めることはとても重要ですが、階層を持ったページの場合、下位ページのタイトルにも上位ページのタイトルを含める必要が出てきてしまいます。
また、パンくずナビを自動で表示している場合、同じ単語が繰り返し出てきてしまうなどの問題もあるので、そのようなときに活用してください。

あまり長いタイトルの場合、ブラウザや検索エンジンで途中までしか表示されないという問題もありますので、各ページの長さが長い場合は使い方を検討してください。
尚、RFC1866（HTML2.0の仕様書）ではタイトルの長さは64文字以内にすべきという記述がありますが、現在一般的に用いられている HTML4.01やXHTML1.0、1.1ではそのような規定はありません。Yahoo!では半角75文字以上のタイトルは「…」と省略されてしまいますので、70文字前後を目安に、それを越えるようであればあまりオススメはしません。

== Installation ==
1. ダウンロード後解凍して出来たファイルをWordPressのpluginsフォルダにアップロードします。
2. 管理画面の「プラグイン」からSW HierarchicalTitleを有効化します。
3. テーマファイルで関数をコールします。

== Screenshots ==
[ScuderiaWebのプラグインページ](http://scuderia-web.com/wordpress-plugin/sw_hierarchical_title.php)をご覧ください。

== Function ==

**swPageTitle(home, 'separator', 'home_separator', disp)**

* home - サイト名の表示有無　0:表示しない 1:先頭(初期値) 2:末尾
* separator - ページ名の区切り文字(初期値：「 &raquo; 」)
* home_separator - サイト名とページ名の区切り文字(初期値：「 | 」)
* disp - 画面出力　0:出力しない 1:出力する(初期値)



== Frequently Asked Questions ==
現在準備中です。

== How To Ask Questions ==
不具合、ご要望、質問等は下記までご連絡ください。
[wp@scuderia-web.com](mailto:wp@scuderia-web.com)

== Changelog ==
* 1.0 - 2008.03.18 - リリース
