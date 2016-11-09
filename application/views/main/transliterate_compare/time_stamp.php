
<script>
    var server_time = <?php echo "'".$timestamp."'"; ?>;
    var d = new Date();
    var n = d.getTime();
    var sec =  ((n-server_time)/1000);
    document.getElementById("time-process").innerHTML = "เวลาประมวลผล "+ sec + " วินาที";
</script>
