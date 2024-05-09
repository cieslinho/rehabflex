<?php
/**
 * @package Rehabflex Opole
 */

if ( ! defined( '_S_VERSION' ) ) {
  define( 'S_VERSION', '1.0.0' );
}


function rehabflex_scripts() {
  /**
   *  Main styles 
  */
  wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], false, 'all' );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/script-min.js', [], filemtime( get_template_directory() . '/assets/js/script-min.js' ), true );
  
  wp_enqueue_style( 'main-css' );
	wp_enqueue_script( 'main-js' );
}
add_action( 'wp_enqueue_scripts', 'rehabflex_scripts');

/**
 * Add admin styles and scripts
 */
function rehabflex_admin_style() {
	wp_enqueue_style( 'main-admin-style', get_template_directory_uri() . '/assets/css/admin.css', [], false, 'all' );
}
add_action( 'admin_enqueue_scripts', 'rehabflex_admin_style' );


function rehabflex_config(){
  register_nav_menus(
    array(
  'rehabflex_main_menu' => 'rehabflex Main Menu',
    )
  );
}

add_action('after_setup_theme', 'rehabflex_config', 0);
add_theme_support( 'title-tag' );

add_theme_support('post-thumbnails', array(
  'post',
  'page',
  'custom-post-type-name',
  ));

  function change_excerpt($excerpt) {
    return substr($excerpt, 0, 150) . '...';
  }
  
  add_filter('the_excerpt', 'change_excerpt');

  function trim_text($input, $length) {

    // If the text is already shorter than the max length, then just return unedited text.
    if (strlen($input) <= $length) {
      return $input;
    }
    
    // Find the last space (between words we're assuming) after the max length.
    $last_space = strrpos(substr($input, 0, $length), ' ');
    // Trim
    $trimmed_text = substr($input, 0, $last_space);
    // Add ellipsis.
    $trimmed_text .= '...';
    
    return $trimmed_text;
    }
  

    function li_menu_class($classes, $item, $args) {
      if($args->theme_location == 'rehabflex_main_menu') {
        $classes[] = 'nav__item';
      }
      if($args->theme_location == 'rehabflex_footer_info_menu') {
        $classes[] = 'footer__item';
      }
      return $classes;
    }
    add_filter('nav_menu_css_class','li_menu_class',1,3);


    function add_class_on_a_tag_first($classes, $item, $args)
    {
        if (isset($args->add_a_class)) {
            $classes['class'] = $args->add_a_class;
        }
    return $classes;
    }
    
    
    add_filter('nav_menu_link_attributes', 'add_class_on_a_tag_first', 1, 3);



    add_filter('wpcf7_autop_or_not', '__return_false');

    // add_filter('wpcf7_autop_or_not', '__return_false');    
    //   add_filter('wpcf7_form_elements', function($content) {  
    //  $find = ['/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '/<(span).*?class="\s*(?:.*\s)?wpcf7-checkbox(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i' , '/<(span).*?class="\s*(?:.*\s)?wpcf7-list-item(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i'];   
    //    $content = preg_replace( $find, '\2', $content);
    //              return $content; 
    //   });