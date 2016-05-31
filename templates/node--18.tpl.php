<!-- Het contact formulier -->
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

    <div class="content-form col-md-7 col-sm-7">
        <?php print render($content); ?>

    </div>
    <div class="col-md-5 col-sm-5">
        <?php print render($content['field_openingsuren']); ?>
        <p><iframe frameborder="0" height="350" src="https://www.google.com/maps/embed?pb=!1m0!3m2!1snl!2sbe!4v1419773119389!6m8!1m7!1sztGYQ7zyAJE3_eI14ME-zQ!2m2!1d50.94288112853772!2d5.370900953749673!3f140.85086301406318!4f-5.5852334521675004!5f0.7820865974627469" style="border:0" width="100%"></iframe></p>
        <p><iframe frameborder="0" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.9554247350006!2d5.3713897!3d50.9430374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c12111b977f531%3A0x5d986a0826e6394d!2sSlagmolenstraat+1%2C+3500+Hasselt!5e0!3m2!1snl!2sbe!4v1419761366926" style="border:0" width="100%"></iframe></p>
    </div>

</div>
