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
	border-bottom: 2px solid #F42D2D;
	border-top: 2px solid #F42D2D;
	border-right: 1px solid #e5e7eb;
	border-left: 1px solid #e5e7eb;
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
	background-image: url("img/html_css.jpg");
	background-size: 40px;
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
	background-image: url("img/dictonary.jpg");
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
			<li><a href="software-license">Software license summary</a></li>
			<li><a href="choose-editor">Choosing an Editor</a></li>
			<li><a href="development-environment">Setting up the environment</a></li>
			<li><a href="before-you-start-coding">Before you start coding</a></li>
			<li><a href="playground">Set up playground</a></li>
			<li><a href="dictionary">Dictionary</a></li>
		</ul>

	</div>
	<div id="footer"></div>
</div>


</body>
</html>
