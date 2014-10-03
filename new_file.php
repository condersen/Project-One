
<?php

include_once 'constants.php';
include_once 'database.php';
$page_id = (int)$_GET['id'];
$page_query = 'SELECT * FROM `tables` WHERE id='. $page_id;

$page_info = msql_query($page_query);
	while ($row = mysql_fetch_assoc($page_info)) {
		$title = $row['title'];
		$content = $row['content']
	}


?>