<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">
    
    console.log(Sanscript.t("𑀕𑁅𑀩𑁆𑀭𑀸𑀳𑁆𑀫𑀡𑁂𑀪𑁆𑀬𑀂 𑀰𑀻𑀪𑀫𑀲𑁆𑀢𑀻 𑀦𑀹𑀢𑁆𑀬𑀁 𑀮𑁅𑀓𑀸𑀂 𑀲𑀫𑀲𑁆𑀢𑀸𑀂 𑀲𑀻𑀔𑀹𑀦𑁅𑀪𑀯𑀦𑁆𑀢𑀻", "brahmi", "iast"));

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
        console.log("getSrcTypeText: " + srcType);
        console.log("getDestTypeText: " + destType);
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

