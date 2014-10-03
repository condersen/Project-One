<?php
	$db_link = mysql_connect('localhost', 'root', 'root');
	if (!$db_link) {
		die("Could not connect to the database: ".mysql_error());
	}
	
	$db_selected = mysql_select_db('project_one', $db_link);
	if (!$db_selected) {
		die ("Cannot use database: ".mysql_error());
	}
?>