<?php  function ion_menu_tree(&$variables)
//voor het bootstrap menu wordt niet gebruikt
{ return '<ul class="menu nav navbar-nav">' . $variables['tree'] . '</ul>'; }

//om de auteur in de zoekresultaten te verwijderen
function ion_preprocess_search_result(&$variables) {
    $variables['info'] = '';
}
?>