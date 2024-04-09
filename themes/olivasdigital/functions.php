<?php

function OLIVAS_DIGITAL_PROJETOS() {
    $args = array(
        'label'               => __( 'Projeto', 'olivasdigital' ),
        'description'         => __( 'Projetos', 'olivasdigital' ),
        'labels'              => array(
            'name'               => _x( 'Projetos', 'Projetos', 'olivasdigital' ),
            'singular_name'      => _x( 'Projeto', 'Projeto', 'olivasdigital' ),
            'menu_name'          => __( 'Projetos', 'olivasdigital' ),
            'add_new'            => __( 'Adicionar Novo', 'olivasdigital' ),
            'add_new_item'       => __( 'Adicionar Novo Projeto', 'olivasdigital' ),
            'edit_item'          => __( 'Editar Projeto', 'olivasdigital' ),
            'new_item'           => __( 'Novo Projeto', 'olivasdigital' ),
            'view_item'          => __( 'Ver Projeto', 'olivasdigital' ),
            'search_items'       => __( 'Pesquisar Projetos', 'olivasdigital' ),
            'not_found'          => __( 'Nenhum Projeto encontrado', 'olivasdigital' ),
            'not_found_in_trash' => __( 'Nenhum Projeto encontrado na lixeira', 'olivasdigital' ),
            'parent_item_colon'  => __( 'Projeto Pai:', 'olivasdigital' ),
            'all_items'          => __( 'Todos os Projetos', 'olivasdigital' ),
            'archives'            => __( 'Arquivos de Projeto', 'olivasdigital' ),
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'projects' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => null,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );
    register_post_type( 'projects', $args );
}
add_action( 'init', 'OLIVAS_DIGITAL_PROJETOS' );

add_theme_support('post-thumbnails'); 

function add_webpack_plugin(){
     /*import webpack */
    echo '<script src="' . esc_url( get_template_directory_uri() . '/dist/bundle.js' ) . '"></script>';
}

add_action('wp_head','add_webpack_plugin');

function OLIVAS_DIGITAL_boostrapp(){
    /*import bootstrap */
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';
}

add_action('wp_head','OLIVAS_DIGITAL_boostrapp');

function OLIVAS_DIGITAL_font(){
        /*import font poppins and roboto */
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">';
}

add_action('wp_head','OLIVAS_DIGITAL_font');

function OLIVAS_DIGITAL_icons(){
    /*import font awesome */
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
}

add_action('wp_head','OLIVAS_DIGITAL_icons');

