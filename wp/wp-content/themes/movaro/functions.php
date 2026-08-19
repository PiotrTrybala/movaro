<?php

/* global options */

add_filter('show_admin_bar', '__return_false');
add_filter('wpcf7_autop_or_not', '__return_false');

/* blocks */

add_action('init', 'register_acf_blocks');

function register_acf_blocks() {
    register_block_type(__DIR__ . "/blocks/hero");
    register_block_type(__DIR__ . "/blocks/about");
    register_block_type(__DIR__ . "/blocks/benefits");
    register_block_type(__DIR__ . "/blocks/work_benefits");
    register_block_type(__DIR__ . "/blocks/story");
    register_block_type(__DIR__ . "/blocks/introduction");
}

/* scripts & styles */

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function dynamicAssetVersion(string $filePath): string
{
    return file_exists($filePath)
        ? (string)filemtime($filePath)
        : '1.0';
}

function enqueue_scripts(): void
{
    $themeUrl = get_template_directory_uri();
    $themePath = get_template_directory();

    $cssFile = $themePath . '/dist/app.css';
    $jsFile = $themePath . '/dist/app.js';

    wp_enqueue_style(
        'app',
        $themeUrl . '/dist/app.css',
        [],
        dynamicAssetVersion($cssFile)
    );

    wp_enqueue_script(
        'app',
        $themeUrl . '/dist/app.js',
        ["jquery"],
        dynamicAssetVersion($jsFile),
        true
    );
}

/* menus */

add_action('init', 'register_menus');

function register_menus()
{
    register_nav_menus(
        array(
            "header-menu" => __("Menu nagłówka", 'movaro'),
        )
    );
}

/* option pages */

add_action('acf/init', function () {
	if (function_exists('acf_add_options_page')) {

		acf_add_options_page(array(
				'page_title' => 'Ustawienia ogólne',
				'menu_title' => 'Ustawienia ogólne',
				'menu_slug' => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect' => true
		));
    }
});