<?php while(have_posts()): the_post(); ?>
  <li class="card gradient">

    
    <a class="link-img" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('mediano') ?>
    </a>
    <?php the_category(); ?>
    <div class="contenido">
      <h3><?php the_title(); ?></h3>
      <p class="meta">
        <span>Por:</span>
        <a class="link-author" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
          <?php echo get_the_author_meta('display_name'); ?>
        </a>
        
      </p>
      <p class="meta">
        <span>Fecha: </span>
        <?php echo the_time(get_option('date_format')); ?>
      </p>
    </div>
  </li>
<?php endwhile; ?>