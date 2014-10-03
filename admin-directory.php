<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="CSS/admin.css">
	</head>
	<body>
		<!---------------------------------------------------------------------
		<?php
		if (isset($_POST['title'])) {
		$insert_new_data = 'INSERT INTO tables (`title`) VALUES ("'.addslashes($_POST['title']).'")';
		mysql_query($insert_new_data);
		}
		?>
		<--------------------------------------------------------------->

		<div id="admin-content-container">
			<div id="page-container">

				<?php
				$db_link = mysql_connect('localhost', 'root', 'root') or die('database connection error');
				mysql_select_db('project_one');

				if (isset($_POST['createtitle'])) {
					$createpage = 'INSERT INTO tables (`title`) VALUES ("' . addslashes($_POST['createtitle']) . '")';
					mysql_query($createpage);
				}

				if (isset($_POST['deletetitle'])) {
					$deletepage = 'DELETE FROM tables WHERE id=' . addslashes($_POST['deletetitle']);
					mysql_query($deletepage);
				}

				$pages = 'select * FROM `tables`';
				$result = mysql_query($pages) or die('database table connection error' . mysql_error());
				echo "<ul>";
				while ($row = mysql_fetch_assoc($result)) {
					echo '<li><a href="admin-form.php?id=' . $row['id'] . '">' . $row['id'] . '. ', $row['title'] . '</a></li>';
				};
				echo "</ul>";
				?>
			</div>
			<div id="page-creation-container">
				<hr/>
				<h2>Create a new page</h2>
				<form method="post">
					<input type="text" name="createtitle" placeholder="Page Title Here"/>
					<input type="submit" value="CREATE"/>
				</form>
				<hr/>
				<h2>Delete a old one(THIS IS PERMANENT)</h2>
				<form method="post">
					<input type="text" name="deletetitle" placeholder="Page id#"/>
					<input type="submit" value="DELETE"/>
				</form>
			</div>
		</div>
	</body>
</html>