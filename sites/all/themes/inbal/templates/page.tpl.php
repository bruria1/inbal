<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
    <?php print render($page['deals']); ?>


    <?php print render($page['fixed']); ?>

<div class="white-wrapper">
    <?php print render($page['header']); ?>
</div>
<div class="wrapper-page">
<div class="header-wrapper">
        <a class="menu-right" href="#mmenu_right">
            <span class="bar1 icon-bar"></span>
            <span class="bar2 icon-bar"></span>
            <span class="bar3 icon-bar"></span>
        </a>
  <header class="header" id="header" role="banner">
    <div class="header-menu">




    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

          <div class="cart-mobile">
            <?php
              $my_block = module_invoke('views', 'block_view', 'shopping_top_manu-block_2');
              print render($my_block['content']); 
            ?>
          </div>
      <div class="wrapper-logo">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
        <?php endif; ?>
      </div>


    </div>
    <div id="navigation">

      <?php if ($main_menu): ?>

          <nav id="main-menu" role="navigation" tabindex="-1">

          <div class="menu-ul">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
          </div>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>
  </header>
</div>
    <div id="top">
      <?php print render($page['top']);?>
    </div>
<?php print render($page['cart']); ?>
<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($page['help']); ?>
      <?php print render($title_prefix); ?>
            <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><div class="title"><?php print $title; ?></div></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <div class="message-wrapper">
        <?php print $messages; ?>
      </div>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>


</div>

  <?php if ($page['content_bottom']):?>
      <?php print render($page['content_bottom']);?>
  <?php endif;?>

<div class="wrapper-bottom">
    <?php print render($page['bottom']); ?>
</div>
<div class="wrapper-footer">
  <?php print render($page['footer']); ?>
</div>
</div>