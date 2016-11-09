<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">

    function getSrcTxtval() {
        return $("#src-txt").val().toLowerCase();
    }
    function getDestTxtVal() {
        return $("#dest-txt").val();
    }
    function getSrcTypeText() {
        return $("#src-type option:selected").text();
    }
    function getDestTypeText() {
        return $("#dest-type option:selected").text();
    }
    function getSrcTypeval() {
        return $("#src-type").val();
    }
    function getDestTypeVal() {
        return $("#dest-type").val();
    }

    function transliteration() {
        var output = "";
        var txt = getSrcTxtval();
        var srcType = getSrcTypeval();
        var destType = getDestTypeVal();

        if (srcType === 'thai') {
            /*thaisanscript.js*/
            txt = thaisanscript(txt);
            srcType = 'iast';
        }
        output = Sanscript.t(txt, srcType, destType);

        return output;
    }

    function transliteToBackend() {
        var output = "";
        var txt = getSrcTxtval();
        var srcType = getSrcTypeval();

        if (srcType === 'thai') {
            /*thaisanscript.js*/
            output = thaisanscript(txt);
        } else {
            output = Sanscript.t(txt, srcType, 'iast');
        }
        return output;
    }
</script>

