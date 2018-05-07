<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">
	#navigation ul {
	float: left;
	list-style-type: none;
	width: 25%;
	margin-left: 100px;
	background-color: #FFFFFF;
	border-bottom: 1.5px solid #F42D2D;
	border-top: 1.5px solid #F42D2D;
	width: 280px;
	padding-left: 0;
	}
#navigation li {
	width: 50%;
	border-bottom: 1px solid #e5e7eb;
	height: 73px;
	box-sizing: border-box;
	float: left;
	padding: 8px;
	cursor: pointer;
	text-align: center;
	padding-top: 27px;
}
li:nth-child(1) {
	border-right: 1px solid #e5e7eb;
	background-image: url("img/license.png");
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: top;
}
li:nth-child(2) {
	background-image: url("img/editor.png");
	background-size: 40px;
	background-repeat: no-repeat;
	background-position: top;
}
li:nth-child(3) {
	border-right: 1px solid #e5e7eb;
	background-image: url("img/github.png");
	background-size: 30px;
	background-repeat: no-repeat;
	background-position: top;
}
li:nth-child(4) {
	background-image: url("img/html_css.png");
	background-size: 30px;
	background-repeat: no-repeat;
	background-position: top;
}
li:nth-child(5) {
	border-right: 1px solid #e5e7eb;
	background-image: url("img/playground.png");
	background-size: 30px;
	background-repeat: no-repeat;
	background-position: top;
}
li:nth-child(6) {
	background-image: url("img/dictonary.png");
	background-size: 30px;
	background-repeat: no-repeat;
	background-position: top;
}
a {
	color: #F42D2D;
	font-size: 14px;
	font-family: Roboto, Helvetica, Tahoma;
	font-weight: normal;
	vertical-align: bottom;
	text-decoration: none;
}

li:hover {
	background-color: #F42D2D;
}
li:hover a {
	color: #FFFFFF;
}

	</style>
</head>
<body>

<div id="page">
	<div id="header"></div>
	<div id="content"></div>
	<div id="navigation">
		<ul>
			<li><a href="#">Software license summary</a></li>
			<li><a href="#">Choosing an Editor</a></li>
			<li><a href="#">Setting up the environment</a></li>
			<li><a href="#">Before you start coding</a></li>
			<li><a href="#">Set up playground</a></li>
			<li><a href="#">Dictionary</a></li>
		</ul>

	</div>
	<div id="footer"></div>
</div>


</body>
</html>
