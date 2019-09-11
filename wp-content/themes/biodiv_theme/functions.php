<?php

// Afficher les requêtes (code dans le footer également)
// define('SAVEQUERIES', true);

function biodiv_enqueue_style() {
	// Déclarer style.css à la racine du thème
	wp_enqueue_style(
		'style',
		get_stylesheet_uri(),
		'/style.css'
	);
	wp_enqueue_script(
		'jquery-cdn',
		'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
		array(),
		'1.9.1',
		true
	);

// And then update your dependency on your bootstrap script
// to use the CDN jQuery:
	wp_enqueue_script(
		'bootstrap-js',
		'//netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
		array( 'jquery-cdn' ),
		true
	);
	// wp_enqueue_style( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, null, 'all' );
}
function biodiv_enqueue_script() {
	wp_enqueue_script('bootstrap','http://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'),null,true);
}
add_action( 'wp_enqueue_scripts', 'biodiv_enqueue_style');
add_action( 'wp_enqueue_scripts', 'biodiv_enqueue_script');

// Fonction pour activer les images mises en avant
add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
	/* Ajouter les custom post type */
	register_post_type(
		'association',
		array(
			'label' => 'association',
			'labels' => array(
				'name' => 'Associations',
				'singular_name' => 'association',
				'all_items' => 'Toutes les associations',
				'add_new_item' => 'Ajouter une association',
				'edit_item' => 'Éditer une association',
				'new_item' => 'Nouvelle association',
				'view_item' => 'Voir l\'association',
				'search_items' => 'Rechercher parmi les associations',
				'not_found' => 'Pas d\'observation trouvée',
				'not_found_in_trash'=> 'Pas d\'association dans la corbeille'
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
		'',
		'association',
		array(
			'label' => 'associations',
			'labels' => array(
				'name' => 'Associations',
				'singular_name' => 'association',
				'all_items' => 'Toutes les associations',
				'edit_item' => 'Éditer une association',
				'view_item' => 'Voir une association',
				'update_item' => 'Mettre à jour une association',
				'add_new_item' => 'Ajouter une association',
				'new_item_name' => 'Nouvelle association',
				'search_items' => 'Rechercher parmi les gassociations',
				'popular_items' => 'Associations les plus utilisés'
			),
			'hierarchical' => true
		)
	);
	register_post_type(
		'observation',
		array(
			'label' => 'observation',
			'labels' => array(
				'name' => 'Observations',
				'singular_name' => 'observation',
				'all_items' => 'Toutes les observations',
				'add_new_item' => 'Ajouter une observation',
				'edit_item' => 'Éditer une observation',
				'new_item' => 'Nouvelle observation',
				'view_item' => 'Voir l\'observation',
				'search_items' => 'Rechercher parmi les observations',
				'not_found' => 'Pas d\'observation trouvée',
				'not_found_in_trash'=> 'Pas d\'observation dans la corbeille'
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
		'groupe taxonomique',
		'observation',
		array(
			'label' => 'groupe taxonomiques',
			'labels' => array(
				'name' => 'groupes taxonomiques',
				'singular_name' => 'groupe taxonomique',
				'all_items' => 'Tous les groupes taxonomiques',
				'edit_item' => 'Éditer un groupe taxonomique',
				'view_item' => 'Voir un groupe taxonomique',
				'update_item' => 'Mettre à jour un groupe taxonomique',
				'add_new_item' => 'Ajouter un groupe taxonomique',
				'new_item_name' => 'Nouveau groupe taxonomique',
				'search_items' => 'Rechercher parmi les groupes taxonomiques',
				'popular_items' => 'Groupes taxonomiques les plus utilisés'
			),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'espèce',
		'observation',
		array(
			'label' => 'Espèces',
			'labels' => array(
				'name' => 'Espèces',
				'singular_name' => 'Espèce',
				'all_items' => 'Toutes les Espèces',
				'edit_item' => 'Éditer une Espèce',
				'view_item' => 'Voir l\'espèce',
				'update_item' => 'Mettre à jour l\'espèce',
				'add_new_item' => 'Ajouter une espèce',
				'new_item_name' => 'Nouvelle espèce',
				'search_items' => 'Rechercher parmi les espèces',
				'popular_items' => 'Espèces les plus utilisées'
			),
			'hierarchical' => true
		)
	);

	register_taxonomy_for_object_type( 'groupe taxonomique', 'observation' );
	register_taxonomy_for_object_type( 'espèce', 'observation' );
}

// Afficher l'option "menu" dans l'onglet "apparence"
// enregistrement de ma seconde navigation


function register_my_menus() {
	register_nav_menus(
		array(
			'side-bar'     => __( 'Menu latéral' ),
			'private-menu' => __( 'Menu Privé' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function services_widgets_init() {

	register_sidebar( array(

		'name' => 'Mes services', // c'est le nom de la sidebar qui apparaitra dans le backoffice
		'id' => 'services-widget-area', // ceci est l'identifiant de la sidebar
		'before_widget' => '<div class="services-sidebar">', // ouverture d'une div avant le widget avec une class pour agir dessus en CSS
		'after_widget' => '</div>', // fermeture de la div après le widget
		'before_title' => '<h3 class="services-sidebar-title">', // action sur le titre de chaque widget avec un tag H3 et une class pour le CSS
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'services_widgets_init' );

