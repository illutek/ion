<div class="content-form">
    <?php //print('<pre>'.print_r($form,1).'</pre>'); ?>
<?php
// Print out the progress bar at the top of the page
print drupal_render($form['progressbar']);

// Print out the preview message if on the preview page.
if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
}
?>
    <div id="bedrijf">
        <?php print drupal_render($form['submitted']['firma_naam']); ?>
        <?php print drupal_render($form['submitted']['bedrijfssector']); ?>
        <?php print drupal_render($form['submitted']['btw_nr']); ?>
    </div>
    <?php print drupal_render($form['submitted']['aanspreking']); ?>
    <?php print drupal_render($form['submitted']['voornaam']); ?>
    <?php print drupal_render($form['submitted']['naam']); ?>
    <?php print drupal_render($form['submitted']['adres']); ?>
    <div id="postcode_plaats">
    <div class="postcode"><?php print drupal_render($form['submitted']['postcode']); ?></div>
    <div class="plaats"><?php print drupal_render($form['submitted']['plaats']); ?></div>
    </div>
    <?php print drupal_render($form['submitted']['email']); ?>
    <?php print drupal_render($form['submitted']['ik_vraag_een_demo_aan']); ?>
    <?php print drupal_render($form['submitted']['ik_heb_interesse_in']); ?>
    <?php print drupal_render($form['submitted']['bericht']); ?>
    <?php
// Print out the main part of the form.
// Feel free to break this up and move the pieces within the array.
print drupal_render($form['submitted']);

// Always print out the entire $form. This renders the remaining pieces of the
// form that haven't yet been rendered above (buttons, hidden elements, etc).
print drupal_render_children($form);
?>
</div>


