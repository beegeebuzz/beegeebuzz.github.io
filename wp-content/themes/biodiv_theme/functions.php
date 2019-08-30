<?php

function theme_style() {
	wp_enqueue_script( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_style( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_style');

// Fonction pour activer les images mises en avant
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
	/* Ajouter les custom post type */
	register_post_type(
		'projet',
		array(
			'label' => 'Projets',
			'labels' => array(
				'name' => 'Projets',
				'singular_name' => 'Projet',
				'all_items' => 'Tous les projets',
				'add_new_item' => 'Ajouter un projet',
				'edit_item' => 'Éditer le projet',
				'new_item' => 'Nouveau projet',
				'view_item' => 'Voir le projet',
				'search_items' => 'Rechercher parmi les projets',
				'not_found' => 'Pas de projet trouvé',
				'not_found_in_trash'=> 'Pas de projet dans la corbeille'
			),
			'public' => true,
			'capability_type' => 'post',
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'has_archive' => true
		)
	);

	register_taxonomy(
		'type',
		'projet',
		array(
			'label' => 'Types',
			'labels' => array(
				'name' => 'Types',
				'singular_name' => 'Type',
				'all_items' => 'Tous les types',
				'edit_item' => 'Éditer le type',
				'view_item' => 'Voir le type',
				'update_item' => 'Mettre à jour le type',
				'add_new_item' => 'Ajouter un type',
				'new_item_name' => 'Nouveau type',
				'search_items' => 'Rechercher parmi les types',
				'popular_items' => 'Types les plus utilisés'
			),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'couleur',
		'projet',
		array(
			'label' => 'Couleurs',
			'labels' => array(
				'name' => 'Couleurs',
				'singular_name' => 'Couleur',
				'all_items' => 'Toutes les couleurs',
				'edit_item' => 'Éditer la couleur',
				'view_item' => 'Voir la couleur',
				'update_item' => 'Mettre à jour la couleur',
				'add_new_item' => 'Ajouter une couleur',
				'new_item_name' => 'Nouvelle couleur',
				'search_items' => 'Rechercher parmi les couleurs',
				'popular_items' => 'Couleurs les plus utilisées'
			),
			'hierarchical' => false
		)
	);
	register_taxonomy_for_object_type( 'type', 'projet' );
	register_taxonomy_for_object_type( 'couleur', 'projet' );
}

// Afficher l'option "menu" dans l'onglet "apparence"
register_nav_menu( 'primary', 'Primary Menu' );

function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}