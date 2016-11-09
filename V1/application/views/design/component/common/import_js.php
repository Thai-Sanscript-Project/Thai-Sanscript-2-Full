
<!-- jQuery -->
<script src="<?php echo base_url("inc/js/"); ?>/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url("inc/js/"); ?>/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url("inc/js/"); ?>/jquery.easing.min.js"></script>
<script src="<?php echo base_url("inc/js/"); ?>/jquery.fittext.js"></script>
<script src="<?php echo base_url("inc/js/"); ?>/wow.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url("inc/js/"); ?>/creative.js"></script>
<script src="<?php echo base_url("inc/js/"); ?>/jquery.autosize.js"></script>
<script src="<?php echo base_url(); ?>sanscript.js/sanscript/sanscript.js"></script>

<script src="<?php echo base_url("inc/js/"); ?>/jquery.isotope.min.js"></script>
<script src="<?php echo base_url("inc/js/"); ?>/jquery.prettyPhoto.js"></script>

<script src="<?php echo base_url("inc/js/"); ?>/main.js"></script>


<?php foreach ($js_file as $value) { ?>
    <script src="<?php echo base_js($value); ?>"></script>
<?php } ?>

<?php foreach ($js_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
