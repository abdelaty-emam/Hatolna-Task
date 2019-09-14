<?php
include ('connection.php');
$query = "SELECT  id, page_url, title, content,img FROM web_page";
$response = mysqli_query($conn, $query);
$rows = array();
while(($row =  mysqli_fetch_array($response))) {
	array_push($rows, $row);
}
echo json_encode($rows);
?>