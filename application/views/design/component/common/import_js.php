<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="<?php echo_js() ?>/jquery.js"></script>
<script src="<?php echo_js() ?>/bootstrap.min.js"></script>
<script src="<?php echo_js() ?>/jquery.prettyPhoto.js"></script>
<script src="<?php echo_js() ?>/jquery.isotope.min.js"></script>
<script src="<?php echo_js() ?>/main.js"></script>
<script src="<?php echo_js() ?>/wow.min.js"></script>
<!--slow link creative-->


<script src="<?php echo base_url() ?>sanscript/sanscript.js"></script>
<script src="<?php echo base_url() ?>sanscript/thaisanscript.js"></script>
<script type="text/javascript">
//    $('a').click(function () {
//        $('html, body').animate({
//            scrollTop: $($.attr(this, 'href')).offset().top
//        }, 500);
//        return false;
//    });
</script>
<script type="text/javascript">
    $('.carousel').carousel();
</script>

<?php foreach ($js_file as $value) { ?>
    <script src="<?php echo_js($value); ?>"></script>
<?php } ?>

<?php foreach ($js_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
