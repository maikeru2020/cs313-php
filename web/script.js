function updateTime(time) {
    <?php $time = date("g:i"); ?>
    document.getElementById("time").innerHTML = <?php echo "\"$time\"" ?>;
}