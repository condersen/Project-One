<?php

//	$db_link = mysql_connect ('localhost', 'root', 'root') or die ('this error');
//	mysql_select_db('remake');
//	$page_id = $_GET['id'];
//	$anothername = 'select * FROM `pages` WHERE `id` =' . $page_id;
//	$result = mysql_query($anothername);
//	$page = array();
//	while($row = mysql_fetch_assoc($result)){
//	$page = $row;}
//	. mysqli_connect_error().
//	$db_link = mysql_connect('localhost', 'root', 'root') or die('issue connecting'. mysql_error());
//	mysql_select_db('remake') or die ('issue connecting'. mysql_error());
//	$page_id = $_GET['id'];

$db_link = mysql_connect('localhost', 'root', 'root') or die('issue connecting' . mysql_error());
mysql_select_db('project_one') or die('issue connecting' . mysql_error());

$page_id = $_GET['id'];

if (isset($_POST['title'])) {
	$sql = 'UPDATE tables
				SET
					`title` = "' . addslashes($_POST['title']) . '",
					`content` = "' . addslashes($_POST['content']) . '"
				WHERE
					`id` = ' . $page_id;
	mysql_query($sql);
}

$anothername = 'SELECT * FROM `tables` WHERE id=' . $page_id;
$result = mysql_query($anothername);
$table = array();
while ($row = mysql_fetch_assoc($result)) {
	$table = $row;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="CSS/admin.css">
		<script src="//code.jquery.com/jquery-1.2.1.min.js"></script>
	</head>
	<body>
		<div id="form-container">
			<form method="post">
				<input type="text" name="title" value="<?php echo $table['title']; ?>"/>
				<br />
				<textarea  name="content"><?php echo htmlentities($table['content']); ?></textarea>
				<br />
				<input type="submit" class="update-button" value="UPDATE"/>
			</form>
		</div>
		
	</body>
</html>