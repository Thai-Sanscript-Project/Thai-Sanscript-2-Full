<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$active_menu;
$menu[10] = "";
$menu[20] = "";
$menu[30] = "";
$menu[40] = "";
$menu[50] = "";
//$menu[51] = "";
//$menu[52] = "";
//$menu[53] = "";
//$menu[54] = "";
//$menu[60] = "";
//$menu[70] = "";
$menu[$active_menu] = "active";
$mod = $active_menu % 10;
$mainmenu = $active_menu - $mod;
$menu[$mainmenu] = "active";
?>
<header id="header">         
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo base_url() ?>inc/images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?php echo $menu[10] ?>"><a href="<?php echo site_url() ?>"><?php echo lang('Home') ?></a></li>
                    <li class="<?php echo $menu[20] ?>"><a href="<?php echo site_url() ?>/main/transliterate"><?php echo lang('Transliteration') ?></a></li>
                    <li class="<?php echo $menu[30] ?>"><a href="<?php echo site_url() ?>/main/example"><?php echo lang('Example of Transliteration') ?></a></li>
                    <li class="<?php echo $menu[40] ?>"><a href="http://blog.thai-sanscript.com/"><?php echo lang('Article') ?></a></li>
                    <li class="<?php echo $menu[50] ?>  btn-outline-info">
                        <a href="<?php echo site_url() ?>/language/th?url=<?php echo current_url() ?>">ภาษาไทย</a> 
                        | 
                        <a href="<?php echo site_url() ?>/language/en?url=<?php echo current_url() ?>">English</a></li>
                    <!--<?php /**
  <li class="<?php echo $menu[40] ?>"><a href="<?php echo site_url() ?>/demo/theme/portfolio">Portfolio</a></li>
  <li class="dropdown <?php echo $menu[50] ?>">
  <a href="<?php echo site_url() ?>/demo/demo/#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
  <ul class="dropdown-menu">
  <li class="<?php echo $menu[51] ?>"><a href="<?php echo site_url() ?>/demo/theme/blog_item">Blog Single</a></li>
  <li class="<?php echo $menu[52] ?>"><a href="<?php echo site_url() ?>/demo/theme/pricing">Pricing</a></li>
  <li class="<?php echo $menu[53] ?>"><a href="<?php echo site_url() ?>/demo/theme/error_404">404</a></li>
  <li class="<?php echo $menu[54] ?>"><a href="<?php echo site_url() ?>/demo/theme/shortcodes">Shortcodes</a></li>
  </ul>
  </li>
  <li class="<?php echo $menu[60] ?>"><a href="<?php echo site_url() ?>/demo/theme/blog">Blog</a></li>
  <li class="<?php echo $menu[70] ?>"><a href="<?php echo site_url() ?>/demo/theme/contact_us">Contact</a></li>
 * */ ?>-->
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->