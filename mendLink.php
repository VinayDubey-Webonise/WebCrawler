<?php

function fixLink($link){
    if (substr($link, 0, 1) == "/" && substr($link, 0, 2) != "//") {
        $link = parse_url($url)["scheme"]."://".parse_url($url)["host"].$link;
    } else if (substr($link, 0, 2) == "//") {
        $link = parse_url($url)["scheme"].":".$link;
    } else if (substr($link, 0, 2) == "./") {
        $link = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).substr($link, 1);
    } else if (substr($link, 0, 1) == "#") {
        $link = parse_url($url)["scheme"]."://".parse_url($url)["host"].parse_url($url)["path"].$link;
    } else if (substr($link, 0, 3) == "../") {
        $link = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$link;
    } else if (substr($link, 0, 11) == "javascript:") {
        return;
    } else if (substr($link, 0, 5) != "https" && substr($link, 0, 4) != "http") {
        $link = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".$link;
    }
}
?>
