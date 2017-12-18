<?php
// Register Custom Post Type
function post_type_eventi() {

  $labels = array(
    'name'                  => _x( 'Eventi', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Eventi', 'text_domain' ),
    'name_admin_bar'        => __( 'Evento', 'text_domain' ),
    'archives'              => __( 'Archivio Eventi', 'text_domain' ),
    'attributes'            => __( 'Attributi Evento', 'text_domain' ),
    'parent_item_colon'     => __( '', 'text_domain' ),
    'all_items'             => __( 'Tutti gli Eventi', 'text_domain' ),
    'add_new_item'          => __( 'Aggiungi nuovo Evento', 'text_domain' ),
    'add_new'               => __( 'Aggiungi Nuovo', 'text_domain' ),
    'new_item'              => __( 'Nuovo Evento', 'text_domain' ),
    'edit_item'             => __( 'Modifica Evento', 'text_domain' ),
    'update_item'           => __( 'Aggiorna Evento', 'text_domain' ),
    'view_item'             => __( 'Mostra Evento', 'text_domain' ),
    'view_items'            => __( 'Mostra Eventi', 'text_domain' ),
    'search_items'          => __( 'Cerca Evento', 'text_domain' ),
    'not_found'             => __( 'Non trovato', 'text_domain' ),
    'not_found_in_trash'    => __( 'Non trovato nel cestino', 'text_domain' ),
    'featured_image'        => __( 'Immagine in Evidenza', 'text_domain' ),
    'set_featured_image'    => __( 'Imposta Immagine in Evidenza', 'text_domain' ),
    'remove_featured_image' => __( 'Rimuovi Immagine in Evidenza', 'text_domain' ),
    'use_featured_image'    => __( 'Usa come Immagine in Evidenza', 'text_domain' ),
    'insert_into_item'      => __( 'Inserisci nell\'Evento', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Caricato in questo Evento', 'text_domain' ),
    'items_list'            => __( 'Lista Eventi', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Evento', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 100,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'eventi', $args );

}
add_action( 'init', __NAMESPACE__ . '\\post_type_eventi', 0 );?>
