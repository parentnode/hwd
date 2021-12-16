<?php


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
// how does the this statement work?


$person1 = new Person('morty',13);

$person1->sayYourName();
$ageOfperson = $person1->getAge();

echo "I'm" . $ageOfperson;


?>