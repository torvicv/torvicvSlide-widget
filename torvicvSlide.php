<?php
// Creamos el widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(

// El ID de nuestro widget
'torvicvSlide_widget', 

// El nombre con el cual aparecerÃ¡ en el backoffice de WP
__('Torvicv Slide', 'wpb_widget_domain'), 

// DescripciÃ³n del widget
array( 'description' => __( 'Widget slide creado por Victor Cabral Vida', 'wpb_widget_domain' ), ) 
);
}

// Creamos la parte pÃºblica del widget

public function widget( $args, $instance ) {
$titulo = apply_filters( 'widget_title', $instance['titulo'] );
$ruta1 = $instance['ruta1'];
$ruta2 = $instance['ruta2'];
$ruta3 = $instance['ruta3'];
$ruta4 = $instance['ruta4'];
$ruta5 = $instance['ruta5'];
$ruta6 = $instance['ruta6'];

// los argumentos del antes y despuÃ©s del widget vienen definidos por el tema
echo $args['before_widget'];
if ( ! empty( $titulo ) ){
echo $args['before_title'] . $titulo . $args['after_title'];
}
// AquÃ­ es donde debemos introducir el cÃ³digo que queremos que se ejecute
echo __( 'Hola mundo', 'wpb_widget_domain' );?>

<!-- html aÃ±adido por victor -->

<div class="w3-content w3-display-container"><img class="mySlides" style="order: 0;" src="<?php echo $ruta1; ?>" />
<img class="mySlides class2" style="order: 1;" src="<?php echo $ruta2; ?>" />
<img class="mySlides" style="order: 2;" src="<?php echo $ruta3; ?>" />
<?php
if( !empty($ruta4)){
?>
<img class="mySlides" style="order: 3;" src="<?php echo $ruta4; ?>" />
<?php
}
if( !empty($ruta5)){
?>
<img class="mySlides" style="order: 4;" src="<?php echo $ruta5; ?>" />
<?php
}
if( !empty($ruta6)){
?>
<img class="mySlides" style="order: 5;" src="<?php echo $ruta6; ?>" />
<?php
}
?>
<button class="w3-button w3-black w3-display-left">&#10094;</button>
<button class="w3-button w3-black w3-display-right">&#10095;</button></div>

<!-- fin html aÃ±adido por victor -->
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
if ( isset( $instance[ 'ruta2' ] ) ) {
$ruta2 = $instance[ 'ruta2' ];
}
if ( isset( $instance[ 'ruta3' ] ) ) {
$ruta3 = $instance[ 'ruta3' ];
}
if ( isset( $instance[ 'ruta4' ] ) ) {
$ruta4 = $instance[ 'ruta4' ];
}
if ( isset( $instance[ 'ruta5' ] ) ) {
$ruta5 = $instance[ 'ruta5' ];
}
if ( isset( $instance[ 'ruta6' ] ) ) {
$ruta6 = $instance[ 'ruta6' ];
}
 
// Formulario del backend
?>
<p>
    <label for="<?php echo $this->get_field_id( 'titulo' ); ?>"><?php _e( 'titulo:' ); ?></label>
    <input type="text" class="upload_image_input" id="<?php echo $this->get_field_id( 'titulo' ); ?>" 
       name="<?php echo $this->get_field_name( 'titulo' ); ?>" value="<?php echo esc_attr( $titulo ); ?>"/>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'ruta1' ); ?>"><?php _e( 'ruta1:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta1' ); ?>" 
           name="<?php echo $this->get_field_name( 'ruta1' ); ?>" value="<?php echo esc_attr( $ruta1 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'ruta2' ); ?>"><?php _e( 'ruta2:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta2' ); ?>" 
    name="<?php echo $this->get_field_name( 'ruta2' ); ?>" value="<?php echo esc_attr( $ruta2 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'ruta3' ); ?>"><?php _e( 'ruta3:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta3' ); ?>" 
    name="<?php echo $this->get_field_name( 'ruta3' ); ?>" value="<?php echo esc_attr( $ruta3 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>

<p>
    <label for="<?php echo $this->get_field_id( 'ruta4' ); ?>"><?php _e( 'ruta4:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta4' ); ?>" 
    name="<?php echo $this->get_field_name( 'ruta4' ); ?>" value="<?php echo esc_attr( $ruta4 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'ruta5' ); ?>"><?php _e( 'ruta5:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta5' ); ?>" 
    name="<?php echo $this->get_field_name( 'ruta5' ); ?>" value="<?php echo esc_attr( $ruta5 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>
<p>
    <label for="<?php echo $this->get_field_id( 'ruta6' ); ?>"><?php _e( 'ruta6:' ); ?></label>
    <input type="url" class="upload_image_input" id="<?php echo $this->get_field_id( 'ruta6' ); ?>" 
    name="<?php echo $this->get_field_name( 'ruta6' ); ?>" value="<?php echo esc_attr( $ruta6 ); ?>"/>
    <button class="upload_image_button">Select image</button>
</p>
<?php 
submit_button("verificar", "primary widget-control-save right", "verificar", false);
}
	
// Actualizamos el widget reemplazando las viejas instancias con las nuevas
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['titulo'] = ( ! empty( $new_instance['titulo'] ) ) ? strip_tags( $new_instance['titulo'] ) : '';
$instance['ruta1'] = ( ! empty( $new_instance['ruta1'] ) ) ? strip_tags( $new_instance['ruta1'] ) : '';
$instance['ruta2'] = ( ! empty( $new_instance['ruta2'] ) ) ? strip_tags( $new_instance['ruta2'] ) : '';
$instance['ruta3'] = ( ! empty( $new_instance['ruta3'] ) ) ? strip_tags( $new_instance['ruta3'] ) : '';
$instance['ruta4'] = ( ! empty( $new_instance['ruta4'] ) ) ? strip_tags( $new_instance['ruta4'] ) : '';
$instance['ruta5'] = ( ! empty( $new_instance['ruta5'] ) ) ? strip_tags( $new_instance['ruta5'] ) : '';
$instance['ruta6'] = ( ! empty( $new_instance['ruta6'] ) ) ? strip_tags( $new_instance['ruta6'] ) : '';
return $instance;
}
} // La clase wp_widget termina aquÃ­
