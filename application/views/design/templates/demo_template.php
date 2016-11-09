<!DOCTYPE html>
<html lang="th" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <?php $this->load->view('design/component/common/meta'); ?>
        <title><?php echo $page_title; ?></title>
        <?php $this->load->view('design/component/common/import_css'); ?>
        <?php $this->load->view('design/component/common/analyticstracking'); ?>
    </head><!--/head-->
    <body>
        <?php $this->load->view('design/component/common/google_tag_manager'); ?>
        <?php $this->load->view('design/component/common/facebook_sdk'); ?>
        <?php $this->load->view('design/component/template/demo_template/header'); ?>

        <?php foreach ($page_section as $section): ?>
            <?php $this->load->view($section); ?>
        <?php endforeach; ?>

        <?php $this->load->view('design/component/template/demo_template/footer'); ?>
        <?php $this->load->view('design/component/common/import_js'); ?>   
    </body>
</html>