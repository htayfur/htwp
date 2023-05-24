<?php

/* TEMA PANELI */
if ( STYLESHEETPATH == TEMPLATEPATH ) {
define('OF_FILEPATH', TEMPLATEPATH);
define('OF_DIRECTORY', get_bloginfo('template_directory'));
} else {
define('OF_FILEPATH', STYLESHEETPATH);
define('OF_DIRECTORY', get_bloginfo('stylesheet_directory'));
}
/* #TEMA PANELI */

// Add theme support for WordPress features
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'audio', 'gallery', 'video' ) );
//

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'first-menu' => __( 'Birinci Menu' ),
            'second-menu' => __( 'İkinci Menu' )
        )
    );
}

function httotalpagenumber(){
    global $wp_query;
    echo $wp_query->max_num_pages;
}
function htcurrentpagenmber(){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    echo $paged;
}

// yazı özeti
function wpn_content_limit($content, $ilimit = false)
{
 $limit = ($ilimit) ? $ilimit : 650;
 $pad="...";
 $content = strip_tags($content);
 if(strlen($content) > $limit)
 {
 $content = substr($content,0,$limit);
 }
 echo $content." ".$pad;
}



?>