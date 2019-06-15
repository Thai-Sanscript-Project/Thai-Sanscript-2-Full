<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<h2 class="section-heading"><?php echo $title; ?></h2><br>
<h5 id="time-process" class="section-heading" style="text-align: justify;width: 50%;margin: 0 auto;">
<?php echo $detail; ?>
</h5>
</div>
</div>
</div><br>
<div style="clear: both"></div>
<div id="translite" style=""><div class="container"><div class="row"><div class="col-lg-12 text-center">
<h4 class="section-heading"><?php echo_line('Select the character type to convert') ?></h4>
<h4 class="section-heading">คลิกที่คำจะทำเครื่องหมายเน้นสี เพื่อทำการเปรียบเทียบ</h4>
<hr class="primary">
</div></div></div>
<div style="clear: both"></div>
<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-2 text-center"><p>
<input type="checkbox" class="checkbox-sanskrit" id="checkbox-3" value="3" checked="checked">
<label for="checkbox-3">เทวนาครี</label>
&nbsp;
<input type="checkbox" class="checkbox-sanskrit" id="checkbox-0" value="0" >
<label for="checkbox-0">โรมัน IAST</label>
&nbsp;
<input type="checkbox" class="checkbox-sanskrit" id="checkbox-2" value="2">
<label for="checkbox-2">ไทย-แบบแผน</label>
&nbsp;
<input type="checkbox" class="checkbox-sanskrit" id="checkbox-1" value="1" checked="checked">
<label for="checkbox-1">ไทย-ทั่วไป</label>
&nbsp;
</p></div></div></div>

<div id="3" class="code" style="width: 50%;"><p class="text-center code-p">เทวนาครี</p>
<ol class="code-ol">
<?php foreach ($line_sanskrit as $key_line => $syllableList) { ?>
<li class="code-li"><div>
<?php foreach ($syllableList as $key_word => $syllable) { ?>
<span id="<?php echo "3" . '-' . $key_line . '-' . $key_word ?>" class="s"><?php echo $syllable; ?> </span>
<?php } ?>
</div></li>
<?php } ?>
</ol>
</div>

<div id="0" class="code" style="width: 50%; display: none;"><p class="text-center code-p">โรมัน IAST</p>
<ol class="code-ol">
<?php foreach ($line_iast as $key_line => $syllableList) { ?>
<li class="code-li"><div>
<?php foreach ($syllableList as $key_word => $syllable) { ?>
<span id="<?php echo "0" . '-' . $key_line . '-' . $key_word ?>" class="s"><?php echo $syllable; ?> </span>
<?php } ?>
</div></li>
<?php } ?>
</ol>
</div>

<div id="1" class="code" style="width: 50%;"><p class="text-center code-p">ไทย-ทั่วไป(แบบปรับรูป)</p>
<ol class="code-ol">
<?php foreach ($line_thaiform as $key_line => $syllableList) { ?>
<li class="code-li"><div>
<?php foreach ($syllableList as $key_word => $syllable) { ?>
<span id="<?php echo "1" . '-' . $key_line . '-' . $key_word ?>" class="s"><?php echo $syllable; ?> </span>
<?php } ?>
</div></li>
<?php } ?>
</ol>
</div>

<div id="2" class="code" style="display: none; width: 50%;">
<p class="text-center code-p">ไทย-แบบแผน(แบบคงรูป)</p>
<ol class="code-ol">
<?php foreach ($line_thai as $key_line => $syllableList) { ?>
<li class="code-li"><div>
<?php foreach ($syllableList as $key_word => $syllable) { ?>
<span id="<?php echo "2" . '-' . $key_line . '-' . $key_word ?>" class="s"><?php echo $syllable; ?> </span>
<?php } ?>
</div></li>
<?php } ?>
</ol>
</div>
</div>
