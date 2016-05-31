<?php if ($teaser): ?>
<div class="row">
    <div class="action-img">
        <?php print render($content['field_image'][0]); ?>
        <?php // print_r ($field_image)  ?>
        <?php // print_r ($field_action_or_news)  ?>
    </div>
    <div class="actions-text">
        <h1><?php print render($content['field_action_or_news']); ?></h1>
        <h3><?php print $title; ?></h3>
        <?php print render($content['body']); ?>
        <a href="<?php print $node_url; ?>">Lees meer ...</a>
    </div>
</div>

    <?php else: ?>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>

    <?php print render($title_suffix); ?>
        <div class="content"<?php print $content_attributes; ?>>
            <?php print render($content); ?>
        </div>
    </div>
<?php endif; ?>