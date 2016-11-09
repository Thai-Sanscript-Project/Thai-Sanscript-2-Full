<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="translite" style=""><div class="container"><div class="row"><div class="col-lg-12 text-center">
                <h2 class="section-heading">เลือกชนิดตัวอักษรที่จะทำการเปรียบเทียบ</h2>
                <h4 class="section-heading">คลิกที่คำจะทำเครื่องหมายเน้นสี เพื่อทำการเปรียบเทียบ</h4>
                <h5 id="time-process" class="section-heading">เวลาประมวลผล 0.202 วินาที</h5>
                <hr class="primary">
            </div></div></div>
    <div style="clear: both"></div>
    <div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2 text-center"><p>
                    <input type="checkbox" class="checkbox-sanskrit" id="checkbox-3" value="3">
                    <label for="checkbox-3">เทวนาครี</label>
                    &nbsp;
                    <input type="checkbox" class="checkbox-sanskrit" id="checkbox-0" value="0" checked="checked">
                    <label for="checkbox-0">โรมาไนซ์</label>
                    &nbsp;
                    <input type="checkbox" class="checkbox-sanskrit" id="checkbox-1" value="1" checked="checked">
                    <label for="checkbox-1">ไทย-ทั่วไป(แบบปรับรูป)</label>
                    &nbsp;
                    <input type="checkbox" class="checkbox-sanskrit" id="checkbox-2" value="2">
                    <label for="checkbox-2">ไทย-แบบแผน(แบบคงรูป)</label>
                    &nbsp;
                </p></div></div></div>

    <div id="3" class="code" style="display:none"><p class="text-center code-p">เทวนาครี</p><ol class="code-ol">
            <li class="code-li"><div>
                    <span id="3-0-0" class="s">लोकाः </span>
                    <span id="3-0-1" class="s">समस्ताः </span>
                    <span id="3-0-2" class="s">सुखिनोभवन्तु </span>
                </div></li>
        </ol></div>

    <div id="0" class="code"><p class="text-center code-p">โรมาไนซ์</p><ol class="code-ol">
            <li class="code-li"><div>
                    <span id="0-0-0" class="s">lokāḥ </span>
                    <span id="0-0-1" class="s">samastāḥ </span>
                    <span id="0-0-2" class="s">sukhinobhavantu </span>
                </div></li>
        </ol></div>

    <div id="1" class="code"><p class="text-center code-p">ไทย-ทั่วไป(แบบปรับรูป)</p><ol class="code-ol">
            <li class="code-li"><div>
                    <span id="1-0-0" class="s">โลกาห์ </span>
                    <span id="1-0-1" class="s">สะมัสตาห์ </span>
                    <span id="1-0-2" class="s">สุขิโนภะวันตุ </span>
                </div></li>
        </ol></div>

    <div id="2" class="code" style="display:none"><p class="text-center code-p">ไทย-แบบแผน(แบบคงรูป)</p><ol class="code-ol">
            <li class="code-li"><div>
                    <span id="2-0-0" class="s">โลกาะ </span>
                    <span id="2-0-1" class="s">สมสฺตาะ </span>
                    <span id="2-0-2" class="s">สุขิโนภวนฺตุ </span>
                </div></li>
        </ol></div>

    <script>
        var server_time = '1461307956621';
        var d = new Date();
        var n = d.getTime();
        var sec = ((n - server_time) / 1000);
        document.getElementById("time-process").innerHTML = "เวลาประมวลผล " + sec + " วินาที";
    </script>
</div>