
<?php 

function formaterDateFr($target) {

    setlocale(LC_TIME, "fr_FR.UTF8", "French");
    echo utf8_encode(strftime("%A %d %B %G", strtotime($target)));
 }

formaterDateFr("2018-02-23");

?>