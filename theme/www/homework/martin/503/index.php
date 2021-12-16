<?php
//include 'include_test.php';
include __DIR__ . '/include_test.php';
require __DIR__ . '/require_test.php';
// run include test
echo testInclude() . "<br>";
echo testrequire() . "<br>";

echo "test functions: ";

function addNum($val1, $val2){
	$var = 5;
	return $val1 + $val2 * $var; 
}
echo addNum(1,2) . "<br>"; 


echo "test scope: ";
$global = 10;
function testscope(){
	$local = 5;
}

if(isset($local)){
	echo $local;
}
if(isset($global)){
	echo $global;
}

?>