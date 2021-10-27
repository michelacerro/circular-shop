<?php

// add scripts
function circular_script_enqueue() {
    // style
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('customcss', get_template_directory_uri() . '/css/circular.css', array(), '1.0.0', 'all');

    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.1.3', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/circular.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'circular_script_enqueue');


// add site title
add_theme_support('title-tag');


// add menu
function circular_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Header Menu');
    register_nav_menu('secondary', 'Footer Menu');
}
add_action('init', 'circular_theme_setup');


// add background setup
add_theme_support('custom-background');

// add header setup
add_theme_support('custom-header');

// add image preview for posts
add_theme_support('post-thumbnails');

// add posts setup
add_theme_support('post-formats', array('aside', 'gallery', 'link'));


// customize colors palette
function circular_colors_setup() {
  $colors = array(
    array(
      'name' => esc_html__('Black', 'circulartheme'),
      'slug' => 'black',
      'color' => '#000000'
    ),
    array(
      'name' => esc_html__('Light Grey', 'circulartheme'),
      'slug' => 'light-grey',
      'color' => '#f5f5f5'
    ),
    array(
      'name' => esc_html__('White', 'circulartheme'),
      'slug' => 'white',
      'color' => '#ffffff'
    ),
    array(
      'name' => esc_html__('Aqua Green', 'circulartheme'),
      'slug' => 'aqua-green',
      'color' => '#378C8C'
    ),
    array(
      'name' => esc_html__('Light Orange', 'circulartheme'),
      'slug' => 'light-orange',
      'color' => '#FFCE85'
    ),
    array(
      'name' => esc_html__('Dark Orange', 'circulartheme'),
      'slug' => 'dark-orange',
      'color' => '#F29F05'
    ),
  );

  add_theme_support('editor-color-palette', $colors);
}
add_action('after_setup_theme', 'circular_colors_setup');

function circular_editor_stylesheet(){
  add_theme_support('editor-styles');
  add_editor_style('style.css');
}
// add_action('after_setup_theme', 'circular_editor_stylesheet');

// add sidebar
function circular_widget_setup() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-1',
        'class' => 'custom',
        'description' => 'Standard Sidebar',
        'before_widget' => '<aside id=%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));
}
add_action('widgets_init', 'circular_widget_setup');
