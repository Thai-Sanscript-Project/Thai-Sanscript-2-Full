<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">

//    var output = Sanscript.t('t.h', 'iasttest', 'iast');
//    console.log("Output : " + output);
//    $(".translite").bind('keyup keydown keypress change mousedown paste', function () {
//    $(".translite").bind('keyup keydown keypress change paste', function () {
//        $("#dest-txt").val(transliteration());
//    });
    $("#src-type").bind('change', function () {
    if (getSrcTypeval() === 'thai') {
    $("#hint-thai").show();
    } else {
    $("#hint-thai").hide();
    }

    if (getSrcTypeval() === 'lao' || getDestTypeVal() === 'lao') {
    $("#hint-lao").show();
    $("#src-txt").addClass("lao");
    } else {
    $("#hint-lao").hide();
    $("#src-txt").removeClass("lao");
    }
    });
</script>