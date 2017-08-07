<h1>torvicSlide-widget</h1>


<h3>torvicvSlide-widget para el tema padre</h3>
<p style="font-size: 20px">Los archivos de este proyecto son para la creación del widget torvicSlide.</p>
<p>Para la implementar el widget en nuestra página primero descargar el zip y lo colocamos en wp-content/plugins, si lo deseas colocar en otro lado solo tienes que añadir las rutas correctamente, abajo explico como colocarlo en el tema hijo.</p>
<p>Despues insertamos el código que viene justo debajo en el functions.php de nuestro theme:</p>


<code>
<pre>

// Registramos el widget 
function wpb_load_widget() {
	include_once(dirname( __FILE__ ) . '../../../plugins/torvicvSlide-widget-master/torvicvSlide.php');
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );


//registramos el js media despues del admin widgets
function mywidget_enqueue_scripts(){
  
   wp_enqueue_script('mediaWidget', plugins_url('torvicvSlide-widget-master/scriptMediaWidget.js'), array('jquery'),time(), true);
}
add_action( 'admin_print_scripts-widgets.php', 'mywidget_enqueue_scripts' );

</pre>
</code>
<p>Y ya bien a nuestra elección podemos introducir los otros ficheros (torvicvSlide.css, torvicvSlide.js y w3schools.css ), dentro de la función donde están los scripts, que puede tener un nombre como "nombre_del_tema_scripts", entonces colocamos estas lineas de código dentro de la función:</p>
<code>
<pre>
	wp_enqueue_style( 'w3schools', plugins_url( 'torvicvSlide-widget-master/w3schools.css '),array(), time() );
	wp_enqueue_style( 'torvicvSlideCSS', plugins_url( 'torvicvSlide-widget-master/torvicvSlide.css '),array(), time() );
</pre>
</code>
<p>Estos dos archivos donde están el resto de archivos .css, mientras más abajo los coloques más prioridad tendrán, pero no los coloques debajo del principal archivo .css(lo recomiendo).</p>
<p>Y donde están los archivos .js colocamos el siguiente código:</p>
<code>
<pre>
 wp_enqueue_script('torvicvSlideJs', plugins_url( 'torvicvSlide-widget-master/torvicvSlide.js '), array('jquery'), time() , true);
 </pre>
 </code>
 <p>Esta es la manera de colocarlos estos tres archivo dentro de otra función ya existente, ahora veremos como colocarlos dentro de una función al final del functions.php como el archivo de media y como hicimos al registar el widget, copiamos el siguiente código y lo colocamos al final de functions.php:</p>

<code>
<pre>

function enqueue_torvicvSlide() {
   wp_enqueue_style( 'w3schools', plugins_url( 'torvicvSlide-widget-master/w3schools.css '),array(), time() );
   wp_enqueue_style( 'torvicvSlideCSS', plugins_url( 'torvicvSlide-widget-master/torvicvSlide.css '),array(), time() );
   wp_enqueue_script('torvicvSlideJs', plugins_url( 'torvicvSlide-widget-master/torvicvSlide.js '), array('jquery'), time() , true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

</pre>
</code>


<h3>torvicvSlide-widget en el tema hijo</p>
<p>Descargamos el widget en zip y lo colocamos en el directorio raiz del tema hijo, donde están function.php y styles.css, despues hay que introducirlos en functions.php con wp_enqueue_style los css y wp_enqueue_script los js.</p>

<p style="font-size: 20px">ejemplo de la función que reune varios scripts y hojas de estilo y como añadirlos al tema hijo, y añadir una hoja de estilos llamada styles.css para que sea una extensión de la original que está en el tema padre:</p>

<code>
<pre>
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
	wp_enqueue_style( 'torvicvSlideCSS', get_stylesheet_directory_uri() . '/torvicvSlide-widget-master/torvicvSlide.css', array(), time());
	wp_enqueue_style( 'w3schoolsCSS', get_stylesheet_directory_uri() . '/torvicvSlide-widget-master/w3schools.css', array(), time());
	wp_enqueue_script('torvicvSlideJS', get_stylesheet_directory_uri() . '/torvicvSlide-widget-master/torvicvSlide.js', array('jquery'),time(), true);

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );
</pre>
</code>



<p style="font-size: 20px">Lo siguiente es crear otra función que contendrá el archivo php del código donde esta escrito lo que realiza 
nuestro widget, la clase que hemos creado en ese widget la registramos con register_widget y después llamamos 
al add_action para que ejecute nuestro widget después de los que vienen por defecto:</p>

<code>
<pre>
function wpb_load_widget() {
	include_once(get_stylesheet_directory().'/torvicvSlide-widget-master/torvicvSlide.php');
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
</pre>
</code>




<p style="font-size: 20px">Y por último escribimos la última función que es el js que nos da a elegir imagenes desde el widget, lo 
registramos poniéndole esta parametro al add_action "admin_print_scripts-widgets.php" y asi se llama después 
del admin widgets:</p>

<code>
<pre>
function mywidget_enqueue_scripts(){
   wp_enqueue_script('mediaWidget', get_stylesheet_directory_uri() . '/torvicvSlide-widget-master/scriptMediaWidget.js', array('jquery'),time(), true);
}
add_action( 'admin_print_scripts-widgets.php', 'mywidget_enqueue_scripts' );
</pre>
</code>-->
