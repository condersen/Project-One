<?php include_once 'constants.php';?>
<?php include_once 'database.php';?>
<?php
	$page_id = (int)$_GET['id'];
	$table_query = 'SELECT * FROM `tables` WHERE id='.$page_id;
	
	$page_info = mysql_query($table_query);
		while ($row = mysql_fetch_assoc($page_info)) {
			$title = $row['title'];
			$content = $row['content'];
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" href="CSS/projectone.css">
	</head>
	<body>
<?php include 'phptemplates/header.php'; ?>
<?php include 'phptemplates/navigation.php'; ?>	
<?php echo $content;?>
<?php include 'phptemplates/footer.php'; ?>
	</body>
</html>