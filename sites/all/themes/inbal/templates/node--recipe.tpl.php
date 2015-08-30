<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    if ($node->field_recipe_vegan['und'][0]['value']=="1") {?>
    <div class="vegan">
        <?php print render($content['field_recipe_vegan']); ?>
    </div>
    <?php };
    print render($content);
  ?>
  <?php if (render($content['field_youtube'])) { ?>
  <div class="video-container">
      <iframe allowfullscreen="" frameborder="0" height="360" src="<?php print $node->field_youtube['und'][0]['value']; ?>" width="640"></iframe>
  </div>
  <?php } ?>
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
