<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP + SQL Syntax - Part 3</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/exercises/includes.css" />
	<script type="text/javascript" src="/js/exercises/includes.js"></script>
</head>
<body>


<div id="page">
	<div id="header"></div>
	<div id="content">

		<div class="scene">
			<h1>PHP + SQL Syntax, Part 3</h1>


			<p>
				To make these syntax examples work, you have to create a test database (using HeidiSQL, SequelPro or some
				third database administation tool).
			</p>
			<p>
				Connect to your Database server and create a new database called
				"php_syntax_test".
			</p>
			<p>
				Then add a new user, "phpsyntax" and give it a password "testpassword".
			</p>
			<p>
				Finally grant the
				new user all rights on the php_syntax_test database for 127.0.0.1.
			</p> 


			<h2>mysqli style</h2>
			<h3>Connect</h3>
			<p>
			<?
			$mysqli = new mysqli("127.0.0.1", "phpsyntax", "testpassword");
			if($mysqli->connect_errno) {

				print "Failed to connect to MariaDB: " . $mysqli->connect_error;
				exit();
			}
			else {
				print "Connected to MariaDB";
			}
			?>
			</p>

<? /*

			<h3>CREATE TABLE</h3>
			<p>
			<?
				$result = $mysqli->query("CREATE TABLE IF NOT EXISTS `php_syntax_test`.`my_table` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` varchar(255) NOT NULL, PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
				if($result->affected()) {
					print "Table created";
				}
				else {
					print "Table was not created";
				}
			?>
			</p>


			<h3>INSERT</h3>
			<pre>INSERT INTO `php_syntax_test`.`my_table` values(1, 'Martin')
			<p><?
				$result = $mysqli->query("INSERT INTO `php_syntax_test`.`my_table` values(1, 'Martin')");
				if($result->affected()) {
					print "'1, Martin' INSERTED INTO DATABASE";
				}
				else {
					print "No INSERT PERFORMED";
				}
			?></p></pre>

			<pre>INSERT INTO `php_syntax_test`.`my_table` values(2, 'Romeo'), (3, 'Elo')
			<p><?
				$result = $mysqli->query("INSERT INTO `php_syntax_test`.`my_table` values(2, 'Romeo'), (3, 'Elo')");
				if($result->affected()) {
					print "'2, Romeo' and '3, Elo' INSERTED INTO DATABASE";
				}
				else {
					print "No INSERT PERFORMED";
				}
			?></p></pre>

			<pre>INSERT INTO `php_syntax_test`.`my_table` SET name='Anjo'
			<p><?
				$result = $mysqli->query("INSERT INTO `php_syntax_test`.`my_table` SET name='Anjo'");
				if($result->affected()) {
					print "'Anjo' INSERTED INTO DATABASE";
				}
				else {
					print "No INSERT PERFORMED";
				}
			?></p></pre>



			<h3>SELECT</h3>
			<pre>SELECT * FROM `php_syntax_test`.`my_table`
			<p><?
				$result = $mysqli->query("SELECT * FROM `php_syntax_test`.`my_table`");
				$results = $result->fetch_all(MYSQLI_ASSOC);
				print_r($results);
			?></p></pre>

			<pre>SELECT * FROM `php_syntax_test`.`my_table` WHERE id = 1
			<p><?
				$result = $mysqli->query("SELECT * FROM `php_syntax_test`.`my_table` WHERE id = 1");
				$results = $result->fetch_all(MYSQLI_ASSOC);
				print_r($results);
			?></p></pre>

			<pre>SELECT * FROM `php_syntax_test`.`my_table` WHERE name = 'Elo'
			<p><?
				$result = $mysqli->query("SELECT * FROM `php_syntax_test`.`my_table` WHERE name = 'Elo'");
				$results = $result->fetch_all(MYSQLI_ASSOC);
				print_r($results);
			?></p></pre>

			<pre>SELECT name FROM `php_syntax_test`.`my_table` WHERE id = 2
			<p><?
				$result = $mysqli->query("SELECT name FROM `php_syntax_test`.`my_table` WHERE id = 2");
				$results = $result->fetch_all(MYSQLI_ASSOC);
				print_r($results);
			?></p></pre>



			<h3>UPDATE</h3>
			<pre><p><?
				$result = $mysqli->query("UPDATE `php_syntax_test`.`my_table` SET name = 'Anja' WHERE id = 4");
				if($mysqli->affected_rows) {
					print $mysqli->affected_rows . " row(s) with id=4 UPDATED";
				}
				else {
					print "NO UPDATE PERFORMED";
				}
			?></p></pre>

			<pre><p><?
				$result = $mysqli->query("UPDATE `php_syntax_test`.`my_table` SET name = 'fejl' WHERE name = 'Anjo'");
				if($mysqli->affected_rows) {
					print $mysqli->affected_rows . " row(s) with name=Anjo UPDATED";
				}
				else {
					print "NO UPDATE PERFORMED";
				}
			?></p></pre>


			<h3>DELETE</h3>
			<pre><p><?
				$result = $mysqli->query("DELETE FROM `php_syntax_test`.`my_table` WHERE id = 5");
				if($mysqli->affected_rows) {
					print $mysqli->affected_rows . " row(s) with id=5 DELETED";
				}
				else {
					print "NO DELETE PERFORMED";
				}
			?></p></pre>

			<pre><p><?
				$result = $mysqli->query("DELETE FROM `php_syntax_test`.`my_table` WHERE name = 'fejl'");
				if($mysqli->affected_rows) {
					print $mysqli->affected_rows . " row(s) with name=5 DELETED";
				}
				else {
					print "NO DELETE PERFORMED";
				}
			?></p></pre>


			<h2>Janitor style</h2>
			<?
			// Include Janitor Query Class
			include_once("/srv/sites/parentnode/janitor/src/classes/system/queryi.class.php");	

			// and re-use current connection
			global $mysqli_global;
			$mysqli_global = $mysqli;

			// Create new instance of query class
			$query = new Query();
			?>

			<h3>Connect</h3>
			<p>
				Janitor automatically connects, so you already have a connection through the $query instance.
				(<?= $query->connected ? "connected" : "Not connected" ?>)
			</p>


			<h3>SELECT</h3>
			<pre>SELECT * FROM `php_syntax_test`.`my_table`
			<p><?
				$query->sql("SELECT * FROM `php_syntax_test`.`my_table`");
				$results = $query->results();
				print_r($results);
			?></p></pre>

			<pre>SELECT * FROM `php_syntax_test`.`my_table` - Get name column
			<p><?
				$query->sql("SELECT * FROM `php_syntax_test`.`my_table`");
				$results = $query->results("name");
				print_r($results);
			?></p></pre>

			<pre>SELECT name FROM `php_syntax_test`.`my_table` WHERE id=3
			<p><?
				$query->sql("SELECT name FROM `php_syntax_test`.`my_table` WHERE id = 3");
				$result = $query->results();
				print_r($result);
			?></p></pre>

			<pre>SELECT * FROM `php_syntax_test`.`my_table` - Get second result, name column
			<p><?
				$query->sql("SELECT * FROM `php_syntax_test`.`my_table`");
				$result = $query->result(1, "name");
				print_r($result);
			?></p></pre>


			<h3>UPDATE</h3>
			<pre><p><?
				$query->sql("UPDATE `php_syntax_test`.`my_table` SET name = 'Elo badelo' WHERE id = 3");
				if($query->affected()) {
					print "Row update";
				}
				else {
					print "NO UPDATE PERFORMED";
				}
			?></p></pre>

*/ ?>

		</div>

	</div>
	<div id="footer"></div>
</div>

</body>
</html>