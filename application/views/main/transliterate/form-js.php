<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">

//    $(".translite").bind('keyup keydown keypress change mousedown paste', function () {
    $(".translite").bind('keyup keydown keypress change paste', function () {
        $("#dest-txt").val(transliteration());
    });
    $("#src-type").bind('change', function () {
        if (getSrcTypeval() === 'thai') {
            $("#hint-thai").show();
        } else {
            $("#hint-thai").hide();
        }
    });
</script>