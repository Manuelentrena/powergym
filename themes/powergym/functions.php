<?php

  /* Consultas Reutilizables */
  require get_template_directory() . '/inc/queries.php';

  /* Incluimos los ShorCodes */
  require get_template_directory() . '/inc/shortcodes.php';

  /* Cuando el tema es activado */
  function powergym_setup(){

    /* Habilitar una imagen destacada */
    add_theme_support('post-thumbnails');
    /* Agregar imagenes de tamaño personalizado */
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);

    /* Titulos SEO */
    add_theme_support('title-tag');
  }

  /* Añadir Foto en página de Sobre Nosotros */
  add_action('after_setup_theme', 'powergym_setup');


  
  /* Menus de navegacion */
  function powergym_menus(){
    register_nav_menus(array(
      'menu-principal' => __( ' Menu Principal ', 'PowerGym')
    ));
  }

  /* Añadir menú principal */
  add_action('init', 'powergym_menus');


  /* Scripts y styles */
  function powergym_scripts_styles(){
    
    /* Esquema 
      $handle:string, nombre del archivo, debe ser único
      $src:string, ruta del archivo
      $deps:array, dependencias, sino tiene pasarle un array vacio
      $ver:string|boolean|null, darle una versión propia, importante ya que un plugin de cache detectará si hay una versión nueva
      $media:string, donde se carga el archivo, no es obligatorio
    */

    /* Normalize */
    wp_enqueue_style( 'normalize', get_template_directory_uri(). "/css/normalize.css" , array() , '8.0.1');

    /* slicknavCSS */
    wp_enqueue_style( 'slicknavCSS', get_template_directory_uri(). "/css/slicknav.min.css" , array() , '1.0.0');

    /* Google Fonts*/
    wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap' , array() , '1.0.0');

    /* Hoja de estilos principal */
    wp_enqueue_style( 'style', get_stylesheet_uri() , array('normalize','googleFont') , '1.0.0');

    /* lightboxCSS */
    if(is_page('galeria')):
      wp_enqueue_style( 'lightboxCSS', get_template_directory_uri(). "/css/lightbox.min.css" , array() , '2.11.2');
    endif;

    /* leafletCSS */
    if(is_page('contacto')):
      wp_enqueue_style( 'leafletCSS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css' , array() , '1.6.0');
    endif;

    /* Esquema 
      Igual que wp_enqueue_style menos el ultimo parámetro
      $footer:string, si lo quieres cargar en el footer
    */

    /* slicknavJS */
    wp_enqueue_script('slicknavJS',get_template_directory_uri(). "/js/jquery.slicknav.min.js" , array('jquery') , '1.0.0', true);

    /* slicknavJS */
    wp_enqueue_script('scripts',get_template_directory_uri(). "/js/scripts.js" , array('jquery','slicknavJS') , '1.0.0', true);

    /* lightboxJS */
    if(is_page('galeria')):
      wp_enqueue_script('lightboxJS',get_template_directory_uri(). "/js/lightbox.min.js" , array('jquery') , '2.11.2', true);
    endif;

    /* leafletJS */
    if(is_page('contacto')):
      wp_enqueue_script( 'leafletJS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js' , array() , '1.6.0', true);
    endif;
  }

  /* Añadir scripts y styles, esta funcion necesita la funcion wp_head(); que se llama en el header */
  add_action('wp_enqueue_scripts', 'powergym_scripts_styles');


  /* LOS WIDGETS */

  function powergym_widgets(){
    register_sidebar( array(
      'name' => 'Sidebar 1',
      'id' => 'sidebar_1',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center texto-primario">',
      'after_title' => '</h3>'
    ));
    register_sidebar( array(
      'name' => 'Sidebar 2',
      'id' => 'sidebar_2',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center texto-primario">',
      'after_title' => '</h3>'
    ));
  }

  add_action('widgets_init','powergym_widgets');

?>