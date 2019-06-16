<div class="container">
    <!-- Modal -->

    <div class="modal fade" id="agreement" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?php echo_line("Agreement") ?>   

                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <?php echo_line("Agreement1") ?>
                        <?php echo_line("Agreement11") ?>
                    </p>
                    <p>
                        <?php echo_line("Agreement2") ?>

                    </p>
                    <p>
                        <?php echo_line("Agreement3") ?>

                    </p>
                    <p>
                        <?php echo_line("Agreement4") ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <input type="hidden"  name="branch_id" id="branch_id">
                    <button type="button"  class="btn btn-success" data-dismiss="modal"> <?php echo_line("Accept") ?></button>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <!-- Modal -->

    <div class="modal fade" id="agreement-lao" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ข้อตกลงการปริวรรต อักษรลาว-คงรูป(แบบแผน) เป็นอักษรอื่นๆ</h4>
                </div>
                <div class="modal-body">

                    กรุณา ดาวน์โหลดฟอนต์ไปติดตั้งก่อนใช้งาน <a href="<?php echo_css("Lanexang_Pali2.otf") ?>" >ดาวน์โหลด ฟอนต์ล้านช้างบาลี</a>
                    <p>
                        1.การพิมพ์พยัญชนะสังโยค ให้ใช้รูปแบบเดียวกับอักษรไทยคือ : การพิมพ์อักษรไทยในลักษณะพยัญชนะสังโยคที่ผสมกับ สระหน้าพยัญชนะ เช่น รูปสระเอ, สระไอ สระโอ และ สระเอา
                        เมื่อพิมพ์ตัวอักษรไทย จะพิมพ์สระหน้าไว้พยัญชนะสังโยคตัวสุดท้าย แต่หาก พยัญชนะสังโยคควบกับ 'ร' 
                        สามารถวางไว้พยัญชนะสังโยคแรกได้ เช่น draupatī สามารถพิมพ์ได้เป็น เทฺราปตี ทฺเราปตี ,
                        kṣetre สามารถพิมพ์เป็น กฺเษตฺเร กฺเษเตฺร ยังไม่รองรับการพิมพ์ เกฺษเตฺร    
                    </p>
                    <p>
                        2.สระ ฤ ฤๅ ฦ และ ฦๅ ให้พิมพ์เป็น ຣຶ ຣື ລຶ ລື (รึ รื ลึ ลื)
                        เช่น mṛga สามารถพิมพ์เป็น ມຣຶຄ (มฤค)
                    </p>
                    <p>
                        3.รูปเครื่องหมายวิสรรคะ : ใช้เป็น วิสรรชนีย์ลาว (ะ) 
                    </p>
                    <p>
                        4.รูปเครื่องหมายจันทรพินทุหรืออนุนาสิกะ : ถอดเป็นไม้หันอากาศลาว( ອັ ) เช่น tālam̐ เป็น ຕາລັ
                    </p>
                </div>
                <div class="modal-footer">
                    <input type="hidden"  name="branch_id" id="branch_id">
                    <button type="button"  class="btn btn-success" data-dismiss="modal">รับทราบ</button>
                </div>
            </div>
        </div>
    </div>

</div>