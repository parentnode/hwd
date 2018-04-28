<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">

		#navigation {
			width: 250px;
			height: 400px;
			font-family: Roboto,Helvetica,Tahoma,Arial;
		}

		#navigation ul {
			font-size: 0;
			margin: 0;
			padding: 0;

			border-top: 1px solid #fe310c;
			border-bottom: 1px solid #fe310c;
		}

		#navigation li {
			font-size: 12px;
			width: 49.5%;
			height: 70px;
			display: inline-block;
			vertical-align: top;
			text-align: center;

			border-bottom: 2px solid #e5e7eb;
		}

		#navigation li a {
			color: #e10000;
			display: block;
			text-decoration: none;
			padding-top: 35px;
			height: 35px;
		}
		#navigation li:hover {
			background: linear-gradient(-45deg,#e10000 0,#ff6a00 100%);
		}

		#navigation li:hover a {
			color: #fff;
		}

		#navigation li:nth-child(2n+1) {
			border-right: 2px solid #e5e7eb;
		}

		#navigation li:nth-last-child(-n+2) {
			border-bottom: none;
		}

		#navigation li:nth-child(1) a {
			background-image: url(img/red/icon-license.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(1):hover a {
			background-image: url(img/white/icon-license.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(2) a {
			background-image: url(img/red/icon-editor.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(2):hover a {
			background-image: url(img/white/icon-editor.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(3) a {
			background-image: url(img/red/icon-setup.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(3):hover a {
			background-image: url(img/white/icon-setup.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(4) a {
			background-image: url(img/red/icon-conventions.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(4):hover a {
			background-image: url(img/white/icon-conventions.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(5) a {
			background-image: url(img/red/icon-playground.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(5):hover a {
			background-image: url(img/white/icon-playground.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(6) a {
			background-image: url(img/red/icon-dictionary.png);
			background-repeat: no-repeat;
			background-position: center 10px;
		}

		#navigation li:nth-child(6):hover a {
			background-image: url(img/white/icon-dictionary.png);
			background-repeat: no-repeat;
			background-position: center 10px;
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
