<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../classes/Project.php');
$db  = new Database();
$pro = new Project();
?>
<!doctype html>
<html>
<head>
	<title>Ajax Necessary Projects</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<section class="header">
		<div class="container">
			<div class="header-text">
				<h2>
					Ajax Necessary Projects
				</h2>
			</div>
		</div>
	</section>