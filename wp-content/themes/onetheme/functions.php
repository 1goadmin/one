<?php

// !Remove File Versions
function remove_css_js_version( $src ) {
if( strpos( $src, '?ver=' ) )
      $src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );
// !Remove File Versions

// !Remove Gutenberg Block-Library
function webapptiv_remove_block_library_css()
{
wp_dequeue_style( 'wp-block-library' ); }
add_action( 'wp_enqueue_scripts', 'webapptiv_remove_block_library_css' );
// !Remove Gutenberg Block-Library

// !Remove Elementor e-icons Error  Workaround
function remove_default_stylesheet() {
  wp_deregister_style( 'elementor-icons' );
  }
add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', '20' );
// !Remove Elementor e-icons Error  Workaround

// !Remove the WordPress  jquery migrate
if ( !is_admin() ) wp_deregister_script('jquery');
function remove_jquery_migrate( $scripts ) {
  if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
       $script = $scripts->registered['jquery'];
  if ( $script->deps ) {
// Check whether the script has any dependencies

       $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
}
}
}
// !Remove the WordPress default jquery
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
// !Remove the WordPress default jquery


// ?EnQue - Dependencies
// !Add Scripts
function fj_addscripts(){
  wp_enqueue_script('scripts',get_template_directory_uri()."/script.js",array(),'1.0','all');
}
 add_action('wp_enqueue_scripts','fj_addscripts');
 //?EnQue - Dependencies
// Post Thumbnails
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
// Post Thumbnails
// Support for custom Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
$defaults = array(
'height'      => 100,
'width'       => 400,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// Support for custom Logo


// Allow SVG
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
 }
 add_filter('upload_mimes', 'cc_mime_types');
// Allow SVG


// Comment Reply Fix
function load_script_for_fake_threading() {
	if (is_singular()) wp_enqueue_script('comment-reply');
  }
  add_action('wp_enqueue_scripts','load_script_for_fake_threading');
// Comment Reply Fix
?>



