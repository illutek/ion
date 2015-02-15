<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
      <div class="wij-verdelen-left col-md-6">
          <?php print render($content['field_image']); ?>
          <div class="wij-verdelen-header">
              <?php print render($content['body']); ?>
          </div>
          <!-- voorwaarde om de video of wel de bijlages te tonen -->
          <?php  if ($field_video OR $field_iframe_video): ?>
              <div class="wij-verdelen-video">
                  <?php print render($content['field_iframe_video']); ?>
                  <?php print render($content['field_video']); ?>
              </div>
              <?php else: ?>
              <!-- als er geen video is print dan hier de bijlage en website af -->
              <div class="verdelen_extra_info">
                  <?php if ($field_bijlage): ?>
                      <h4>Folders</h4>
                      <?php print render($content['field_bijlage']); ?>
                  <?php endif; ?>
                  <?php if ($field_url_site): ?>
                      <h4>De website</h4>
                      <?php print render($content['field_url_site']); ?>
                  <?php endif; ?>
              </div>
          <?php  endif; ?>
      </div><!-- end wij-verdelen-left -->

      <div class="wij-verdelen-right col-md-6">
          <div class="product_img clearfix">
              <?php print render($content['field_verdelen_product_img']); ?>
          </div>
          <!-- als er video is print dan de bijlage en website af -->
          <?php if (($field_video) OR ($field_iframe_video)): ?>
              <div class="verdelen_extra_info">
                  <?php if ($field_bijlage): ?>
                      <h4>Folders</h4>
                      <?php print render($content['field_bijlage']); ?>
                  <?php endif; ?>
                  <?php if ($field_url_site): ?>
                      <h4>De website</h4>
                      <?php print render($content['field_url_site']); ?>
                  <?php endif; ?>
              </div>
          <?php endif; ?>
      </div><!-- end wij-verdelen-right  -->
  </div><!-- end content -->
</div>
