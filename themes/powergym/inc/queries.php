<?php function powerGym_lista_clases(){ ?>
    <ul class="lista-clases">
      <?php 
        $args = array(
          'post_type' => 'powerGym_clases',
          'posts_per_page' => 6,
          'orderby' => 'title',
          'order' => 'ASC'
        );

        $clases = new WP_Query($args);
      
        while ($clases->have_posts() ): $clases->the_post();  ?>


        <li class="clase card gradient">
          <a class="link-img" href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('mediano'); ?>
          </a>
          <div class="contenido">
            
              <h3><?php the_title(); ?></h3>
            
            
            <?php 
              $hora_inicio = get_field('hora_inicio');
              $hora_fin = get_field('hora_fin');
            ?>

            <p><?php the_field('dias_clase') ?> - <?php echo $hora_inicio . " a " . $hora_fin ?></p>
          </div>
          
        </li>


        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php } ?> 

