<?php

function ion_menu_tree(&$variables)
//voor het bootstrap menu wordt niet gebruikt
{ return '<ul class="menu nav navbar-nav">' . $variables['tree'] . '</ul>'; }

//om de auteur in de zoekresultaten te verwijderen
function ion_preprocess_search_result(&$variables) {
    $variables['info'] = '';
}

/**
 * include external css files
 */

drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans' , array('group' => CSS_THEME, 'type' => 'external'));


/**
 * include js files
 **/

drupal_add_js('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' , 'external');

drupal_add_js('https://code.jquery.com/jquery-migrate-1.2.1.min.js' , 'external');

drupal_add_js(drupal_get_path('theme', 'ion') . '/js/bootstrap.min.js');

drupal_add_js(drupal_get_path('theme', 'ion') . '/js/ie10-viewport-bug-workaround.js');

