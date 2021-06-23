<!DOCTYPE html>
<html>
<head>
	<title>Welcome user</title>
</head>
<body>
	<style type="text/css">
		body, html{
  height: 100%;
  margin: 0; 
}
body {
  background-image:url("admin.jpg");
  height: 100%;
  background-repeat:no-repeat;
    background-position: center;
    
    border: 0px dashed #333;
    background-size: 100% auto;
}
</style>
	<script> alert('Welcome admin')</script>
<center>
<a href="home1.php?file=loginn.sql" target="_new"><button type="button" style="width: 250; height: 180; color: red; background-color: green;">Download sql</button></a></center>

<?php
if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.sql$/',$file)) {
	header('Content-Type: application/pdf');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}
}
?>
<a href="loginn.php">Logout Admin</a>
</body>
</html>