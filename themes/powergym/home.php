<?php get_header(); ?>

<main class="pagina seccion contenedor no-sidebars">
  <ul class="listado-blog">
    <?php while(have_posts()): the_post(); ?>
      <?php get_template_part('template-parts/loop','blog'); ?>
    <?php endwhile; ?>
  </ul>
</main>

<?php get_footer(); ?>