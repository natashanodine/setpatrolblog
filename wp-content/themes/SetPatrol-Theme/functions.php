<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    
function first_image () {
    global $post;   // Assuming that this is in The Loop.
    
    $images = get_posts (array (
        'numberposts' => 1,
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'post_parent' => $post->ID,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));
    
    if (count ($images) == 1) {
        $image = $images [0];
        
        $image = wp_get_attachment_image_src ($image->ID, 'full');
        
        echo '<img src="'.esc_url ($image [0]).'" alt="" />';
    }
}

?>