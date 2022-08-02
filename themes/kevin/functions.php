<?php
function custom_clientes() {
$labels = array(
    'name'                  => 'Clientes',
    'singular_name'         => 'Cliente',
    'menu_name'             => 'Clientes',
    'name_admin_bar'        => 'Clientes',
);
$args = array(
    'label'                 => 'Cliente',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
);
register_post_type( 'clientes', $args );
}
add_action( 'init', 'custom_clientes', 0 );
add_theme_support( 'post-thumbnails', array( 'post', 'clientes' ) );
?>