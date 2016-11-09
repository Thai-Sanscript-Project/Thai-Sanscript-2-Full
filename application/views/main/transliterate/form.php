<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="contact-info" style="background: #f2f2f2;">
    <div id="translite-form" class="container">
        <div class="center">        
            <h2>เลือกชนิดตัวอักษรที่จะทำการปริวรรต</h2>
            <p class="lead">
			เมื่อคุณเลือกชนิดตัวอักษรแล้ว คุณสามารถดูตารางเปรียบเทียบการปริวรรตอักษรด้านล่าง [<a href="#contact-page">ดูตารางเปรียบเทียบอักษร</a>]<br>
			เลือกตัวอักษรต้นฉบับ กรอกอักษรที่เป็นชนิดตัวอักษรที่เลือกไว้  แล้วเลือกตัวอักษรเปรียบเทียบอื่นๆ  จากนั้น กดปุ่ม "ปริวรรต เป็น ไทย-สันสกฤต" เพื่อดูผลลัพธ์
			</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>ตัวอักษรต้นฉบับ</label>   
                       <a id="hint-thai" href="#" data-toggle="modal" data-target="#agreement"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>ข้อตกลงการปริวรรต</a>
                        <select name="src-type"  id="src-type" class="form-control select-type translite" style="overflow: scroll;" >
                            <optgroup label="ไทย">
                                <option value="thai"  >ไทย-คงรูป(แบบแผน)</option>                             
                            </optgroup>
                            <optgroup label="อินเดีย">                             
                                <option value="devanagari" selected="selected" >เทวนาครี (अ)</option>
                                <option value="bengali">เบงกาลี (অ)</option>
                                <option value="gurmukhi">คุรมุขี (ਅ)</option>
                                <option value="gujarati">คุชราตี (અ)</option>
                                <option value="oriya">โอริยา (ଅ)</option>
                                <option value="tamil">ทมิฬ (அ)</option>
                                <option value="telugu">เตลูกู (అ)</option>
                                <option value="kannada">กันนาดา (ಅ)</option>
                                <option value="malayalam">มาลายัม (അ)</option>
                            </optgroup>
                            <optgroup label="โรมัน">
                                <option value="iast" >โรมัน IAST</option>
                                <option value="kolkata">โรมัน Kolkata</option>
                                <option value="itrans">โรมัน ITRANS</option>
                                <option value="hk">โรมัน Harvard-Kyoto</option>
                                <option value="slp1">โรมัน SLP</option>
                            </optgroup>                           
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<label>Message *</label>-->
                        <textarea name="src-txt"  id="src-txt" required="required" class="form-control translite" rows="8">गोब्राह्मणेभ्यः शुभमस्तु नित्यं लोकाः समस्ताः सुखिनोभवन्तु ॥</textarea>
                    </div>                         
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>ตัวอักษรเปรียบเทียบอื่นๆ</label>
                        <select class="form-control select-type translite" name="dest-type"  id="dest-type">
                            <optgroup label="อินเดีย">
                                <option value="devanagari">เทวนาครี (अ)</option>
                                <option value="bengali">เบงกาลี (অ)</option>
                                <option value="gurmukhi">คุรมุขี (ਅ)</option>
                                <option value="gujarati">คุชราตี (અ)</option>
                                <option value="oriya">โอริยา (ଅ)</option>
                                <option value="tamil">ทมิฬ (அ)</option>
                                <option value="telugu">เตลูกู (అ)</option>
                                <option value="kannada">กันนาดา (ಅ)</option>
                                <option value="malayalam">มาลายัม (അ)</option>
                            </optgroup>
                            <optgroup label="โรมัน">
                                <option value="iast" selected="selected" >โรมัน IAST</option>
                                <option value="kolkata">โรมัน Kolkata</option>
                                <option value="itrans">โรมัน ITRANS</option>
                                <option value="hk">โรมัน Harvard-Kyoto</option>
                                <option value="slp1">โรมัน SLP</option>
                            </optgroup> 

                        </select>
                    </div>
                    <div class="form-group">
                        <!--<label>Message *</label>-->
                        <textarea name="dest-txt"  id="dest-txt" required="required" class="form-control translite" rows="8" maxlength="1000">gobrāhmaṇebhyaḥ śubhamastu nityaṃ lokāḥ samastāḥ sukhinobhavantu ॥</textarea>
                    </div>                                      
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