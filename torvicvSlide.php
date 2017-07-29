<?php
// Creamos el widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(

// El ID de nuestro widget
'wpb_widget', 

// El nombre con el cual aparecerÃƒÂ¡ en el backoffice de WP
__('Widget de Prueba', 'wpb_widget_domain'), 

// DescripciÃƒÂ³n del widget
array( 'description' => __( 'Ejemplo para probar widget personalizado', 'wpb_widget_domain' ), ) 
);
}

// Creamos la parte pÃƒÂºblica del widget

public function widget( $args, $instance ) {
$titulo = apply_filters( 'widget_title', $instance['titulo'] );
$ruta1 = $instance['ruta1'];
$ruta2 = $instance['ruta2'];
$ruta3 = $instance['ruta3'];
$ruta4 = $instance['ruta4'];
$ruta5 = $instance['ruta5'];
$ruta6 = $instance['ruta6'];

// los argumentos del antes y despuÃƒÂ©s del widget vienen definidos por el tema
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $titulo . $args['after_title'];

// AquÃƒÂ­ es donde debemos introducir el cÃƒÂ³digo que queremos que se ejecute
echo __( 'Hola mundo', 'wpb_widget_domain' );?>

<!-- html aÃƒÂ±adido por victor -->

<div class="w3-content w3-display-container"><img class="mySlides" style="order: 0;" src="<?php echo $ruta1; ?>" />
<img class="mySlides class2" style="order: 1;" src="<?php echo $ruta2; ?>" />
<img class="mySlides" style="order: 2;" src="<?php echo $ruta3; ?>" />
<img class="mySlides" style="order: 3;" src="<?php echo $ruta4; ?>" />
<img class="mySlides" style="order: 4;" src="<?php echo $ruta5; ?>" />
<img class="mySlides" style="order: 5;" src="<?php echo $ruta6; ?>" />
<button class="w3-button w3-black w3-display-left">&#10094;</button>
<button class="w3-button w3-black w3-display-right">&#10095;</button></div>

<!-- fin html aÃƒÂ±adido por victor -->
<?php
echo $args['after_widget'];
}
		
// Backend  del widget
public function form( $instance ) {
if ( isset( $instance[ 'titulo' ] ) ) {
$titulo = $instance[ 'titulo' ];
}
else {
$titulo = __( 'Titulo', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta1' ] ) ) {
$ruta1 = $instance[ 'ruta1' ];
}
else {
$ruta1 = __( 'path', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta2' ] ) ) {
$ruta2 = $instance[ 'ruta2' ];
}
else {
$ruta2 = __( 'path', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta3' ] ) ) {
$ruta3 = $instance[ 'ruta3' ];
}
else {
$ruta3 = __( 'path', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta4' ] ) ) {
$ruta4 = $instance[ 'ruta4' ];
}
else {
$ruta4 = __( 'path', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta5' ] ) ) {
$ruta5 = $instance[ 'ruta5' ];
}
else {
$ruta5 = __( 'path', 'wpb_widget_domain' );
}
if ( isset( $instance[ 'ruta6' ] ) ) {
$ruta6 = $instance[ 'ruta6' ];
}
else {
$ruta6 = __( 'path', 'wpb_widget_domain' );
}
// Formulario del backend
?>
<p>
<label for="<?php echo $this->get_field_id( 'ruta1' ); ?>"><?php _e( 'ruta1:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta1' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta1' ); ?>" value="<?php echo esc_attr( $ruta1 ); ?>"/>
<button class="upload_image_button">Select image</button>
</p>
<p>
<label for="<?php echo $this->get_field_id( 'ruta2' ); ?>"><?php _e( 'ruta2:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta2' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta2' ); ?>" value="<?php echo esc_attr( $ruta2 ); ?>"/>
<button class="upload_image_button">Select image</button></p>

<p>
<label for="<?php echo $this->get_field_id( 'ruta3' ); ?>"><?php _e( 'ruta3:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta3' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta3' ); ?>" value="<?php echo esc_attr( $ruta3 ); ?>"/>
<button class="upload_image_button">Select image</button>
</p>

<p>
<label for="<?php echo $this->get_field_id( 'ruta4' ); ?>"><?php _e( 'ruta4:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta4' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta4' ); ?>" value="<?php echo esc_attr( $ruta4 ); ?>"/>
<button class="upload_image_button">Select image</button>
</p>

<p>
<label for="<?php echo $this->get_field_id( 'ruta5' ); ?>"><?php _e( 'ruta5:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta5' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta5' ); ?>" value="<?php echo esc_attr( $ruta5 ); ?>"/>
<button class="upload_image_button">Select image</button>
</p>

<p>
<label for="<?php echo $this->get_field_id( 'ruta6' ); ?>"><?php _e( 'ruta6:' ); ?></label>
<input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta6' ); ?>" 
name="<?php echo $this->get_field_name( 'ruta6' ); ?>" value="<?php echo esc_attr( $ruta6 ); ?>"/>
<button class="upload_image_button">Select image</button>
</p>
<?php 
}
	
// Actualizamos el widget reemplazando las viejas instancias con las nuevas
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['ruta1'] = ( ! empty( $new_instance['ruta1'] ) ) ? strip_tags( $new_instance['ruta1'] ) : '';
$instance['ruta2'] = ( ! empty( $new_instance['ruta2'] ) ) ? strip_tags( $new_instance['ruta2'] ) : '';
$instance['ruta3'] = ( ! empty( $new_instance['ruta3'] ) ) ? strip_tags( $new_instance['ruta3'] ) : '';
$instance['ruta4'] = ( ! empty( $new_instance['ruta4'] ) ) ? strip_tags( $new_instance['ruta4'] ) : '';
$instance['ruta5'] = ( ! empty( $new_instance['ruta5'] ) ) ? strip_tags( $new_instance['ruta5'] ) : '';
$instance['ruta6'] = ( ! empty( $new_instance['ruta6'] ) ) ? strip_tags( $new_instance['ruta6'] ) : '';
return $instance;
}
} // La clase wp_widget termina aquÃƒÂ­
