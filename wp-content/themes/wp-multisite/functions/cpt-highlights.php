<?php
$highlights_labels = array(
    'name'              => _x('Destaques', 'Destaques na home', 'wp-multisites'),
    'singular_name'     => _x('Destaque', 'destaque na home', 'wp-multisites'),
    'menu_name'         => __('Destaques', 'wp-multisites'),
    'all_items'         => __('Todos os destaques', 'wp-multisites'),
    'view_item'         => __('Ver destaque', 'wp-multisites'),
    'add_new_item'      => __('Adicionar destaque', 'wp-multisites'),
    'add_new'           => __('Adicionar novo', 'wp-multisites'),
    'edit_item'         => __('Eitar destaque', 'wp-multisites'),
    'update_item'       => __('Atualizar destaque', 'wp-multisites'),
    'search_items'      => __('Buscar destaque', 'wp-multisites'),
    'not_found'         => __('Não encontrado', 'wp-multisites'),
    'not_fund_in_trash' => __('Não encontrado no lixo', 'wp-multisites')
);
$highlights_args = array(
    'label'               => __('destaques', 'wp-multisites'),
    'description'         => __('destaques na home', 'wp-multisites'),
    'labels'              => $highlights_labels,
    'supports'            => array('title', 'editor', 'thumbnail'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-welcome-view-site',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => true,
    'publicy_queryable'   => true,
    'capability_type'     => 'post'
);
register_post_type('destaques', $highlights_args);