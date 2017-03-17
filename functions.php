<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Sidebar Widget ---*/
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    /*--- Index Page Widgets ---*/
    register_sidebar( array(
      'name'          => ('Intro 1 Widget'),
      'id'            => 'home-intro1-widget',
      'description'   => 'Widget intro image on homepage',
      'before_widget' => '<div class="home-intro1-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1>',
      'after_title'   => '</h1>'
    ));
    register_sidebar( array(
      'name'          => ('Intro 2 Widget'),
      'id'            => 'home-intro2-widget',
      'description'   => 'Widget intro copy on homepage',
      'before_widget' => '<div class="home-intro2-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1>',
      'after_title'   => '</h1>'
    ));
    register_sidebar( array(
    'name'          => ('About 1 Widget'),
    'id'            => 'home-about1-widget',
    'description'   => 'Widget about copy on homepage',
    'before_widget' => '<div class="home-about1-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar( array(
    'name'          => ('About 2 Widget'),
    'id'            => 'home-about2-widget',
    'description'   => 'Widget about image on homepage',
    'before_widget' => '<div class="home-about2-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
  register_sidebar( array(
  'name'          => ('Events 1 Widget'),
  'id'            => 'home-events1-widget',
  'description'   => 'Widget events video on homepage',
  'before_widget' => '<div class="home-events1-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
));
register_sidebar( array(
  'name'          => ('Events 2 Widget'),
  'id'            => 'home-events2-widget',
  'description'   => 'Widget events copy on homepage',
  'before_widget' => '<div class="home-events2-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
));

    /*--- About Page Widgets ---*/

    register_sidebar( array(
      'name'          => ('About Header Widget'),
      'id'            => 'about-header-widget',
      'description'   => 'Widget header image about page',
      'before_widget' => '<div class="about-header-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    register_sidebar( array(
      'name'          => ('About Image 1 Widget'),
      'id'            => 'about-image1-widget',
      'description'   => 'Widget image 1 about page',
      'before_widget' => '<div class="about-image1-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    register_sidebar( array(
      'name'          => ('About Copy 1 Widget'),
      'id'            => 'about-copy1-widget',
      'description'   => 'Widget copy 1 about page',
      'before_widget' => '<div class="about-copy1-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    register_sidebar( array(
      'name'          => ('About Copy 2 Widget'),
      'id'            => 'about-copy2-widget',
      'description'   => 'Widget copy 2 about page',
      'before_widget' => '<div class="about-copy2-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

    register_sidebar( array(
      'name'          => ('About Image 2 Widget'),
      'id'            => 'about-image2-widget',
      'description'   => 'Widget image 2 about page',
      'before_widget' => '<div class="about-image2-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));

/*--- Contact Page Widgets ---*/

register_sidebar( array(
  'name'          => ('Contact Image Widget'),
  'id'            => 'contact-image-widget',
  'description'   => 'Contact Image',
  'before_widget' => '<div class="contactimage">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
));

register_sidebar( array(
  'name'          => ('Contact Info Widget'),
  'id'            => 'contact-info-widget',
  'description'   => 'Contact Info',
  'before_widget' => '<div class="contactinfo">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
));

register_sidebar( array(
  'name'          => ('Contact Form Widget'),
  'id'            => 'contact-form-widget',
  'description'   => 'Contact From',
  'before_widget' => '<div class="form">',
  'after_widget'  => '</div>',
  'before_title'  => '<h2>',
  'after_title'   => '</h2>'
));


/*------ Events Page Widgets---------------*/
  register_sidebar( array(
  'name'          => ('Events Top Widget'),
  'id'            => 'eventstop-widget',
  'description'   => 'Widget events 1',
  'before_widget' => '<div class="eventstop-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

/*-- Events Foosball Widgets--*/

  register_sidebar( array(
  'name'          => ('Events Foosball Text Widget'),
  'id'            => 'eventsfoosball-widget',
  'description'   => 'Widget foosball text events',
  'before_widget' => '<div class="eventsfoosball-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

  register_sidebar( array(
  'name'          => ('Events Foosball Widget'),
  'id'            => 'events2-widget',
  'description'   => 'Widget foosball events',
  'before_widget' => '<div class="events2-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

/*-- Events Masquerade Ball Widgets --*/
  register_sidebar( array(
  'name'          => ('Events Ball Text Widget'),
  'id'            => 'eventsmball-widget',
  'description'   => 'Widget Mball text events',
  'before_widget' => '<div class="eventsmball-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

  register_sidebar( array(
  'name'          => ('Events Ball Widget'),
  'id'            => 'events3-widget',
  'description'   => 'Widget ball events',
  'before_widget' => '<div class="events3-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

/*-- Events Making a Difference Widgets --*/
  register_sidebar( array(
  'name'          => ('Events Difference Text Widget'),
  'id'            => 'eventsdifftext-widget',
  'description'   => 'Widget Difference text events',
  'before_widget' => '<div class="eventsdifftext-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

  register_sidebar( array(
  'name'          => ('Events Difference Gallery Widget'),
  'id'            => 'eventsdiffgallery-widget',
  'description'   => 'Widget Difference Gallery events',
  'before_widget' => '<div class="eventsdiffgallery-widget">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3>',
  'after_title'   => '</h3>'
));

/*----- Resources Widgets in Footer--------*/
  register_sidebar( array(
    'name'          => ('Resources 1 Widget'),
    'id'            => 'resources1-widget',
    'description'   => 'Widget resources section 1 in footer',
    'before_widget' => '<div class="resources1-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar( array(
    'name'          => ('Resources 2 Widget'),
    'id'            => 'resources2-widget',
    'description'   => 'Widget resources section 2 in footer',
    'before_widget' => '<div class="resources2-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  register_sidebar( array(
    'name'          => ('Resources 3 Widget'),
    'id'            => 'resources3-widget',
    'description'   => 'Widget resources section 3 in footer',
    'before_widget' => '<div class="resources3-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  /*------Footer nav area------*/
  register_sidebar( array(
      'name'          => ('Footer Nav Widget'),
      'id'            => 'footer-nav',
      'description'   => 'Footer nav',
      'before_widget' => '<div class="footer-nav">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));
  register_sidebar( array(
      'name'          => ('Footer Nav Widget 2'),
      'id'            => 'footer-nav2',
      'description'   => 'Footer nav2',
      'before_widget' => '<div class="footer-nav2">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>'
  ));
    /*--- Fourth Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Fourth Footer Widget'),
        'id'            => 'footer-four',
        'description'   => 'Fourth footer in the footer',
        'before_widget' => '<div class="widget-footer widget-four">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'blank_widgets_init');

/*--------------- Enable Menus -----------*/

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );

/*--------------- Custom Post: Links -----------*/

function custom_web_resources() {
    $labels = array(
/*---Begin Labels Options ---*/
    'name'               => _x( 'Links', 'post type general name' ),
    'singular_name'      => _x( 'Link', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'weblink' ),
    'add_new_item'       => __( 'Add Link' ),
    'edit_item'          => __( 'Edit Links' ),
    'new_item'           => __( 'New Link' ),
    'all_items'          => __( 'All Links' ),
    'view_item'          => __( 'View Links' ),
    'search_items'       => __( 'Search Links' ),
    'not_found'          => __( 'No links found' ),
    'not_found_in_trash' => __( 'No links found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Web Links'
    );
    $args = array(
/*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Place to put useful links to other web resources',
    'public'        => true,
    'menu-position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has-archive'   => true,
    );
    register_post_type( 'links', $args );
}
add_action('init', 'custom_web_resources');

/*--- Enqueing CSS Files ---*/

function normalize_css() {
  wp_enqueue_style(
    'normalize-css',
    get_template_directory_uri() . '/stylesheets/normalize.css'
  );
}
add_action('wp_enqueue_scripts', 'normalize_css');

function skeleton_css() {
  wp_enqueue_style(
    'skeleton-css',
    get_template_directory_uri() . '/stylesheets/skeleton.css'
  );
}
add_action('wp_enqueue_scripts', 'skeleton_css');

/*--- Enqueing JQuery Files ---*/

wp_deregister_script('jquery');

wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js','','',true);

/*--- Not Working
function enqueue_navigation_js() {
  wp_enqueue_script(
    'navigation_js',
    get_template_directory_uri() . '/js/navigation.js',
    array('jquery'),
    '',
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_navigation_js');
---*/

/*--- Blog Functions ---*/

/*--- Change Blog Excerpt Length */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/*--- Enable Bread Crumbs ---*/

function add_breadcrumbs() {
    $post_ancestors = get_post_ancestors($post);
    if (count($post_ancestors)) {
        $top_page = array_pop($post_ancestors);
        $children = wp_list_pages('title_li=&child_of=' . $top_page . '&echo=0');
    } elseif (is_page()) {
        $children = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0&depth=2');
    }
    if (is_page() && !is_front_page()) {
        $breadcrumb = "<nav id='breadcrumb'><ul>";
        $breadcrumb .= '<li><a href=" ' . get_bloginfo('url') . '">Home</a></li>';
        $post_ancestors = get_post_ancestors($post);
    if ($post_ancestors) {
        $post_ancestors = array_reverse($post_ancestors);
    foreach ($post_ancestors as $crumb)
        $breadcrumb .= '<li><a href="' . get_permalink($crumb) . '">' . get_the_title($crumb) . '</a></li>';
    }
    $breadcrumb .= '<li><strong>' . get_the_title() . '</strong></li>';
    $breadcrumb .= "</ul></nav>";
    echo $breadcrumb;
    }
}

?>
