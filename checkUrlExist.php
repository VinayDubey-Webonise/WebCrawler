<?php
function isLinkValid($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    $result = curl_exec($curl);
    if ($result !== false) 
    {
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
        if ($statusCode == 404) 
        {
            return false;
        }
        else
        {
            return true;
        } 
    }
    else
    {
        return false;
    }
}
