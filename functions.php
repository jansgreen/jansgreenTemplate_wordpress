<?php 
if(function_exists('register_nav_menu')){
    register_nav_menus(array('superior' => 'Menu principal superior'));
}

// agregar opciones del meniu

add_filter('nav_menu_link_atributes', 'links_menu', 10, 3);

function link_menu($atts, $item, $args){
    $class= 'nav_link';
    $atts['class'] = $class;
    return $atts;

}


?>