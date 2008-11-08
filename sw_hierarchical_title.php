<?php
/*
Plugin Name: SW HierarchicalTitle
Plugin URI: http://scuderia-web.com/wordpress-plugin/sw_hierarchical_title.php
Description: タイトルをパンくずのような階層表示にするプラグインです。
Version: 1.0
Author: Scuderia-Web
Author URI: http://scuderia-web.com
*/

/*
リリースノート
2008.03.17	1.0		リリース
*/

// 【swPageTitle】- ページタイトル取得関数
// home				サイト名の表示有無　0:表示しない 1:先頭(初期値) 2:末尾
// separator		ページ名の区切り文字(初期値：「 &raquo; 」)
// home_separator	サイト名とページ名の区切り文字(初期値：「 | 」)
// disp				画面出力　0:しない 1:する(初期値)
function swPageTitle($home = 1, $separator = ' &raquo; ', $home_separator = ' | ', $disp = 1) {
	global $post, $wp_query, $wpdb;

	if(is_home()) {
		// homeの場合
		switch($home) {
			case 0:
				$title = "";
				break;
			default:
				$title = get_bloginfo('name');
				break;
		}
	} elseif(is_category()) {
		// カテゴリページの場合
		$title = single_cat_title('', false);
		
		$cat = $wp_query->get_queried_object();
		if($cat->category_parent != 0) {
			while(true) {
				$sql = "select * From $wpdb->categories where cat_ID = ".$cat->category_parent;
				$cat = $wpdb->get_row($sql);
				$title = $cat->cat_name.$separator.$title;
				if($cat->category_parent == 0) {
					break;
				}
			}
		}
		switch($home) {
			case 1:
				$title = get_bloginfo('name').$home_separator.$title;
				break;
			case 2:
				$title .= $home_separator.get_bloginfo('name');
				break;
		}
	} else {
		// 記事・ページの場合
		$data = $post;

		$title = $data->post_title;
		if($data->post_parent != 0) {
			while(true) {
				$data = wp_get_single_post($data->post_parent);
				$title = $data->post_title.$separator.$title;
				if($data->post_parent == 0) {
					break;
				}
			}
		}
		switch($home) {
			case 1:
				$title = get_bloginfo('name').$home_separator.$title;
				break;
			case 2:
				$title .= $home_separator.get_bloginfo('name');
				break;
		}
	}

	if($disp == 0) {
		return $title;
	} else {
		echo $title;
		return;
	}
}
?>