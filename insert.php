<?php
function insert($conn, $url, $title, $img, $content) {
 	$query = ("INSERT into web_page (page_url, title, img ,content) VALUES ('$url','$title','$img','$content')");
	if (mysqli_query($conn,$query)) {
	      echo "New record created successfully";
	} else {
	      echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>