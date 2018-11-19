<?php
$ar=array("https://www.google.com/");
"https://in.yahoo.com/?p=us","https://www.bing.com/","https://duckduckgo.com/");
echo "Global variable: ".$ar[0];

function globalCheck($engine){
    //echo "Local Access: ".$GLOBALS['ar'][1];
    if (in_array($engine,$GLOBALS['ar'])) { 
        echo "<br>Found";
    }
}

globalCheck("https://www.google.com");