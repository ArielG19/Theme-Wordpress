<?php 
		
	// buena practica agregar el nombre del tema cuando nombre la funcion tema1_agregar_css
	//---------------creamos nuestra primer funcion para agragar css y js----------------------------- 
		function agragar_css_js(){
			wp_enqueue_style( 'style', get_stylesheet_uri() );

	//----------------css personalizado---------------------------------------------------------------
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	//wordpress ya incorpora jquery y estamos diciendo que primero debe leer jquery, 
	//cargando atravez de http, el true es para colocar el cdn en el footer
			wp_enqueue_script( 'pooper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'),'3.3.1', true);

			wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('pooper'),'4.3', true);

	//----------------js personalizado---------------------------------------------------------------
			wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array('bootstrap-js'),'1.0', true);

		}
		//pasamos el nombre de nuestra funcion
		add_action('wp_enqueue_scripts','agragar_css_js');

	//---------------soporte para imagenes destacadas-------------------------------------------------
		if ( function_exists( 'add_theme_support' ) ) {
	    add_theme_support( 'post-thumbnails' ); //usar post-thumbnails en index.php 
	    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
	 
	    // additional image sizes
	    // delete the next line if you do not need additional image sizes
	    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
	 }

	 //--------------Agregar sidebar-------------------------------------------------------------------
	 	
		function mi_widget() {
		    /* Register the 'primary' sidebar. */
		    register_sidebar(
		        array(
		            'id'            => 'mi-widget', //usaremos en el sidebar.php
		            'name'          => __( 'Mi Widget' ), //nombre
		            'description'   => __( 'Mi primer widget' ), //descripcion
		            'before_widget' => '<div class="card-body mi-clase">', //agregamos el inicio del wid y una cls
		            'after_widget'  => '</div>', // agregamos el final
		            'before_title'  => '<h4 class="text-center">', //inicio de titulo
		            'after_title'   => '</h4><hr>',
		        )
			);
		}

		add_action( 'widgets_init', 'mi_widget' );


 ?>