<?php if ($teaser): ?>
    <div class="core_activities">
        <div class="col-sm-4 col-md-4">
            <div class="wrapper_core_items">
                <div class="img_core">
                    <a href="<?php print $node_url; ?>"><?php print render($content['field_image']); ?></a>
                </div>
                <div class="title_core">
                    <?php print render($title_prefix); ?>
                    <?php if (!$page): ?>
                        <h3<?php print $title_attributes; ?>>
                            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                        </h3>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                </div>
            </div><!-- end wrapper_core_items -->
        </div><!-- end col-sm-4 -->
    </div><!-- end core_activities -->
<?php else: ?>
    <div class="core_activities_node">
        <div class=""><?php print render($content['field_image']); ?></div>
        <div class=""> <?php print render($content['body']); ?></div>
    </div>
<?php endif; ?>
