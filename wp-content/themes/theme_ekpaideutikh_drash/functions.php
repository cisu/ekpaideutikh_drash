<?php

// linking the CSS and JS files
// microtime() isn't the best after development session

function gt_setup()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    wp_enqueue_script("main", get_theme_file_uri("js/main.js"), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// Adding Theme Support

function gt_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

add_action('after_setup_theme', 'gt_init');

// Projects

function gt_custom_post_type()
{

    register_post_type('projects',
        array(
            'rewrite' => array('slug' => 'projects'),
            'labels' => array(
                'name' => 'Μαθήματα',
                'singular_name' => 'Project',
                'add_new_item' => 'Εδώ βάζεις το καινούργιο μάθημα',
                'edit_item' => 'Edit Project'
            ),
// Εδώ βάζεις το καινούργιο μάθημα

            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-book',
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments'
            )
        )
    );
}

add_action('init', 'gt_custom_post_type');

add_filter('show_admin_bar', '__return_false');

//Sidebar

function gt_widgets()
{
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}

add_action('widgets_init', 'gt_widgets');

//Filters to display only for blog and projects when we search

function search_filter($query)
{

    if ($query->is_search) {
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts' , 'search_filter');