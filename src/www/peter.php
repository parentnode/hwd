<!DOCTYPE html>
<html>
<head>
	<title>Peter's site</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>


<h1>Hello!</h1>











<h2><?php print "hello" ?></h2>
<?// phpinfo() ?>
<?
	$mysqli = new mysqli("127.0.0.1", "root", "#PASS#");
	print_r($mysqli);
?>
</body>
