<?php
	
$indexed[] = "I want out";
$indexed[] = "You want out";
$indexed[] = "They want out";
$indexed[] = "We all want out";
array_push($indexed, "Don't print me");
$indexed[] = "Into the sunshine";

$associative = ["First" => "I want out"];
$associative["Second"] = "You want out";
$associative["Third"] = "They want out";
$associative["Forth"] = "We all want out";
$associative["Sixth"] = "Don't print me";
$associative["fifth"] = "Into the sunshine";

$multidimensional["clients"]["Need"] = "The sunshine";
$multidimensional["babies"] = ["Need" => "The milk"];
$multidimensional["clients"]["Have"] = "The money";
$multidimensional["clients"]["Want"] = "The sugar";
$multidimensional["clients"]["Argh"] = "Don't print me";
$multidimensional["babies"]["Have"] = "The cuteness";
$multidimensional["babies"]["Want"] = "The boob";
$multidimensional["aliens"] = ["Want" => "The blood", "Have" => "The tech", "Need" => "The love", "Facts" => ["0", "0", "0"]];
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Exercise 502</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>



<div id="page" class="i:page">
	<div id="header"></div>
	<div id="content">

		<div class="scene">

			<!-- lav 2 versioner php med html eller html med php i -->
			<!-- 3 typer strege, ' " eller ren html -->
			<!-- hints -->
			<!-- https://stackoverflow.com/questions/1813098/php-array-to-list/17501916 -->
			<!-- what is the double arrow?  -->
			<!-- https://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or -->
			<?php
			echo "<h1>PHP Loops, and working in an html file</h1>"; 
			echo "first we just print out all the loops with a print_r to check them out , see it in view source";
			echo "<br><br>";

			print_r($indexed); 
			echo "<br><br>";
			
			print_r($associative);
			echo "<br><br>";

			print_r($multidimensional);
			echo "<br><br>";

			?>
			
			
			
			<!-- ul starts here -->
			<ul>
			

			<?= "<h2>Normal for loop</h2>"; ?>
			<?= 
			"<p>notice all the loop is written in php and its wrapped in an ul</p>"; 
			?>

			<?php
			// for loop 
			// count($indexed) ; returns the leghts of the array. 
			for ($i=0; $i < count($indexed); $i++) { 
				if($indexed[$i] != "Don't print me"){
					echo "<li>$indexed[$i]</li>";
				}
			}
			
			?>
			</ul>
			<!-- ul ends here -->

			<dt>
			<?php
			// for each associative

			echo "the asssociative arrray, contains a key, and a value, you can get the key and the value as a pair then you loop through it.";
			foreach($associative as $key => $value) {
				if($value != "Don't print me"){
					echo "<dt>$key</dt>";
					echo "<dd>$value</dd>";
					echo "<br>";	
				}	
			}
			?>
			</dt>

			<?php
			echo  "<h2>multidimensional array nested loops</h2><br>";

			foreach($multidimensional as $key => $value) {
				echo  "<h3>".$key."</h3><br>";
				$inner_array = $value;
				foreach ($inner_array as $inner_key => $inner_value){
					if (!is_array($inner_value)){
						echo "<p> inner key: " . $inner_key ." - inner value: " .$inner_value . "</p><br>";
					}
				}
			}
			?>

		</div>

	</div>
	<div id="footer"></div>
</div>

</body>
</html>