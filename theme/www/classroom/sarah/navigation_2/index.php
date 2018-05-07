<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">

/* Style navigation to look like left hand top menu of https://de.wikipedia.org/wiki/Wikipedia:Hauptseite */

		body {
			margin: 0;
			padding: 0;
			background-color: #f6f6f6;
			font-family: sans-serif;
			font-size: 16px;
			font-weight: 400;
		}

		#navigation {
			width: 10em;
			padding-left: 0.5em;
		}
/* Whole left hand panel */

		#navigation p {
			height: 160px;
			width: 10em;
			position: relative;
			margin: 0;
		}

		#navigation img {
			/* display: block; */
			position: absolute;
			margin: auto;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		#navigation ul {
			margin: 1em 0.6em 0 1.2em;
			padding: 0.6em 0 0.25em 0;
		}

		#navigation li {
			list-style: none;
			line-height: 1.125em;
			font-size: 0.75em;
			padding: 0.25em 0;
		}

		#navigation a {
			text-decoration: none;
			color: #0645ad;
		}

		#navigation a:hover {
			text-decoration: underline;
		}

		#navigation a:visited {
			color: #0b0080;
		}

	</style>
</head>
<body>

<div id="page">
	<div id="header"></div>
	<div id="content"></div>
	<div id="logo">
	</div>
	<div id="navigation">
		<p><img src="img\hwd_logo.jpg" alt="Holistic Web Development course logo"
			width="135">
		</p>
		<ul>
			<li><a href="#">Software license</a></li>
			<li><a href="#">Choosing an Editor</a></li>
			<li><a href="#">Setting up environment</a></li>
			<li><a href="#">Before you start coding</a></li>
			<li><a href="#">Set up playground</a></li>
			<li><a href="#">Dictionary</a></li>
		</ul>

	</div>
	<div id="footer"></div>
</div>


</body>
</html>
