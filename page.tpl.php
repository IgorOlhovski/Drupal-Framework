<?php
// $Id$
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language ?>" lang="<?php print $language ?>">
  <head>
    <title><?php print $head_title ?></title>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lte IE 7]><style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/fix-ie.css";</style><![endif]--><!--For IE7 and lower-->
    <!--[if lt IE 7]><style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/fix-ie6.css";</style><![endif]--><!--For IE6 and lower-->
  </head>
  <body<?php print phptemplate_body_class($sidebar_left, $sidebar_right); ?>>

<!-- Layout -->
    <div id="wrapper">
      <div id="header">
        <?php print $header; ?>

        <?php
          // Prepare header
          $site_fields = array();
          if ($site_name) {
            $site_fields[] = check_plain($site_name);
          }
          if ($site_slogan) {
            $site_fields[] = check_plain($site_slogan);
          }
          $site_title = implode(' ', $site_fields);
          $site_fields[0] = '<span>'. $site_name .'</span>';
          $site_fields[1] = '<span id="slogan">'. $site_slogan .'</span>';
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
            print '<h1><a href="'. check_url($base_path) .'" title="'. $site_title .'">';
//            if ($logo) {
//              print '<img src="'. check_url($logo) .'" alt="'. $site_title .'" id="logo" />';
//            }
            print $site_html .'</a></h1>';
          }
        ?>

        <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
        <div class="clear"></div>
      </div>

      <div id="nav">

        <?php if (isset($primary_links)) : ?>
        <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
        <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>

      </div>

      <div id="container">
  
        <?php if ($sidebar_left): ?>
        <div id="sidebar-left" class="sidebar">
          <?php print $sidebar_left ?>
        </div> <!-- /#sidebar-left -->
        <?php endif; ?>

        <div id="center">
          <?php if ($breadcrumb): print $breadcrumb; endif; ?>
          <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
          <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
          <?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
          <?php if ($tabs): print $tabs .'</div>'; endif; ?>
          <?php if (isset($tabs2)): print $tabs2; endif; ?>
          <?php if ($help): print $help; endif; ?>
          <?php if ($messages): print $messages; endif; ?>

          <?php print $content ?>

        </div> <!-- /#center -->

        <?php if ($sidebar_right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php print $sidebar_right ?>
        </div> <!-- /#sidebar-right -->
        <?php endif; ?>

        <div id="footer" class="clear">
          <?php print $footer_message ?>
          <?php print $feed_icons ?>
        </div>

      </div> <!-- /container -->
      <span class="clear"></span>
    </div>
<!-- /layout -->

  <?php print $closure ?>

  </body>
</html>
