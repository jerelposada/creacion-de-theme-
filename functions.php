<?php
//consultas reutilizables

require get_template_directory().'/inc/queries.php';


//cunando el tema es activado

function gymfitness_setup()
{
add_theme_support('post-thumbnails');

//Agregar imagenes de tamaño personalizado
add_image_size( 'square', 350, 350, true );
add_image_size( 'caja', 400,375, true );

add_image_size( 'portrait', 350,724, true );

add_image_size( 'mediano', 700 ,400, true );

add_image_size( 'blog',966,944, true );
}
add_action('after_setup_theme','gymfitness_setup');




  //funcion para registrar menu
  // podemo crear cuants menu queramos
function gymfitness_menu()
{
  
    register_nav_menus(array(
        'menu-principal'=> __('menu Principal', 'gymfitness')
    ));
}


add_action('init','gymfitness_menu');



//Scripts y Styles
function gymfitness_scripts_styles()
{
    wp_enqueue_style('normalize',get_template_directory_uri() . '/css/normalize.css', array(),'8.0.0');

    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    
    wp_enqueue_style( 'slicknavCSS', get_template_directory_uri(). '/css/slicknav.min.css',array(), '1.0.0');
    if(is_page('galeria')):
    wp_enqueue_style( 'lightboxCSS', get_template_directory_uri(). '/css/lightbox.min.css',array(), '2.7.0');
    endif;
    
    wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'),'1.0.0',true);

    if(is_page('galeria')):
    wp_enqueue_script('lightboxJS', get_template_directory_uri().'/js/lightbox.min.js', array('jquery'),'2.7.0',true);
    endif;

    wp_enqueue_script('scriptsJS', get_template_directory_uri().'/js/scripts.js', array('slicknavJS','jquery'),'1.0.0',true);

    
    
    wp_enqueue_style('style',get_stylesheet_uri(), array('normalize','googleFonts'), '1.0.0');
}

add_action('wp_enqueue_scripts','gymfitness_scripts_styles');

//definir la zona de widgets

function gymfitness_widgets()
{
register_sidebar(array(
    'name' =>'Sidebar 1',
    'id'=>'sidebar_1',
    'before_widget' =>'<div class=" widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h3 class="text-center texto-primario">',
    'after_widget'=>'</h3>'
) );

register_sidebar(array(
    'name' =>'Sidebar 2',
    'id'=>'sidebar_2',
    'before_widget' =>'<div class=" widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h3 class="text-center texto-primario">',
    'after_widget'=>'</h3>'
) );
}
add_action('widgets_init','gymfitness_widgets');