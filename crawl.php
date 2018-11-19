<?php
// require_once("mendLink.php");
require_once("get_details.php");

error_reporting(E_ERROR | E_PARSE);
$url=$_GET['crawl_url'];
$depth=$_GET['crawl_limit'];

/*$visited_links=array();

if (!filter_var($url, FILTER_VALIDATE_URL)) {
	die("Invalid URL");
}*/

$jsonArray = array();
$doc = new DOMDocument();

function crawl($url,$depth) {
	if ($depth==0) {
		return;
	}	

	@$html = file_get_contents($url);
	$doc = new DOMDocument();
	$doc->loadHTML($html);
	foreach($doc->getElementsByTagName('a') as $link) {
	/*	if (in_array($url,$GLOBALS['visited_links'])){
			continue;
		}
	*/	
		//echo "------$url-> ";
		//echo $link->getAttribute('href')."<br>";
		array_push($GLOBALS['jsonArray'],get_details($link->getAttribute('href')));
		//print get_details($link->getAttribute('href'))."<br>";
		print $GLOBALS['jsonArray'];
		crawl($link->getAttribute('href'),$depth-1);
	//	array_push($GLOBALS['visited_links'],$link->getAttribute('href'));
	}
}

crawl($url,$depth);
?>
