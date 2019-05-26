<?php get_header(); ?>

        <div class="row">
          <!--Entradas-->
            <div class="col-md-9">
              <!--Loop para cargar post si existen -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>            
                    <div class="card-body">
                      
                    <h2> <?php the_title(); ?> </h2>
                      
                     <!-- Cargamos las imagenes de los post-->
                     <?php 
                          //si existen imagenes
                          if ( has_post_thumbnail() ) {
                          //cargamos las imagenes, pasamos mas parametros para cargar ls clases
                              the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid'));
                          }
                      ?> 

                      <!--mb-0 es margen bottom 0-->
                      <p class="text-primary small mb-0">Autor: <?php the_author(); ?> </p>
                      <p class="text-primary small">Fecha: <?php the_time('F j, Y'); ?></p>
                      <p class="text-primary small">
                        Categorias: <?php the_category(' / '); ?>
                        Etiquetas: <?php the_tags('',' / ', ''); ?>  
                      </p>

                      <p><?php the_content(); ?></p>
                      
                    </div>
                <?php endwhile; endif; ?>
                <!--Fin del Loop-->

              </div>
          <!--Entradas-->
       
                    
          <!--Categorias-->
          <div class="col-md-3">
            <div class="card-body">
              <h4>Publicidad</h4>
              <hr>
              <img src="img/compu.jpg" class="img-fluid" width="200px" height="150px" alt="">
            </div>
          </div>

        </div>
      </div>
      <!--Blog-->

      <!--Footer-->
        <?php get_footer(); ?>
      <!--Footer-->


