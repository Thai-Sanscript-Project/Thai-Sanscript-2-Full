<!DOCTYPE html>
<html lang="en" xmlns:fb="http://www.facebook.com/2008/fbml"> 
    <head>
        <?php $this->load->view('design/component/common/meta'); ?>
        <title><?php echo $page_title; ?></title>
        <?php $this->load->view('design/component/common/import_css'); ?>
    </head>
    <body class="homepage">
        <?php // $this->load->view('design/component/common/google_tag_manager'); ?>
        <?php // $this->load->view('design/component/template/main_template/header'); ?>
        <!-- begin content --> 
        <?php foreach ($page_section as $section): ?>
            <?php $this->load->view($section); ?>
        <?php endforeach; ?>
        <!-- end content -->      
       

        <?php $this->load->view('design/component/common/import_js'); ?>
        <?php $this->load->view('welcome_message/js'); ?>
        
    </body>
</html>
<!--MAIN TEMPLATE-->