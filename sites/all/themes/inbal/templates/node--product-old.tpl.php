<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="wrapper-product">
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
    print render($content);
  ?>

</article>



<div class="wrapper-blue">
  <div class="content">
    <div class="wrapper">
      <div class="right">
        <div class="views-label">פרטים נוספים</div>
        <?php print render($content['field_additional_comments']); ?>
        <?php print render($content['field_product_useway']); ?>
        <?php
          $my_block = module_invoke('views', 'block_view', 'products-block_5');
          print render($my_block['content']); 
        ?>
      </div>
      <div class="left">
        <?php
          $my_block = module_invoke('views', 'block_view', 'product_comments-block_1');
          print render($my_block['content']); 
        ?>
       <a class="new-comment" href="/comment/reply/<?php print $node->nid?>#comment-form">להוספת חוות דעת</a>
      <!--  <div class="add-comment hide">
          <?php $comment_form = drupal_get_form("comment_node_product_form", (object) array('nid' => $node->nid)); ?>
          <?php print drupal_render($comment_form); ?>
        </div> -->
      </div>
    </div>
  </div>
</div>
</div>
<div class="wrapper-more-products">
    <h2>רוכשים שרכשו מוצר זה התעניינו גם ב:</h2>
    <?php
      $my_block = module_invoke('views', 'block_view', 'products-block_1');
      print render($my_block['content']); 
    ?>
</div>
<!--
<div class="wrapper-comments">  
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</div>
-->
