<?php
require_once("jsoncreator.php");
require_once("checkUrlExist.php");

error_reporting(E_ERROR | E_PARSE);
$url=$_GET['crawl_url'];
$depth=$_GET['crawl_limit'];

// check if valid link
if(!isLinkValid($url)) {
    die ("<h2>Check the link again.</h2>");
}

$jsonArray = array();
$doc = new DOMDocument();

function crawl($url,$depth) {
    $arr = array();
	if ($depth==0) {
		return $arr;
	}
	
	@$html = file_get_contents($url);
	$localDoc = new DOMDocument();
    $localDoc->loadHTML($html);
   
	foreach($localDoc->getElementsByTagName('a') as $link) {

        $title = $localDoc->getElementsByTagName("title");        
        $title = $title->item(0)->nodeValue;
        $newLink = $link->getAttribute('href');

        $arr[] = array(
            'URL'=>$newLink,
            'Title'=>$title,
            'Sublink'=> crawl($newLink, $depth-1)
        );        
    }
    return $arr;
}

$jsonArray = crawl($url,$depth);
$jsonArrayEncoded = json_encode($jsonArray);

echo $jsonArrayEncoded;

// create json backup file
createJson($jsonArrayEncoded);

?>
