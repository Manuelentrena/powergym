    <?php while( have_posts() ): the_post(); ?>

      <h1 class="text-center texto-primario"><?php the_title(); ?></h1>

      <?php if(has_post_thumbnail()):
        /* Imagen destacada ( thumbnail, medium, large , full, más las personalizadas) */
        /* El segundo parametro es añadirle una clase a la img */
        the_post_thumbnail('blog',array('class' => 'imagen-destacada'));  
        endif;
      /* Revisar si el custom postype es clases */
      if(get_post_type() == 'powergym_clases'){
          $hora_inicio = get_field('hora_inicio');
          $hora_fin = get_field('hora_fin');
          ?><p class="informacion_clase"><?php the_field('dias_clase') ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
      <?php } ?>
      

      <?php the_content(); ?>

    <?php endwhile; ?>