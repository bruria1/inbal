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
      <div class="left-article">
          <?php print render($content['field_product_defult_image']); ?>
          <?php print render($content['field_tavit_image']); ?>
    </div>
  <div class="right-article">
    <div class="orange-circle">
          <?php
              $my_block = module_invoke('views', 'block_view', 'orange_circle-block');
              print render($my_block['content']); 
          ?>
    </div>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_product_defult_image']);
      hide($content['field_product_useway']);
      hide($content['field_additional_comments']);
      print render($content);
    ?>
    <div class="right-details">
      <div class="inside">
          <div class="views-label">אופן שימוש ופרטים נוספים</div>
          <?php print render($content['field_additional_comments']); ?>
          <?php print render($content['field_product_useway']); ?>
          <?php
            $my_block = module_invoke('views', 'block_view', 'products-block_5');
            print render($my_block['content']); 
          ?>
        </div>
      </div>
    </div>

</article>


<div class="wrapper-blue">
  <div class="content">
    <div class="wrapper">
      <div class="right">
        <?php
          $my_block = module_invoke('views', 'block_view', 'product_comments-block_2');
          print render($my_block['content']); 
        ?>
        <a class="new-comment" href="/comment/reply/<?php print $node->nid?>#comment-form">להוספת חוות דעת</a>
      </div>
      <div class="left">
        <div class="wrapper-more-products">
            <h2>רוכשים שרכשו מוצר זה התעניינו גם ב:</h2>
            <?php
              $my_block = module_invoke('views', 'block_view', 'products-block_7');
              print render($my_block['content']); 
            ?>
        </div>
      <!--  <div class="add-comment hide">
          <?php $comment_form = drupal_get_form("comment_node_product_form", (object) array('nid' => $node->nid)); ?>
          <?php print drupal_render($comment_form); ?>
        </div> -->
      </div>
    </div>
  </div>
</div>
</div>

<!--
<div class="wrapper-comments">  
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</div>
-->
