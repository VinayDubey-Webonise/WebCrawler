<?php
function getFileList(){
    $dir = './jsonbackup/';
    $files = scandir($dir,1);
    
    foreach($files as $jsonFile){
        if ($jsonFile=='.' || $jsonFile=='..') {
            continue;
        }
        echo '<a href="showlinkdetails.php?filename='.$jsonFile.'" class="list-group-item list-group-item-action">'.$jsonFile.'</a>';
    }
}
?>