<h1>torvicSlide-widget</h1>



<p style="font-size: 20px">Los archivos de este proyecto son para la creación del widget torvicSlide, yo los he creado en un tema hijo, para lo cual los he introducido en la carpeta raiz del tema hijo, donde están function.php y styles.css, despues hay que introducirlos en function.php con wp_enqueue_style los css y wp_enqueue_script los js.</p>

<p style="font-size: 20px">ejemplo de la función que reune varios scripts y hojas de estilo y como añadirlos al tema hijo, y añadir una hoja de estilos llamada styles.css para que sea una extensión de la original que está en el tema padre:</p>

<code>
<pre style="font-size: 20px">
function enqueue_styles_child_theme() {

	$parent_style = 'sparklestore-style';
	$child_style  = 'sparklestore-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
        wp_enqueue_style( 'torvicvSlideCSS', get_stylesheet_directory_uri() . '/torvicvSlide.css', array(), time());
	wp_enqueue_style( 'w3schoolsCSS', get_stylesheet_directory_uri() . '/w3schools.css', array(), time());
        wp_enqueue_script('materialize', get_stylesheet_directory_uri() . '/materialize.js', array('jquery'), time(), true);
	wp_enqueue_script('torvicvSlideJS', get_stylesheet_directory_uri() . '/torvicvSlide.js', array('jquery'),time(), true);

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );
</pre>
</code>



<p style="font-size: 20px">Lo siguiente es crear otra función que contendrá el archivo php del código donde esta escrito lo que realiza 
nuestro widget, la clase que hemos creado en ese widget la registramos con register_widget y después llamamos 
al add_action para que ejecute nuestro widget después de los que vienen por defecto:</p>

<code>
<pre style="font-size: 20px">
function wpb_load_widget() {
	include_once(get_stylesheet_directory().'/torvicvSlide.php');
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
</pre>
</code>




<p style="font-size: 20px">Y por último escribimos la última función que es el js que nos da a elegir imagenes desde el widget, lo 
registramos poniéndole esta parametro al add_action "admin_print_scripts-widgets.php" y asi se llama después 
del admin widgets:</p>

<code>
<pre style="font-size: 20px">
function mywidget_enqueue_scripts(){
   wp_enqueue_script('mediaWidget', get_stylesheet_directory_uri() . '/scriptMediaWidget.js', array('jquery'),time(), true);
}
add_action( 'admin_print_scripts-widgets.php', 'mywidget_enqueue_scripts' );
</pre>
</code>
