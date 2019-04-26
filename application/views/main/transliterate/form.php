<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    @font-face {
        font-family: Lanexang-Mon2;
        src: url(<?php echo_css("Lanexang-Mon2.otf") ?>);
    }

    .lao{
        font-family: Lanexang-Mon2;
    }

    .glyphicon-class-dest {
        display: block;
        text-align: center;
        word-wrap: break-word;
        font-size: 19px;
        font-weight: bold;

        -webkit-font-smoothing: antialiased;
        color: #003399;
    }

</style>
<section id="contact-info" style="background: #f2f2f2;">
    <div id="translite-form" class="container">
        <div class="center">        
            <h2><?php echo lang("Select the character"); ?></h2>
            <p class="lead">
               <?php echo lang("When you have selected"); ?>   [<a href="#contact-page"><?php echo lang("View the comparative table"); ?> </a>]<br>
               <?php echo lang("Enter the character of the selected"); ?> 
            </p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="form-group">
                        <label><?php echo lang("Original Script"); ?> </label>   
                        <a id="hint-thai" href="#" data-toggle="modal" data-target="#agreement"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span><?php echo lang("Agreement of using"); ?></a>
                        <a id="hint-lao" href="#" data-toggle="modal" data-target="#agreement-lao" style="display: none"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>ติดตั้งฟอนต์ลาว</a>                  
                        <select name="src-type"  id="src-type" class="form-control select-type translite" style="overflow: scroll;" >
                            <optgroup label="<?php echo lang("Southeast Asia"); ?>">
                                <option value="thai"><?php echo lang("Thai Traditional Form"); ?></option>
                                <option value="lao" ><?php echo lang("Lao"); ?> <span class="lao">(ກ)</span></option>
                            <option value="burmese"><?php echo lang("Burmese"); ?> (က)</option>                                
                            </optgroup>
                            <!--<optgroup label="ทดสอบ">-->
                            <!--<option value="brahmi">พราหมี (𑀅)</option>-->                           
                            <!--</optgroup>-->

                            <optgroup label="<?php echo lang("Indian Scripts"); ?>">                             
                                <option value="devanagari" selected="selected" > <?php echo lang("Devanagari"); ?> (अ)</option>
                                <option value="bengali"><?php echo lang("Bengali"); ?>  (অ)</option>
                                <option value="gurmukhi"><?php echo lang("Gurmukhi"); ?> (ਅ)</option>
                                <option value="gujarati"><?php echo lang("Gujarati"); ?> (અ)</option>
                                <option value="oriya"><?php echo lang("Oriya"); ?> (ଅ)</option>
                                <option value="tamil"><?php echo lang("Tamil"); ?> (அ)</option>
                                <option value="telugu"><?php echo lang("Telugu"); ?> (అ)</option>
                                <option value="kannada"><?php echo lang("Kannada"); ?> (ಅ)</option>
                                <option value="malayalam"><?php echo lang("Malayalam"); ?> (അ)</option>
                            </optgroup>
                            <optgroup label="<?php echo lang("Romanize"); ?>">
                                <option value="iast" ><?php echo lang("Roman"); ?> IAST</option>
                                <option value="kolkata"><?php echo lang("Roman"); ?> Kolkata</option>
                                <option value="itrans"><?php echo lang("Roman"); ?> ITRANS</option>
                                <option value="hk"><?php echo lang("Roman"); ?> Harvard-Kyoto</option>
                                <option value="slp1"><?php echo lang("Roman"); ?> SLP</option>
                                <!--<option value="iasttest">โรมัน ทดสอบ</option>-->
                            </optgroup>                           
                        </select>
                    </div>
                    <!--                    <div class="form-group">
                                            <label>Message *</label>
                                            <textarea name="src-txt"  id="src-txt" required="required" class="form-control translite" rows="8">गोब्राह्मणेभ्यः शुभमस्तु नित्यं लोकाः समस्ताः सुखिनोभवन्तु ॥</textarea>
                                        </div>                         -->
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>ตัวอักษรเปรียบเทียบอื่นๆ</label>
                        <select class="form-control select-type translite" name="dest-type"  id="dest-type">
                            <!--                            <optgroup label="อินเดียโบราณ">
                                                            <option value="brahmi">พราหมี (𑀅)</option> 
                                                             <option value="thai"  >ไทย-คงรูป(แบบแผน)</option>    
                                                        </optgroup>-->
                            <optgroup label="<?php echo lang("Southeast Asia"); ?>">                               
                                <option value="lao" ><?php echo lang("Lao"); ?> <span class="lao">(ກ)</span></option>                                       
                            </optgroup>
                            <optgroup label="<?php echo lang("Indian Scripts"); ?>">                             
                                <option value="devanagari" selected="selected" > <?php echo lang("Devanagari"); ?> (अ)</option>
                                <option value="bengali"><?php echo lang("Bengali"); ?>  (অ)</option>
                                <option value="gurmukhi"><?php echo lang("Gurmukhi"); ?> (ਅ)</option>
                                <option value="gujarati"><?php echo lang("Gujarati"); ?> (અ)</option>
                                <option value="oriya"><?php echo lang("Oriya"); ?> (ଅ)</option>
                                <option value="tamil"><?php echo lang("Tamil"); ?> (அ)</option>
                                <option value="telugu"><?php echo lang("Telugu"); ?> (అ)</option>
                                <option value="kannada"><?php echo lang("Kannada"); ?> (ಅ)</option>
                                <option value="malayalam"><?php echo lang("Malayalam"); ?> (അ)</option>
                            </optgroup>
                            <optgroup label="<?php echo lang("Romanize"); ?>">
                                <option value="iast" ><?php echo lang("Roman"); ?> IAST</option>
                                <option value="kolkata"><?php echo lang("Roman"); ?> Kolkata</option>
                                <option value="itrans"><?php echo lang("Roman"); ?> ITRANS</option>
                                <option value="hk"><?php echo lang("Roman"); ?> Harvard-Kyoto</option>
                                <option value="slp1"><?php echo lang("Roman"); ?> SLP</option>
                                <!--<option value="iasttest">โรมัน ทดสอบ</option>-->
                            </optgroup>                           

                        </select>
                    </div>
                    <!--                                        <div class="form-group">
                                                                <label>Message *</label>
                                                                <textarea name="dest-txt"  id="dest-txt" required="required" class="form-control translite" rows="8" maxlength="1000">gobrāhmaṇebhyaḥ śubhamastu nityaṃ lokāḥ samastāḥ sukhinobhavantu ॥</textarea>
                                                            </div>                                      -->
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>ข้อความภาษา</label>
                        <select class="form-control select-type translite" name="lang"  id="lang" >
                            <option value="sans" selected="selected" ><?php echo lang("Sanskrit"); ?></option>
                            <option value="pali"><?php echo lang("Pali"); ?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group center" style="margin-left: 8.333333333333332%;width: 85%;">
                    <textarea name="src-txt"  id="src-txt" required="required" class="form-control translite" rows="8">गोब्राह्मणेभ्यः शुभमस्तु नित्यं लोकाः समस्ताः सुखिनोभवन्तु ॥</textarea>
                </div>
                <div class="form-group center">
                    <a href="#transliterate-compare" id="translite-button" class="btn btn-info btn-xl page-scroll">
                        <span class="glyphicon glyphicon glyphicon-transfer" aria-hidden="true"></span>
                        &nbsp;ปริวรรต เป็น ไทย-สันสกฤต
                    </a>
                    <!--<button id="translite-button" type="button" name="submit" class="btn btn-primary btn-lg" required="required">สร้างตารางเปรียบเทียบ</button>-->
                </div>
            </form> 
        </div><!--/.row-->      
    </div><!--/.container-->
    <div id="transliterate-compare">
        <!--Call Ajax-->
    </div>

    <div class="row contact-wrap"></div>
</section><!--/#contact-page-->