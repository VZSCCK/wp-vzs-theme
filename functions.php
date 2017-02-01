<?php
//error_reporting(0);
define('BASE_URL', get_template_directory_uri());

add_theme_support( 'post-thumbnails' );

add_image_size( 'gallery', 300, 200, true); 


add_action( 'init', 'register_my_menus' ); 

function register_my_menus() {
register_nav_menus(
array(
'header' => __( 'Menu 1' )
)
);
}
;

function soi_login_redirect($redirect_to, $request, $user) { 
  return (is_array($user->roles) && in_array('administrator', $user->roles)) ? admin_url() : site_url(); 
} 
add_filter('login_redirect', 'soi_login_redirect', 10, 3);

function new_nav_menu_items($items, $args) {
    if( $args->theme_location == 'header' ){
        
        $afterlink = '<li class="special-link species-2 '.$act.'"><a href="http://shop.vzs.cz/" target="_blank">E-shop</a></li>';
        
        $items = $items . $afterlink;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items', 10, 2 );



function choose_widgets_init() {

register_sidebar( array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ) );



    
}
add_action( 'widgets_init', 'choose_widgets_init' );


/*add_filter( 'acf/fields/post_object/query', 'change_posts_order' );
function change_posts_order( $args ) {
  $args['orderby'] = 'title';
  $args['order'] = 'ASC';
  return $args;
}*/

function clear_func( $atts ) {
  return "<br style=\"clear:both\">";
}
add_shortcode( 'clear', 'clear_func' );


function button_func( $atts ) {
  $text = $atts['text'];
  $url = $atts['url'];
  return '<a href="'.$url.'" class="button">'.$text.'</a>';
}
add_shortcode( 'button', 'button_func' );


function custom_length_excerpt($word_count_limit) {
    $content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $word_count_limit);
}

function custom_service_excerpt($content, $word_count_limit) {
    //$content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $word_count_limit);
}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



function wpb_list_child_pages($pid) {
       
      global $post;
       
      
      if( $post->post_parent != 0 ) {
       
          $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0&depth=1' );
     
      }
       
      if ( $childpages ) {
       
          $string = $childpages;
      } else {
          if( $post->post_parent != 0 ) { $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1' ); }
          $string = $childpages;
      }
       
     return $string;
      
    }
      
    add_shortcode('wpb_childpages', 'wpb_list_child_pages');

    function wpb_list_child_pages_list($pid) {
       
      global $post;

      $childs = get_pages('child_of='.$pid);
      
      if( count( $childs ) != 0 ) { 
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $pid . '&echo=0&depth=1' );
       } else {

          if($post->post_parent != 0) {$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0&depth=1' );}

       }
       
      //$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $pid . '&echo=0&depth=1' );
       
      if ( $childpages ) {
       
          $string = $childpages;
      } 
       
     return $string;
      
    }
      
    



    function get_category_id($id){
      if(function_exists('icl_object_id')) {
        return icl_object_id($id,'category',true);
      } else {
        return $id;
      }
    }

    function get_page_id($id){
      if(function_exists('icl_object_id')) {
        return icl_object_id($id,'page',true);
      } else {
        return $id;
      }
    }

    function get_post_id($id){
      if(function_exists('icl_object_id')) {
        return icl_object_id($id,'post',true);
      } else {
        return $id;
      }
    }



?>
