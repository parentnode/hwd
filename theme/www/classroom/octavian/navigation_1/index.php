<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<style type="text/css">
	 @import url('https://fonts.googleapis.com/css?family=Roboto');
	#navigation {
	
		font-family: 'Roboto', sans-serif;
		width: 270px;
		
	}
	div #navigation{
		border-bottom-color: rgb(254, 49, 12)
	}
	#navigation ul {
	font-size: 0;
	border: 1px solid;
	list-style: none;
	padding: 0px;
	color: #fff;
	border-top: 2px solid #fe310c;
	border-bottom: 2px solid #fe310c;
	}	
	#navigation > ul > li {
		border: 0px solid; color:#e5e7eb;
		text-align: top;
		display: inline-block;
		height: 60px;
		width: 130px;
		font-size: 14px;
		vertical-align: top;
		text-align: center;
		border-right-color: transparent;
		border-bottom-color: transparent;
	}
	#navigation > ul >li:nth-child(1) > a {
		background-image: url("img/license.png");
		background-size: 40px;
		background-position: center top;
	}
	#navigation > ul >li:nth-child(2) > a {
		background-image: url("img/editor");
		background-size: 40px;
		background-position: center top;
	}
	#navigation > ul >li:nth-child(3) > a {
		background-image: url("img/license.png");
		background-size: 40px;
		background-position: center 1px;
	}
	#navigation > ul >li:nth-child(4) > a {
		background-image: url("img/	editor");
		background-size: 40px;
		background-position: center 1px;
	}
	#navigation > ul >li:nth-child(5) > a {
		background-image: url("img/	github");
		background-size: 20px;
		background-position: center 2px;
	}
	#navigation > ul >li:nth-child(6) > a {
		background-image: url("img/dictonary");
		background-size: 20px;
		background-position: center 3px;
	}
	#navigation > ul > li:nth-child(2n+1) {
		border-left-color: transparent;
	}
	#navigation > ul > li > a {
		color: rgb(225, 0, 0);
		padding-top: 20px;
		display: block;
		background-repeat: no-repeat;
		display: block;
	}
	#navigation > ul > li:hover > a {
		color: rgb(255, 255, 255);
	}
	#navigation > ul > li:hover {
		color: #fff;
		background-image: linear-gradient(-45deg,#e10000 0,#ff6a00 100%);
		background-size: 100%;
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
