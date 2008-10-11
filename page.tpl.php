<?php
// $Id$
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lte IE 7]><?php print phptemplate_get_ie_styles(); ?><![endif]--><!--If Less Than or Equal (lte) to IE 7-->
  </head>
  <body<?php print phptemplate_body_class($left, $right); ?>>

<!-- Layout -->
    <div id="wrapper">
      <div id="header">
        <?php print $header; ?>
          <?php print '<h1><a href="'. check_url($front_page) .'" title="'. check_plain($site_name) .'">';
            if ($logo) {
              print '<img src="'. check_url($logo) .'" alt="'. check_plain($site_name) .'" id="logo" />';
            }
            if ($site_name) {
              print '<span id="name">'. check_plain($site_name) .'</span>';
            }
            if ($site_slogan) {
              print '<span id="slogan">'. check_plain($site_slogan) .'</span>';
            }
            print '<span class="clear"></span></a></h1>';
          ?>
        <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
        <div class="clear"></div>
      </div> <!-- /#header -->

      <div id="nav">
        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>
      </div> <!-- /#nav -->

      <div id="container">

        <?php if ($left): ?>
          <div id="sidebar-left" class="sidebar">
            <?php print $left ?>
          </div> <!-- /#sidebar-left -->
        <?php endif; ?>

        <div id="center">
          <?php print $breadcrumb; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
          <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
          <?php if ($show_messages && $messages): print $messages; endif; ?>
          <?php print $help; ?>
          <?php print $content ?>
        </div> <!-- /#center -->
  
        <?php if ($right): ?>
          <div id="sidebar-right" class="sidebar">
            <?php print $right ?>
          </div> <!-- /#sidebar-right -->
        <?php endif; ?>

        <div id="footer" class="clear">
          <?php print $footer_message . $footer ?>
          <?php print $feed_icons ?>
        </div> <!-- /#footer -->

      </div> <!-- /#container -->
      <span class="clear"></span>
    </div> <!-- /#wrapper -->
<!-- /layout -->

  <?php print $closure ?>

  </body>
</html>
