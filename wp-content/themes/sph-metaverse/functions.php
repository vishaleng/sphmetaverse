<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *

 */

if (!function_exists('sph_meta')) {

	function sph_meta()
	{

		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'sphone'),
				'footer'  => esc_html__('Secondary menu', 'sphone'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
	}
}
add_action('after_setup_theme', 'sph_meta');

// Load style and JS and Fonts

function sphmeta_enqueue_custom_styles()
{

	wp_enqueue_script('jquery');
	// Enqueue Google Fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300|Roboto+Slab:700|Shadows+Into+Light+Two|Oswald', array(), null);
	// Enqueue Font Awesome icons
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css');
	wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	// Enqueue your custom CSS file
	wp_enqueue_style('slider-css', get_stylesheet_directory_uri() . '/assets/css/slider.css');
	wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/project_custom.css');

	wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/assets/js/project_custom.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'sphmeta_enqueue_custom_styles');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('SPH theme Settings'),
        'menu_title' => __('SPH Settings'),
        'menu_slug' => 'sph-theme-settings',
        'capability' => 'manage_options',
        'position' => 30,
        'icon_url' => 'dashicons-admin-generic',
    ));
}
//hide default editor on home page only
function hide_default_page_editor($use_block_editor, $post)
{
	if (is_admin() && $post->ID == get_option('page_on_front')) {
		return false; // Hide the editor
	}
	return $use_block_editor;
}
add_filter('use_block_editor_for_post', 'hide_default_page_editor', 10, 2);
