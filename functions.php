<?php 
		//creamos nuestra primer funcion para agragar css y js
		function agragar_css_js(){
			wp_enqueue_style( 'style', get_stylesheet_uri() );
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

			//wordpress ya incorpora jquery y estamos diciendo que primero debe leer jquery, 
			//cargando atravez de http, el true es para colocar el cdn en el footer
			wp_enqueue_script( 'pooper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array ('jquery'),'3.3.1', true);

			wp_enqueue_script( 'bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array ('pooper'),'4.3', true);

		}
		//pasamos el nombre de nuestra funcion
		add_action('wp_enqueue_scripts','agragar_css_js');

		//soporte para imagenes destacadas
		if ( function_exists( 'add_theme_support' ) ) {
	    add_theme_support( 'post-thumbnails' ); //usar post-thumbnails en index.php 
	    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
	 
	    // additional image sizes
	    // delete the next line if you do not need additional image sizes
	    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
	 }


 ?>