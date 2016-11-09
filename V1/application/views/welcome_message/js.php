
<script type="text/javascript">
    var statusSelect = "";
    var devanagari = $('#textarea-devanagari');
    var roman = $('#textarea-roman');
    var selDevanagari = $('#select-devanagari');
    var selRoman = $('#select-roman');
    var transliteButton = $('#translite-button');
    var translite = $('#translite');
    var body = $("body");

    $(document).on({
        ajaxStart: function () {
            body.addClass("loading");
        },
        ajaxStop: function () {
            body.removeClass("loading");
        }
    });

    $(function () {
        devanagari.prop('readonly', true);
        roman.prop('readonly', true);
        devanagari.autosize();
        roman.autosize();
        textAreaTranslite(devanagari);
        selectSource();
        thaiTransliteration();
    });

    function thaiTransliteration() {
        transliteButton.click(function () {
            var d = new Date();
            var timestamp = d.getTime();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('api'); ?>",
                method: "POST",
                data: {
                    "sanskrit-romanize": roman.val(),
                    "sanskrit-devanagari": devanagari.val(),
                    "timestamp": timestamp
                },
                dataType: "html",
                success: function (data) {
                    translite.html(data);
                    translite.show();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
//                    alert("Status: " + textStatus);
//                    alert("Error: " + errorThrown);
                }
            });


        });
    }

    function transliteration() {
        var devanagariValue = devanagari.val();
        var output = Sanscript.t(devanagariValue, 'devanagari', 'iast');
        roman.val("");
        roman.val(output);
        roman.height(devanagari.height());
        roman.height(roman[0].scrollHeight);
    }

    function textAreaTranslite(textArea) {
        textArea.bind('keyup keydown keypress change mousedown paste', function () {
            if (statusSelect === "devanagari") {
                transliteration();
            }
        });
    }
    function selectSource() {
        selDevanagari.click(function () {
            switchSourceButton(selDevanagari, selRoman);
            devanagari.prop('readonly', false);
            roman.prop('readonly', true);
            statusSelect = "devanagari";
            clear();
        });
        selRoman.click(function () {
            switchSourceButton(selRoman, selDevanagari);
            devanagari.prop('readonly', true);
            roman.prop('readonly', false);
            statusSelect = "roman";
            clear();
        });
    }

    function switchSourceButton(current, opposite) {
        opposite.removeClass('btn-warning');
        current.removeClass('btn-warning');
        opposite.removeClass('btn-danger');
        current.removeClass('btn-danger');
        opposite.removeClass('btn-success');
        current.removeClass('btn-success');
        current.addClass('btn-success');
        opposite.addClass('btn-danger');
    }
    function clear() {
        devanagari.val("");
        roman.val("");
        devanagari.height('250px');
        roman.height('250px');
        translite.hide('slow');
    }

    $(document).on('click', '.s', function () {
        var str = $(this).attr('id');
        var idsplit = str.split("-");
        var num = idsplit[1] + "-" + idsplit[2];
       
        $('.s').removeClass('hilight');
        $("#0-" + num).addClass('hilight');
        $("#1-" + num).addClass('hilight');
        $("#2-" + num).addClass('hilight');
        $("#3-" + num).addClass('hilight');
    });
    
    var counterChecked = 0;
    $(document).on('click', '.checkbox-sanskrit', function () {
        var val = $(this).val();
        var countCheck = $('.checkbox-sanskrit:checkbox:checked').length;
        var percentwidth = (100 / countCheck).toFixed(2) - 2;
//        alert(percentwidth);
        if (!isNaN(percentwidth)) {
            $('.code').width(percentwidth + '%');
        }

        if ($(this).is(':checked')) {
            $("#" + val).show("slow");
        } else {
            $("#" + val).hide("slow");
        }

    });


</script>
