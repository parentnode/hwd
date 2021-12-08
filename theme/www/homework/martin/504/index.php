<?php



function navigationNodes($_options = false) {
	// default values
	$real = false;
	$meaningOfLife = 0;	
	$name = "a John"	;
	
	if($_options !== false) {
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

function printStuff($array){

	$_myArray = $array; 
	foreach($_myArray as $_key => $_value) {
		if ($_value)
		{
			echo $_key . ": " . $_value . "<br>";
		} 
		else { echo "why print false values? the out put is nothing: " . $_value . "<br>";  }
	
	}
}

$_myArray = navigationNodes(["real" => false,"meaningOfLife" => 42]);
$_myArray2 = navigationNodes(["real" => true,"meaningOfLife" =>11, "name" => "eleven" ]);



printStuff($_myArray);
printStuff($_myArray2);

class Person {
    public $name;
	public $age; 


    function __construct( $name ,$age ) {
        $this->name = $name;
		$this->age = $age;  
    }

	function sayYourName(){
		echo "my name is " . $this->name . "<br>";
	}

	function getAge(){
		return $this->age;
	}
};

$person1 = new Person('morty',13);

$person1->sayYourName();
$ageOfperson = $person1->getAge();

echo "I'm" . $ageOfperson;


?>