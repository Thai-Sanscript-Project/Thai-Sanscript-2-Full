<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script type="text/javascript">
    $(document).on({
        ajaxStart: function () {
            $("body").addClass("loading");
        },
        ajaxStop: function () {
            $("body").removeClass("loading");
        }
    });

    $('#translite-button').click(function () {
        var sourceTxt = getSrcTxtval();
        var source = lineSplit(sourceTxt);
        var destination = transliteration();
        destination = lineSplit(destination);
        var sendToBackend = transliteToBackend();

        var d = new Date();
        var timestamp = d.getTime();
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Transliteration/json'); ?>",
            method: "POST",
            dataType: 'json',
            data: {
//                    "sanskrit-romanize": roman.val(),
//                    "sanskrit-devanagari": devanagari.val(),
                "src-txt": sendToBackend
            },
            success: function (data) {
                var display = new Array(1, 1, 1, 1);
                var showAndCheck = new Array(1, 0, 1, 0);
//             
                if (getSrcTypeval() === 'thai') {
                    display = new Array(1, 1, 0, 1);
                    showAndCheck = new Array(1, 1, 0, 0);
                }


                var html = header() +
                        checkboxList(display, showAndCheck) +
                        langSection('1', getSrcTypeText(), source, display[0], showAndCheck[0]) +
                        langSection('2', getDestTypeText(), destination, display[1], showAndCheck[1]) +
                        langSection('3', 'ไทย-คงรูป(แบบแผน)', data[0], display[2], showAndCheck[2]) +
                        langSection('4', 'ไทย-ปรับรูป(ทั่วไป)', data[1], display[3], showAndCheck[3]) +
                        backButton();
                $('#transliterate-compare').html(html);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                XMLHttpRequest = "";
                console.log("Status: " + textStatus);
                console.log("Error: " + errorThrown);
            }
        });

    });

    var counterChecked = 0;
    $(document).on('click', '.checkbox-sanskrit', function () {
        var val = $(this).val();
        var countCheck = $('.checkbox-sanskrit:checkbox:checked').length;
        var percentwidth = (100 / countCheck).toFixed(2) - 2;
        if (!isNaN(percentwidth)) {
            $('.code').width(percentwidth + '%');
        }

        if ($(this).is(':checked')) {
            $("#" + val).show();
        } else {
            $("#" + val).hide();
        }

    });

    $(document).on('click', '.s', function () {
        var str = $(this).attr('id');
        var idsplit = str.split("-");
        var num = idsplit[1] + "-" + idsplit[2];

        $('.s').removeClass('hilight');
        $("#0-" + num).addClass('hilight');
        $("#1-" + num).addClass('hilight');
        $("#2-" + num).addClass('hilight');
        $("#3-" + num).addClass('hilight');
        $("#4-" + num).addClass('hilight');
    });


    function getSyllable(langCode, lineNum, line) {
        var html = "";
        for (var i in line) {
            var id = langCode + "-" + lineNum + "-" + i;
            html += '<span id="' + id + '" class="s">' + line[i] + ' </span>';
        }
        return html;
    }
    function getLine(langCode, lineArr) {
        var html = "";
        for (var lineNum in lineArr) {
            var syllable = getSyllable(langCode, lineNum, lineArr[lineNum]);
            html += '<li class="code-li"><div>' + syllable + '</div></li>';
        }
        return html;
    }

    function langSection(langCode, langName, dataList, display, showAndCheck) {
        var html = '';
        var show = '';
        if (showAndCheck === 0) {
            show = ' style = "display:none" ';
        }
        if (display === 1) {
            html = '<div id="' + langCode + '" class="code"  ' + show + '><p class="text-center code-p">' + langName + '</p>' +
                    '<ol class="code-ol">' + getLine(langCode, dataList) + '</ol></div>';
        }
        return html;
    }
    function header() {
        var html = '<div class="container"><div class="row"><div class="col-lg-12 text-center">' +
                '<h2 class="section-heading">เลือกชนิดตัวอักษรที่จะทำการเปรียบเทียบ</h2>' +
                '<h4 class="section-heading">คลิกที่คำจะทำเครื่องหมายเน้นสี เพื่อทำการเปรียบเทียบ</h4>' +
                '<h5 id="time-process" class="section-heading"></h5>' +
                '<hr class="primary">' +
                '</div></div></div>' +
                '<div style="clear: both"></div>';


        return html;
    }
    function checkboxList(displayArr, showAndCheckArr) {

        var html = '<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2 text-center"><p>' +
                checkbox(displayArr[0], showAndCheckArr[0], 1, getSrcTypeText()) +
                checkbox(displayArr[1], showAndCheckArr[1], 2, getDestTypeText()) +
                checkbox(displayArr[2], showAndCheckArr[2], 3, 'ไทย-คงรูป(แบบแผน)') +
                checkbox(displayArr[3], showAndCheckArr[3], 4, 'ไทย-ปรับรูป(ทั่วไป)') +
                '</p></div></div></div>';
        return html;
    }
    function checkbox(display, showAndCheck, number, name) {
        var html = '';
        var check = '';
        if (showAndCheck === 1) {
            check = 'checked="checked"';
        }
        if (display === 1) {
            html = '<input type="checkbox" class="checkbox-sanskrit" id="checkbox-' + number + '" value="' + number + '" ' + check + '>' +
                    '<label for="checkbox-' + number + '">' + name + '</label>&nbsp;';
        }
        return html;
    }


    function backButton() {
        var html = '<div style="clear: both"></div><div class="container"><div class="row" style="height: 100px">' +
                '<div class="col-lg-8 col-lg-offset-2 text-center"><p></p>' +
                '<a href="#translite-form" class="btn btn-default btn-xl page-scroll">' +
                '<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>' +
                'กลับไปปริวรรต</a></div></div></div> ';
        return html;
    }



    //-----------------------------------
    function syllableSplit(line) {
        return line.split('@');
        ;
    }
    function lineSplit(txt) {
        txt = txt.replace(/\x20+/g, '@');
        var lineSplit = txt.split(/\r\n|\r|\n/);
        return  lineSplit.map(syllableSplit);
        //console.log(lineSplit);
    }

</script>
