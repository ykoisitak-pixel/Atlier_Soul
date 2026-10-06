<?php

/**
 * <titleタグを出力する>
 */
add_theme_support('title_tag');
add_theme_support('post-thumbnails');
/**
 * <管理画面でのメニュー設定を有効化する>
 */
add_theme_support('menus');
/**
 * <TOPページの投稿表示件数を5件にする>
 */
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts(mixed $query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        return;
    }
}
/**
 * Contact form 7の時には整形機能をOffにする
 */
add_filter('wpcf7_autop_or_not', 'my_wpcf7_autop');
function my_wpcf7_autop()
{
    return false;
}
