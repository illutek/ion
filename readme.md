De linken terug naar overzicht bij de producten zit in de view

De terug link bovenaan elke pagina in de page.tpl.php op uitzondering van de front pagina

Zeker opletten met het hergebruik van een image field het gaat niet op om bv bij een bepaald inhoudstype
onbeperkt te kiezen en bij een ander maar voor 1 afbeelding

Afwijking op de regel in de core module het pdf icoontje application-pdf.png vervangen door eigen

De module https://www.drupal.org/project/webform_classes om aan de verschillende webform velden
een eigen class te kunnen geven

Het menu op bijna alle pagina's buiten de front het eerste niveau de core automatisch alle onderverdelingen
 handmatig toegevoegd, bv sanitair komt ondermeer meer dan 1 keer voor onder core, het opmaken en het javascript
 schuiven met de module nice menu https://www.drupal.org/project/nice_menus


Verwijdert uit html.tpl.php

!-- google fonts Open Sans-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

Verwijdert uit page.tlp.php

    <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="<?php print base_path() . path_to_theme(); ?>/js/ie10-viewport-bug-workaround.js"></script>


Nieuws berichten
- de volledige berichten op de nieuwspagina volledige inhoud geprint geen tpl.php file
- de teaser op de frontpagina op datum in de view velden met resultaten herschrijven