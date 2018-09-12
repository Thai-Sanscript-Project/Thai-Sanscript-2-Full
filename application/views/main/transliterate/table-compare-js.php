<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">

    changeHeaderCompare();
    generateCompareTable();

    $(".select-type").change(function () {
        changeHeaderCompare();
        generateCompareTable();
    });

    function generateCompareTable() {
        var srctype = getSrcTypeval();
        var desttype = getDestTypeVal();
        if (desttype === 'none') {
            desttype = 'thai';
        }
        var map = Sanscript.makeMap(srctype, desttype, "");
        var p = map.letters;
        var txt = '';
        for (var key in p) {
            if (p.hasOwnProperty(key)) {
                var src_class = "class='glyphicon src " + srctype + "'";
                var dest_class = "class='glyphicon-class-dest dest " + desttype + "'";
                txt += "<li><span " + src_class + ">" + key + "</span><span " + dest_class + ">" + p[key] + "</span></li>";
            }
        }
        $('#table-compare').html(txt);

    }
    function changeHeaderCompare() {
        $('#txt-form').html(getSrcTypeText());
        $('#txt-to').html(getDestTypeText());
    }


</script>