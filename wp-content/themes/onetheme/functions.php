<?php
// ?EnQue - Dependencies
// !Add Css
function fj_addstyle(){
  wp_enqueue_style('style',get_template_directory_uri()."/styles.css");
}
 add_action('wp_enqueue_scripts','fj_addstyle');

//  // !Remove File Versions
//  function remove_css_js_version( $src ) {
//   if( strpos( $src, '?ver=' ) )
//       $src = remove_query_arg( 'ver', $src );
//   return $src;
// }
// add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
// add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );




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
//Remove Elementor e-icons Error  Workaround

function remove_default_stylesheet() {
wp_deregister_style( 'elementor-icons' );
}
add_action( 'wp_enqueue_scripts', 'remove_default_stylesheet', '20' );



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



