<?php
$testimonials_labels = array(
    'name'              => _x('Depoimentos', 'Depoimentos dos clientes', 'wp-multisites'),
    'singular_name'     => _x('Depoimento', 'Depoimento do cliente', 'wp-multisites'),
    'menu_name'         => __('Depoimentos', 'wp-multisites'),
    'all_items'         => __('Todos os depoimentos', 'wp-multisites'),
    'view_item'         => __('Ver depoimento', 'wp-multisites'),
    'add_new_item'      => __('Adicionar depoimento', 'wp-multisites'),
    'add_new'           => __('Adicionar novo', 'wp-multisites'),
    'edit_item'         => __('Eitar depoimento', 'wp-multisites'),
    'update_item'       => __('Atualizar depoimento', 'wp-multisites'),
    'search_items'      => __('Buscar depoimento', 'wp-multisites'),
    'not_found'         => __('Não encontrado', 'wp-multisites'),
    'not_fund_in_trash' => __('Não encontrado no lixo', 'wp-multisites')
);
$testimonials_args = array(
    'label'               => __('depoimentos', 'wp-multisites'),
    'description'         => __('Depoimentos dos clientes', 'wp-multisites'),
    'labels'              => $testimonials_labels,
    'supports'            => array('title', 'editor'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-format-aside',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => true,
    'publicy_queryable'   => true,
    'capability_type'     => 'post'
);
register_post_type('depoimentos', $testimonials_args);