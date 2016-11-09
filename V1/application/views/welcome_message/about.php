<div class="modal"><!-- Place at bottom of page --></div>
<section class="bg-primary" id="about" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">เลือกตัวอักษรต้นฉบับ</h2>
                <hr class="primary">
            </div>
        </div>
    </div>

    <div>
        <div class="text-center" style="width: 50%;float:left;">
            <span>

                <!--<div class="btn-group " role="group" aria-label="...">-->
<!--                <div class="btn-group" role="group">
                    <button id="select-devanagari" type="button" class=" btn btn-warning btn-xl dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">

                        <li class="disabled"><a href="#">อักษรไทย</a></li>
                        <li class="page-scroll" role="separator" class="divider"></li>
                        <li><a class="page-scroll" href="#about">ไทย-แบบแผน</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="disabled"><a href="#">อักษรในระบบโรมัน</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="page-scroll" href="#about">Kolkata</a></li>
                        <li><a class="page-scroll" href="#about">ITRANS</a></li>
                        <li><a class="page-scroll" href="#about">Harvard-Kyoto</a></li>
                        <li><a class="page-scroll" href="#about">SanskritOCR</a></li>
                        <li><a class="page-scroll" href="#about">SLP</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="disabled"><a href="#">อักษรอินเดีย</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="page-scroll" href="#about">เทวนาครี (अ)</a></li>
                        <li><a class="page-scroll" href="#about">เบงกาลี (অ)</a></li>
                        <li><a class="page-scroll" href="#about">คุรมุขี (ਅ)</a></li>
                        <li><a class="page-scroll" href="#about">คุชราตี (અ)</a></li>
                        <li><a class="page-scroll" href="#about">โอริยา (ଅ)</a></li>
                        <li><a class="page-scroll" href="#about">ทมิฬ (அ)</a></li>
                        <li><a class="page-scroll" href="#about">เตลูกู (అ)</a></li>
                        <li><a class="page-scroll" href="#about">กันนาฑะ (ಅ)</a></li>
                        <li><a class="page-scroll" href="#about">มาลายาลัม (അ)</a></li>

                    </ul>
                     <div class="form-group col-xs-4" >
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                </div>-->
               
                <!--</div>-->
                <a id="select-devanagari" href="javascript:void(0);" class="btn btn-warning btn-xl">เทวนาครี</a>
            </span><p></p>
            <textarea id='textarea-devanagari'  class="select-lang" >लोकाः समस्ताः सुखिनोभवन्तु</textarea>
        </div>
        <div class="text-center" style="width: 50%;float:left;">
            <span>
                <a id="select-roman" href="javascript:void(0);" class="btn btn-warning btn-xl">โรมาไนซ์(IAST)</a>
            </span><p></p>
            <textarea id='textarea-roman' class="select-lang" >lokāḥ samastāḥ sukhinobhavantu</textarea>
        </div>
    </div>
    <div style="clear: both"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">              
                <p>หากเลือกตัวอักษรต้นฉบับ เป็น เทวนาครี กดคลิกหนึ่งครั้ง เทวนาครี จะถูกปริวรรต โรมาไนซ์  </p>

                <a href="#compare" id="translite-button" class="btn btn-info btn-xl page-scroll">
                    <span class="glyphicon glyphicon glyphicon-transfer" aria-hidden="true"></span>
                    &nbsp;ปริวรรต เป็น ไทย-สันสกฤต
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div id="compare" style="clear: both;height: 50px"></div>
    <div id="translite" style="display:none ">
        <!-- translite ajax call -->
    </div>
    <div style="clear: both"></div>
    <div class="container">
        <div class="row" style="height: 100px">
            <div class="col-lg-8 col-lg-offset-2 text-center">              
                <p> </p>          
                <a href="#about" class="btn btn-default btn-xl page-scroll">
                    <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
                    กลับไปปริวรรต
                </a>
            </div>
        </div>
    </div>   

    <div style="clear: both;"></div>
</section>