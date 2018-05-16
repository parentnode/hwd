<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Syntax - Part 2</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/exercises/includes.css" />
	<script type="text/javascript" src="/js/exercises/includes.js"></script>
</head>
<body>


<div id="page">
	<div id="header"></div>
	<div id="content">
		
		<h1>PHP Syntax, Part 2</h1>

<? /* ?>

		<h2>Switch ... case</h2>
		<p>
		<?
		$options = ["a" => "var1", "b" => "var2", "c" => "var3", "d" => "var4"];

		foreach($options as $option => $value) {

			switch($option) {
				case "a":       print "a is $value<br />";               break;
				case "b":
				case "c":       print "b or c is $value<br />";          break;
				default:        print "$option is $value<br />";         break;
			}

		}
		
		?>



		<h2>Constants</h2>
		<p>
		<?
			define("MY_CONSTANT", "Unchangeable value");
			print MY_CONSTANT;
		?>
		</p>



		<h2>Superglobals</h2>

		<p><pre>$_SERVER: <?
			print_r($_SERVER);
		?></pre></p>


		<?
		session_start();
		$_SESSION["counter"] = isset($_SESSION["counter"]) ? $_SESSION["counter"]+1 : 1;
		?>
		<p><pre>$_SESSION: <?
			print_r($_SESSION);
		?></pre></p>


		<p><pre>$_COOKIE: <?
			print_r($_COOKIE);
		?></pre></p>


		<h3>$_GET</h3>
		<form method="get" action="#">
			<input type="text" name="my_first_var" />
			<input type="text" name="my_second_var" />
			<input type="submit" value="send" />
		</form>
		<p><pre><?
			print_r($_GET);
		?></pre></p>


		<h3>$_POST</h3>
		<form method="post" action="#">
			<input type="text" name="my_first_var" />
			<input type="text" name="my_second_var" />
			<input type="submit" value="send" />
		</form>
		<p><pre><?
			print_r($_POST);
		?></pre></p>


		<h3>$_FILES</h3>
		<form method="post" action="#" enctype="multipart/form-data">
			<input type="file" name="my_file" />
			<input type="submit" value="send" />
		</form>
		<p><pre><?
			print_r($_FILES);
		?></pre></p>



		<h2>Includes and Requires</h2>
		<p>Should include: 
		<?
		include "include/my_php_file.php";
		?>
		</p>


		<p>Should not include again: 
		<?
		include_once "include/my_php_file.php";
		?>
		</p>

		<p>Should include again: 
		<?
		include "include/my_php_file.php";
		?>
		</p>


		<p>Should require: 
		<?
		require "include/my_php_file.php";
		?>
		</p>

		<p>Should not require again: 
		<?
		require_once "include/my_php_file.php";
		?>
		</p>

		<p>Should require again: 
		<?
		require "include/my_php_file.php";
		?>
		</p>

		<p>Should fail: 
		<?
		require "include/my_missing_php_file.php";
		?>
		</p>



		<h2>JSON in PHP</h2>
		<p>Encode Array:
		<?
			$my_array = ["p1" => "Martin", "p2" => "Romeo", "p3" => "Anja", "p4" => "Elo"];
			$encoded = json_encode($my_array);
			print $encoded;
		?>
		</p>

		<p>Decode JSON to Object:
		<pre><?
			$my_json_string = '{"p1":"Martin","p2":"Romeo","p3":"Anja","p4":"Elo"}';
			$decoded_object = json_decode($my_json_string);
			print_r($decoded_object);
		?></pre>
		</p>
		<p>
		<?
			print $decoded_object->p1;
		?>
		</p>

		<p>Decode JSON to Array:
		<pre><?
			$my_json_string = '{"p1":"Martin","p2":"Romeo","p3":"Anja","p4":"Elo"}';
			$decoded_array = json_decode($my_json_string, true);
			print_r($decoded_array);
		?></pre>
		</p>
		
		<p>
		<?
			print $decoded_array["p1"];
		?>
		</p>


		<h2>Exit</h2>
		<p>
		<?
			print "before exit";
			exit();
			print "after exit";
		?>
		</p>

<? */ ?>
		
	</div>
	<div id="footer"></div>
</div>

</body>
</html>