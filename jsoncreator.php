<?php

function createJson($jsonArray){
    
    $currentDate=date("M,d,Y h:i:s A");
    json_encode($jsonArray);

    $fp = fopen('./results'.$currentDate.'.json', 'w');
    if (fwrite($fp, json_encode($jsonArray))!=false) {
        echo "<h2>Json file created successfully</h2>";
    }
    else {
        echo "<h2>Json file failed to create</h2>";
    }
    fclose($fp);
}

?>