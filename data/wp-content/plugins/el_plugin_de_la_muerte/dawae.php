wp-content/plugins/el_plugin_de_la_muerte/dawae.php

<?php

/*
Plugin Name: el_plugin_de_la_muerte
Description: Un plugin d'introduction pour le dev qui a été créé par sa seigneurie Skippy (Madintaiwaaan).
Version: 0.1.0.4.2.1.4.2
Author: Sidi mimoun Al Ghmami
Author URI: http://rtfm.com
License: GNU GPL
*/

function changeText_footer_admin() {  
    echo 'Ce texte me permet de changer la phrase du footer dans la partie admin !'; 
} 
    
add_filter('admin_footer_text', 'changeText_footer_admin');

function afficher_phrase() { 

    return 'Ce texte sera affiché quand on aura écrit [nomDuShortcode]'; 

} 

add_shortcode('nomDuShortcode', 'afficher_phrase');

"En écrivant [nomDuShortcode] sur une page, article ou autre, la fonction afficher_phrase 
va être exécutée et on obtiendra le return qui est prévu."