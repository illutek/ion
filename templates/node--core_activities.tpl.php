<?php if ($teaser): ?><!-- de teaser -->
            <div class="wrapper_core">
                <div class="title_activities">
                    <?php print render($title_prefix); ?>
                    <?php if (!$page): ?>
                        <h3<?php print $title_attributes; ?>>
                            <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
                        </h3>
                    <?php endif; ?>
                    <?php print render($title_suffix); ?>
                </div><!-- end title_activities -->
            </div>
            <div class="">
                <a href="<?php print $node_url; ?>">
                    <?php print render($content['field_image']); ?>
                </a>
            </div>



<?php else: ?><!-- de volledige node -->
    <div class="core_activities_node">
        <div class=""><?php print render($content['field_image']); ?></div>
        <div class=""> <?php print render($content['body']); ?></div>
    </div>
<?php endif; ?>
