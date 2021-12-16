<?php



function navigationNodes($_options = false) {
	// default values
	$real = false;
	$meaningOfLife = 0;
	$name = "John";
	
	if($_options !== false) {
		print_r($_options);
		foreach($_options as $_option => $_value) {
			switch($_option) {					
				case "name"              : $name           = $_value; break;
				case "meaningOfLife"     : $meaningOfLife  = $_value; break;
				case "real"              : $stuff          = $_value; break;
			}
		}
	}

	return $_options;
}



echo navigationNodes("test");

function printStuff($array){

	$_myArray = $array; 
	foreach($_myArray as $_key => $_value) {
		if ($_value){
			echo $_key . ": " . $_value . "<br>";
		} 
	
	}
}

$_myArray = navigationNodes(["real" => false,"meaningOfLife" => 42]);
$_myArray2 = navigationNodes(["real" => true,"meaningOfLife" =>11, "name" => "eleven" ]);

echo printStuff($_myArray); 
echo printStuff($_myArray2); 

?>