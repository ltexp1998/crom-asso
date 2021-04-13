<?php

// on déclare un fonction qui va gérer le chargement des fichiers css et js
function crom_theme_enqueue_scripts() {

    wp_enqueue_style( 
        'crom',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // cette fonction va s'occuper de générer et d'insérer une balise <link> qui chage une feuille de style
    wp_enqueue_style(
        'crom-style', 
        get_theme_file_uri('assets/css/main.css'), 
        [], 
        '13avril2021' 
    );

    wp_enqueue_script(
        'crom-script', 
        get_theme_file_uri('assets/js/main.js'), 
        [],
        '13avril2021', 
        true
    );

}

// on accroche la fonction crom_theme_enqueue_scripts sur le hook wp_enqueue_scripts
// on peu éventuellement jouer sur la priorité (ordre d'execution des fonctions au sein d'un hook)
add_action( 'wp_enqueue_scripts', 'crom_theme_enqueue_scripts', 20);