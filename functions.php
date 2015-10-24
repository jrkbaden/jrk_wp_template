<?php

//Menüs hinzufügen
function register_my_menus() {
  register_nav_menus(
    array(
      'menu1' => __( 'Graues Menue' ),
      'menu2' => __( 'Hauptmenue' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//Thumbnails für Beiträge hinzufügen
add_theme_support( 'post-thumbnails' ); 


//Betitelung des Links am Schluss der Suchergebnisse
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[weiter...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


//Länge der Suchergebnisse
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//Sidebar registrieren
register_sidebar( array(
    'id'          => 'sidebar-left',
    'name'        => __( 'Sidebar Left', $text_domain ),
    'description' => __( 'This sidebar is located left.', $text_domain ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
) );


//Lightbox registrieren
add_action( 'wp_enqueue_scripts', 'add_thickbox' );
add_action( 'wp_footer', 't5_thickbox_jquery' );

function t5_thickbox_jquery(){
	?>
	<script>
		jQuery( 'a img.size-medium, a img.attachment-thumbnail, a img' )
		.parent()
		.addClass( 'thickbox' )
		.attr( 'rel', 'page' );
	</script>
	<?php
}


//Editor im Backend anpassen
add_editor_style('tinymce_style.css');

?>