<?php 
//コンテンツの幅をセット
if(! isset( $content_width)){
    $content_width = 723;
}

function custom_theme_setup(){
    //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');

    //タイトルタグを動的に出力
    add_theme_support('title-tag');

    //ブロックエディタ用のCSSを有効化
    add_theme_support('wp-block-styles');

    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support('responsive-embeds');

    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(231,177,false);

    //カスタムメニュー有効化、メニューの位置を設定
    register_nav_menus(
        array(
            'globalnav' => 'グローバルナビゲーション',
        )
    );

    register_nav_menus(
        array(
            'footernav' => 'フッターナビゲーション',
        )
    );

}
add_action('after_setup_theme','custom_theme_setup');

function myportfolio_scripts(){
    wp_enqueue_style(
        'base-style', //ハンドル名
        get_stylesheet_uri(), //ファイルのパス
        array(), //依存関係
        '1.0', //バージョン指定
        'all' //メディアタイプ
    );

    wp_enqueue_script(
        'script',
        esc_url(get_theme_file_uri('js/script.js')),
        array('jquery'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts','myportfolio_scripts');

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('',false);
    } elseif (is_tag()) {
        $title = single_tag_title('',false);
	} elseif (is_tax()) {
	    $title = single_term_title('',false);
	} elseif (is_post_type_archive() ){
		$title = post_type_archive_title('',false);
	} elseif (is_date()) {
	    $title = get_the_time('Y年n月');
	} elseif (is_search()) {
	    $title = '検索結果：'.esc_html( get_search_query(false) );
	} elseif (is_404()) {
	    $title = '「404」ページが見つかりません';
	} else {

	}
    return $title;
});