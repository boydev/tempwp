<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

add_theme_support('custom-header', array(
    'video' => true,
));

function conditional_content($content)
{
    if (is_single()) {
        $content .= "<p>Additional Content for single post </p>";
    } else if (is_archive()) {
        $content .= "<p>Archive Page Content for each post </p>";
    }
    return $content;
}

add_filter('the_content', 'conditional_content');

function conditional_user_content($content) {
    if( is_user_logged_in() ){
        $content .= "<p>Additional Content for members </p>";
    }
    return $content;
}
add_filter('the_content', 'conditional_user_content');

function validate_page_restrictions(){
    global $wp_query;
    if (! isset($wp_query->post->ID) ) {
        return;
    }

    if(is_page('2') && ! is_user_logged_in() ){ // post id = 2
        $url = site_url();
        wp_redirect($url);
        exit;
    }
}
add_action('template_redirect', 'validate_page_restrictions');


?>
