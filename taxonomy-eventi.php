<?php
// Register Custom Taxonomy
function taxonomy_eventi() {

  $labels = array(
    'name'                       => _x( 'Tipologie', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Tipologia', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'Tipologia Eventi', 'text_domain' ),
    'all_items'                  => __( 'Tutte le Tipologie', 'text_domain' ),
    'parent_item'                => __( 'Tipologia Generale', 'text_domain' ),
    'parent_item_colon'          => __( 'Tipologia Generale:', 'text_domain' ),
    'new_item_name'              => __( 'Nome nuova Tipologia', 'text_domain' ),
    'add_new_item'               => __( 'Aggiungi nuova Tipologia', 'text_domain' ),
    'edit_item'                  => __( 'Modifica Tipologia', 'text_domain' ),
    'update_item'                => __( 'Aggiorna Tipologia', 'text_domain' ),
    'view_item'                  => __( 'Vedi Tipologia', 'text_domain' ),
    'separate_items_with_commas' => __( '', 'text_domain' ),
    'add_or_remove_items'        => __( 'Aggiungi o Rimuovi Tipologia', 'text_domain' ),
    'choose_from_most_used'      => __( 'Scegli dalle più utilizzate', 'text_domain' ),
    'popular_items'              => __( 'Tipologie frequenti', 'text_domain' ),
    'search_items'               => __( 'Cerca Tipologie', 'text_domain' ),
    'not_found'                  => __( 'Non trovato', 'text_domain' ),
    'no_terms'                   => __( 'Nessuna Tipologia', 'text_domain' ),
    'items_list'                 => __( 'Lista Tipologie', 'text_domain' ),
    'items_list_navigation'      => __( 'Lista Tipologie', 'text_domain' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'tipologia_evento', array( 'eventi' ), $args );

}
add_action( 'init', __NAMESPACE__ . '\\taxonomy_eventi', 0 );
?>
