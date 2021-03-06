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
                        <!--img src="/img/compu.jpg" alt="" class="img-fluid"-->

                        <!--mb-0 es margen bottom 0-->
                        <p class="text-primary small mb-0">Autor: <?php the_author(); ?> </p>
                        <p class="text-primary small">Fecha: <?php the_time('F j, Y'); ?></p>
                        <p class="text-primary small">
                          Categorias: <?php the_category(' / '); ?>
                          Etiquetas: <?php the_tags('',' / ', ''); ?>  
                        </p>

                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary mt-2">Ver mas</a>
                    </div>
                <?php endwhile; endif; ?>
                <!--Fin del Loop-->

                <!--Paginacion-->
                  <!--llamando la paginacion-->
                  <?php get_template_part('template-parts/content','pagination'); ?>
                <!--Paginacion-->
            </div>
            <!--Entradas-->
             
            <!--Sidebar-->
              <?php get_sidebar(); ?>
            <!--Sidebar-->
        </div>
      </div>
      <!--Blog-->

      <!--Footer-->
        <?php get_footer(); ?>
      <!--Footer-->


