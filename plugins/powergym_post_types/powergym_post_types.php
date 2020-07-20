<?php 
/* 
  Plugin Name: Power Gym - Post Types
  Plugin URI: 
  Description: Añade Post Types al sitio Power Gym
  Version: 1.0.0
  Author: Manuel Entrena
  Author URI: https://twitter.com/Manuel_Entrena
  Text Domain: PowerGym

*/

/* No muestra contenido si alguien intenta abrirlo */
if(!defined('ABSPATH')) die(); 

// Registrar Custom Post Type
function powergym_clases_post_type() {

  /* Traducciones de la interfaz de WordPress */
	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'powerGym' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'powerGym' ),
		'menu_name'             => __( 'Clases', 'powerGym' ),
		'name_admin_bar'        => __( 'Clase', 'powerGym' ),
		'archives'              => __( 'Archivo', 'powerGym' ),
		'attributes'            => __( 'Atributos', 'powerGym' ),
		'parent_item_colon'     => __( 'Clase Padre', 'powerGym' ),
		'all_items'             => __( 'Todas Las Clases', 'powerGym' ),
		'add_new_item'          => __( 'Agregar Clase', 'powerGym' ),
		'add_new'               => __( 'Agregar Clase', 'powerGym' ),
		'new_item'              => __( 'Nueva Clase', 'powerGym' ),
		'edit_item'             => __( 'Editar Clase', 'powerGym' ),
		'update_item'           => __( 'Actualizar Clase', 'powerGym' ),
		'view_item'             => __( 'Ver Clase', 'powerGym' ),
		'view_items'            => __( 'Ver Clases', 'powerGym' ),
		'search_items'          => __( 'Buscar Clase', 'powerGym' ),
		'not_found'             => __( 'No Encontrado', 'powerGym' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'powerGym' ),
		'featured_image'        => __( 'Imagen Destacada', 'powerGym' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'powerGym' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'powerGym' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'powerGym' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'powerGym' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'powerGym' ),
		'items_list'            => __( 'Lista de Clases', 'powerGym' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'powerGym' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'powerGym' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'powerGym' ),
		'description'           => __( 'Clases para el Sitio Web', 'powerGym' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, /* True = posts, False = pagina */
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'powerGym_clases', $args );

}
/* 
  1 param: el momento de carga,
  2 param: nombre funcion,
  3 param: prioridad de carga ( 0 = inmediatamente)
*/
add_action( 'init', 'powergym_clases_post_type', 0 );

?>