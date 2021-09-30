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
			
			 <!-- https://stackoverflow.com/questions/1813098/php-array-to-list/17501916 -->

			
			 <ul>
			<?php
			// for each associative
			for ($i=0; $i < count($indexed); $i++) { 
				if($indexed[$i] != "Don't print me"){
					echo "<li>$indexed[$i]</li>";
				}
			}
			
			?>
			</ul>

			<dt>
			<?php
			// for each associative
			foreach($associative as $key => $value) {
				if($value != "Don't print me"){
					echo "<dt>$key</dt>";
					echo "<dd>$value</dd>";
					echo "<br>";	
				}	
			}
			?>
			</dt>

			



		</div>

	</div>
	<div id="footer"></div>
</div>

</body>
</html>