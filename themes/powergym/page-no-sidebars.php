<?php 
/* 
  *Template Name: Contenido Centrado (No SideBars)
*/

?>

<?php get_header(); ?>

<main class="contenedor pagina seccion no-sidebar">

  <div class="contenido-principal">

    <?php get_template_part('template-parts/loop-paginas',); ?>

  </div>

</main>

<?php get_footer(); ?>