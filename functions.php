<?php
/**
 * Buildora theme setup.
 *
 * @package Buildora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BUILDORA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function buildora_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support( 'custom-logo' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary', 'buildora' ),
			'footer'  => esc_html__( 'Footer', 'buildora' ),
		)
	);

	load_theme_textdomain( 'buildora', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'buildora_setup' );

/**
 * Footer widget area.
 */
function buildora_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'buildora' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Widgets shown in the footer area.', 'buildora' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'buildora_widgets_init' );

/**
 * Enqueue front-end assets.
 */
function buildora_enqueue_assets() {
	wp_enqueue_style( 'buildora-style', get_stylesheet_uri(), array(), BUILDORA_VERSION );
	wp_enqueue_script( 'buildora-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), BUILDORA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'buildora_enqueue_assets' );

/**
 * Enqueue editor assets.
 */
function buildora_enqueue_editor_assets() {
	wp_enqueue_style( 'buildora-editor', get_template_directory_uri() . '/assets/css/editor.css', array(), BUILDORA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'buildora_enqueue_editor_assets' );

/**
 * Register the Buildora pattern category.
 */
function buildora_register_pattern_category() {
	register_block_pattern_category(
		'buildora',
		array( 'label' => esc_html__( 'Buildora', 'buildora' ) )
	);
}
add_action( 'init', 'buildora_register_pattern_category' );

/**
 * Custom block styles.
 */
function buildora_register_block_styles() {
	register_block_style( 'core/button', array( 'name' => 'safety-outline', 'label' => esc_html__( 'Safety Outline', 'buildora' ) ) );
	register_block_style( 'core/group', array( 'name' => 'service-card', 'label' => esc_html__( 'Service Card', 'buildora' ) ) );
	register_block_style( 'core/image', array( 'name' => 'steel-frame', 'label' => esc_html__( 'Steel Frame', 'buildora' ) ) );
	register_block_style( 'core/heading', array( 'name' => 'safety-rule', 'label' => esc_html__( 'Safety Rule', 'buildora' ) ) );
}
add_action( 'init', 'buildora_register_block_styles' );

/**
 * Custom excerpt length.
 */
function buildora_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'buildora_excerpt_length' );

/**
 * Theme image URI helper for patterns.
 *
 * @param string $file Image file name inside assets/images.
 * @return string Escaped image URL.
 */
function buildora_img( $file ) {
	return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ) );
}

/**
 * Simple inline SVG icon helper.
 *
 * @param string $name Icon name.
 * @return string SVG markup.
 */
function buildora_icon( $name ) {
	$icons = array(
		'hammer'  => '<path d="M15 12l-8.5 8.5a2.12 2.12 0 1 1-3-3L12 9"/><path d="M17.6 15L22 10.6 13.4 2 9 6.4l5.6 5.6"/>',
		'home'    => '<path d="M3 10.5L12 3l9 7.5"/><path d="M5 9.5V21h14V9.5"/><path d="M9 21v-6h6v6"/>',
		'wrench'  => '<path d="M14.7 6.3a4.5 4.5 0 0 0-6 6L3 18l3 3 5.7-5.7a4.5 4.5 0 0 0 6-6L14 13l-3-3 3.7-3.7z"/>',
		'ruler'   => '<path d="M3 17L17 3l4 4L7 21l-4-4z"/><path d="M8 12l2 2M11 9l2 2M14 6l2 2"/>',
		'phone'   => '<path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.13.96.36 1.9.7 2.8a2 2 0 0 1-.45 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.25a2 2 0 0 1 2.1-.45c.9.34 1.84.57 2.8.7A2 2 0 0 1 22 16.9z"/>',
		'mail'    => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 6L2 7"/>',
		'pin'     => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/>',
		'clock'   => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>',
		'shield'  => '<path d="M12 2l8 3v6c0 5-3.5 9.5-8 11-4.5-1.5-8-6-8-11V5l8-3z"/><path d="M9 12l2 2 4-4"/>',
		'crane'   => '<path d="M4 21V8l16-5v5"/><path d="M4 8h4M20 8V3M8 21h8M12 8v13"/>',
	);
	if ( ! isset( $icons[ $name ] ) ) {
		return '';
	}
	return '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $icons[ $name ] . '</svg>';
}
