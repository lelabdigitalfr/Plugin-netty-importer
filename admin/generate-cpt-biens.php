<?php
// Register Custom Post Type
function nos_biens_post_type() {

	$labels = array(
		'name'                  => _x( 'Biens', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Bien', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Biens netty', 'text_domain' ),
		'name_admin_bar'        => __( 'Bien', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Tous les biens', 'text_domain' ),
		'add_new_item'          => __( 'Ajouter nouveau bien', 'text_domain' ),
		'add_new'               => __( 'Ajouter nouveau', 'text_domain' ),
		'new_item'              => __( 'Nouveau bien', 'text_domain' ),
		'edit_item'             => __( 'Modifier bien', 'text_domain' ),
		'update_item'           => __( 'Mettre à jour', 'text_domain' ),
		'view_item'             => __( 'Voir le bien', 'text_domain' ),
		'view_items'            => __( 'Voir les biens', 'text_domain' ),
		'search_items'          => __( 'Rechercher le bien', 'text_domain' ),
		'not_found'             => __( 'Non trouvé', 'text_domain' ),
		'not_found_in_trash'    => __( 'Non trouvé dans la corbeille', 'text_domain' ),
		'featured_image'        => __( 'Image principale', 'text_domain' ),
		'set_featured_image'    => __( 'Sélectionner l\'image principale', 'text_domain' ),
		'remove_featured_image' => __( 'Supprimer l\'image principale', 'text_domain' ),
		'use_featured_image'    => __( 'Utiliser comme image principale', 'text_domain' ),
		'insert_into_item'      => __( 'Insérer dans le bien', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Télécharger pour ce bien', 'text_domain' ),
		'items_list'            => __( 'Liste des biens', 'text_domain' ),
		'items_list_navigation' => __( 'Navigation liste des biens', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrer liste des biens', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Bien', 'text_domain' ),
		'description'           => __( 'Page d\'infos des biens', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		'taxonomies'            => array( 'region', 'city' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'biens', $args );

}
add_action( 'init', 'nos_biens_post_type', 0 );

// Register Custom Taxonomy
function ville_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Villes', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Ville', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Ville', 'text_domain' ),
		'all_items'                  => __( 'Toutes villes', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ajouter une ville', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'ville', array( 'biens' ), $args );

}
add_action( 'init', 'ville_taxonomy', 0 );

function disponibilite_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Disponibilités', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Disponibilité', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Disponibilité', 'text_domain' ),
		'all_items'                  => __( 'Toutes les disponibilités', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'Ajouter une ville', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'disponibilite', array( 'biens' ), $args );

}
add_action( 'init', 'disponibilite_taxonomy', 0 );