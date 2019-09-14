<?php
include('connection.php');
include('insert.php');

function page_title($page_contents) {
    $title = preg_match('/<span id="productTitle" class="a-size-large">(.*)<\/span>/siU', $page_contents, $title_matches);

    if (!$title) 
        return null; 

    // Clean up title: remove EOL's and excessive whitespace.
    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
    $title = trim($title);
    return $title;
}

function page_desc($page_contents) {
    $desc = preg_match('/<div id="renewedProgramDescriptionAtf" class="a-section a-spacing-medium a-spacing-top-small">(.*)<\/div>/siU', $page_contents, $desc_matches);
	
	
	$desc_continuation = preg_match('/<ul class="a-unordered-list a-vertical a-spacing-none">(.*)<\/div>/siU', $page_contents, $desc_continuation_match);
	
    if (!$desc || !$desc_continuation) 
        return null;
	
    // Clean up title: remove EOL's and excessive whitespace.
    $desc = preg_replace('/\s+/', ' ', $desc_matches[1]);
    $desc = trim($desc);
	
	
    $desc_continuation = preg_replace('/\s+/', ' ', $desc_continuation_match[1]);
    $desc_continuation = trim($desc_continuation);
	
    return $desc . $desc_continuation;
}


function get_image($page_contents) {
    $image = preg_match('/<img alt=\".*\" src=\"(.*)\"/siU', $page_contents, $image_matches);
	
    if (!$image) 
        return null;
	
    // Clean up title: remove EOL's and excessive whitespace.
    $image = preg_replace('/\s+/', ' ', $image_matches[1]);
    $image = trim($image);
    return $image;
}

function load_page($url) {
	$opts = array(
	  	'http' => array(
			'method' => "GET",
			'header' => "Accept-Language: en-US,en;q=0.8rn" . "Accept-Encoding: gzip,deflate,sdchrn"
		)
	);

	$context = stream_context_create($opts);
    $fp = file_get_contents($url, false, $context);

	return $fp;
}

$url = $_GET['url'];
$page_contents = load_page($url);
$title = page_title($page_contents);
$content = page_desc($page_contents);
$img = get_image($page_contents);
insert($conn, $url,  $title, $img, $content);
?>