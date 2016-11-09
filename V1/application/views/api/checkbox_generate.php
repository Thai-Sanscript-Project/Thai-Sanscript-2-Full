<div class="container"><div class="row"><div class="col-lg-12 text-center">
<h2 class="section-heading">เลือกชนิดตัวอักษรที่จะทำการเปรียบเทียบ</h2>
<h4 class="section-heading">คลิกที่คำจะทำเครื่องหมายเน้นสี เพื่อทำการเปรียบเทียบ</h4>
<h5 id="time-process" class="section-heading"></h5>
<hr class="primary">
</div></div></div>
<div style="clear: both"></div>
<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2 text-center"><p>
<?php foreach ($checkbox as $key => $value) { ?>
<input type="checkbox" class="checkbox-sanskrit" id="checkbox-<?php echo $value ?>"  value="<?php echo $value ?>"  <?php echo $show[$key] ? 'checked="checked"' : ''; ?>/>
<label for="checkbox-<?php echo $value ?>"><?php echo $label[$key] ?></label>
&nbsp;
<?php } ?>
</p></div></div></div>
