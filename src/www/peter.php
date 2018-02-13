<!DOCTYPE html>
<html>
<head>
	<title>The best site of all time</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<style>
body {
    background-color: linen;
}
h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>

<body>
<h1>Hello there!</h1>
<h2>Welcome to my site :)</h2>

<div class="ordered-lists-test">
	<ol>
		<li>First</li>
		<li>Second</li>
		<li>Third</li>
	</ol>
</div>

<div class="unordered-lists-test">
	<ul>
		<li>Count</li>
		<li>the rest</li>
		<li>yourself!</li>
	</ul>
</div>

<div class="random text">
	<p>A line of text</p>
	<p>Another line of text</p>
</div>

<div class="lorem-ipsum text">
	<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum omnis numquam veniam rem atque eos nihil laboriosam ullam dolor repudiandae, quo quae. Voluptate sapiente laborum facere in non perferendis dignissimos!</p>
</div>

<h3><?php print "php is working!" ?></h3>
<?// phpinfo() ?>
<?
	$mysqli = new mysqli("127.0.0.1", "root", "#PASSWORD#");
	print_r($mysqli);
?>
</body>
</html>
