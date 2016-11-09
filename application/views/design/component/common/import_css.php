<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<link href="<?php echo echo_css() ?>/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo echo_css() ?>/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo echo_css() ?>/prettyPhoto.css" rel="stylesheet">
<!--<link href="<?php echo echo_css() ?>/item_hover.css" rel="stylesheet">-->
<link href="<?php echo echo_css() ?>/animate.min.css" rel="stylesheet">
<link href="<?php echo echo_css() ?>/main.css" rel="stylesheet">
 <!--<link href="<?php echo echo_css() ?>/stylesheet.css" rel="stylesheet">-->
<link href="<?php echo echo_css() ?>/responsive.css" rel="stylesheet">

<link href="<?php echo echo_css() ?>/override_main.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo echo_js() ?>/html5shiv.js"></script>
<script src="<?php echo echo_js() ?>/respond.min.js"></script>
<![endif]-->       
<link rel="shortcut icon" href="<?php echo echo_img() ?>/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo echo_img() ?>/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo echo_img() ?>/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo echo_img() ?>/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo echo_img() ?>/ico/apple-touch-icon-57-precomposed.png">

<?php foreach ($css_file as $value) { ?>
    <link href="<?php echo echo_css($value); ?>" rel="stylesheet">
<?php } ?>

<?php foreach ($css_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
