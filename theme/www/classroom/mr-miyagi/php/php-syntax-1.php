<!DOCTYPE html>
<html lang="en">
<head>
	<title>PHP Syntax - Part 1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="/css/exercises/includes.css" />
	<script type="text/javascript" src="/js/exercises/includes.js"></script>
</head>
<body>


<div id="page">
	<div id="header"></div>
	<div id="content">

		<div class="scene">
			<h1>PHP Syntax, Part 1</h1>

			<h2>Basics</h2>
			<?php echo "<p>Hello World. I'm home.</p>"; ?>

			<p><? print "Hello World." ?> I'm home.</p>

			<p><?= "Hello World." ?> I'm home.</p>

			<p><?php "Hello World." ?> I'm home.</p>


			<h2>Variables</h2>
			<?
				$my_variable = 4;
				$my_variable = "Hello World.";
			?>
		
			<p><?= $my_variable; ?></p>

			<p>
			<?
				$my_variable_a = "Hello";
				$my_variable_b = "World.";

				print $my_variable_a;
				print $my_variable_b;
			?>
			</p>


			<h2>Strings and variables</h2>
			<p><?= "$my_variable_a " . '$my_variable_b' ?></p>


			<h2>Arrays</h2>
			<p>Index 0: 
			<?
				$my_array = array("Cow", "Pig");
				print $my_array[0];
			?>
			</p>


			<p>Index 1: 
			<?
				$my_array = ["Cow", "Pig"];
				print $my_array[1];
			?>
			</p>


			<p>Index a1: 
			<?
				$my_array = ["a1" => "Cow", "a2" => "Pig"];
				print $my_array["a1"];
			?>
			</p>

			<p>Array length: 
			<?
				print count($my_array);
			?>
			</p>


			<p><pre><?
				print_r($my_array);
			?></pre></p>

			<p>
			<?
				$my_array = ["a1" => "Cow", "a2" => ["b1" => "Pig", "b2" => "Horse"]];
				print $my_array["a2"]["b2"];
			?>
			</p>


			<p><pre><?
				print_r($my_array);
			?></pre></p>



			<h2>Conditionals</h2>
			<p>Is length of $my_array less then 2:
			<?
				if(count($my_array) < 2) {
					print "YES";
				}
				else {
					print "NO";
				}
			?>
			</p>

			<p>Is length of $my_array more than 1:
			<?
				if(count($my_array) > 1):
					print "YES";
				else:
					print "NO";
				endif;
			?>
			</p>


			<h2>Loops</h2>
			<p>
			<?
				$my_array = ["Cow", "Pig", "Horse"];
				for($i = 0; $i < count($my_array); $i++) {
					print $my_array[$i] . "<br>";
				}
			?>
			</p>


			<p>
			<?
				$my_array = ["a1" => "Cow", "a2" => "Pig", "b3" => "Horse"];
				foreach($my_array as $key => $value) {
					print "$key = $value<br>";
				}
			?>
			</p>


			<p>
			<?
				$my_array = ["Cow", "Pig", "Horse"];
				foreach($my_array as $key => $value) {
					print "$key<br>";
				}
			?>
			</p>

			<p>
			<?
				$my_array = ["a1" => "Cow", "a2" => "Pig", "a3" => "Horse"];
				foreach($my_array as $value) {
					print "$value<br>";
				}
			?>
			</p>


			<h2>Functions</h2>
			<p>Function sayHi: 
			<?
			function sayHi() {
				print "Hi";
			}

			sayHi();
			?>
			</p>

			<p>Function returnHi: 
			<?
			function returnHi() {
				return "Hi";
			}

			$variable = returnHi();
			print "Returned: " . $variable;
			?>
			</p>


			<p>Nameless function:
			<?
			$function_variable = function () {
			
				return "Hi";
			};
			print "Returned: " . $function_variable();
			?>
			</p>



			<h2>Requests</h2>
			<p>
			<?
				$response = file_get_contents("http://hwd-01.local");
				print $response;
			?>
			</p>



			<h2>Objects / Classes</h2>
			<?
				class MyClass {

					public $public_property = "Public value";

					private $private_property = "Private value";

					public function myFunction() {
						return $this->private_property;
					}

				};
				$myObject = new MyClass();			
			?>
			<p>
			<?
				print $myObject->public_property;
			?>
			</p>

			<p>
			<?
				print $myObject->myFunction();
			?>
			</p>


			<p>
			<?
				print $myObject->private_property;
			?>
			</p>
		</div>

	</div>
	<div id="footer"></div>
</div>

</body>
</html>