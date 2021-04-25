<?php

function dsm_styles() {
    
    //Normalize Styles    
    wp_register_style("Normalize", get_template_directory_uri() . "/dist/normalize.css", array(), false, 'all');
    wp_enqueue_style("Normalize");
    
    //Custom Styles    
    wp_register_style("customstyle", get_template_directory_uri() . "/style.css", array(), false, 'all');
    wp_enqueue_style("customstyle");
}

add_action("wp_enqueue_scripts", "dsm_styles");

function dsm_jQuery() {
    
    wp_deregister_script("jquery");

    wp_register_script("jquery", 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, true );
    wp_enqueue_script("jquery");   


}

add_action("wp_enqueue_scripts", "dsm_jQuery");

function dsm_scripts() { 

    wp_register_script("customJs", get_template_directory_uri() . "/vendor/js/scripts.js", '', 1, true );
    wp_enqueue_script("customJs");    

    wp_register_script("customJs", get_template_directory_uri() . "/vendor/js/scripts.js", '', 1, true );
    wp_enqueue_script("customJs");
}

add_action("wp_enqueue_scripts", "dsm_scripts");