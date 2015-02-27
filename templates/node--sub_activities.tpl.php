
<?php if ($teaser): ?>
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
    </div><!-- end wrapper_core -->
    <div class="">
        <a href="<?php print $node_url; ?>"><?php print render($content['field_image'][0]); ?></a>
    </div>



<?php else: ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>

        <div class="content"<?php print $content_attributes; ?>>
            <?php print render($content['body']); ?>
            <div class="bijlage clearfix">
                <?php print render ($content['field_bijlage']); ?>
            </div>
            <div class="clearfix">
                <?php print render($content['field_image']); ?>
            </div>
            <!--<div class="backto">
                <a href="javascript:javascript:history.go(-1)">Terug naar overzicht</a>
            </div> -->
        </div>

    </div>
<?php endif; ?>


