<?php
$filename = $_GET['filename'];
$fp = fopen('./jsonbackup/$filename', 'r');
foreach($fp as $links){
    echo $fp;
}
?>