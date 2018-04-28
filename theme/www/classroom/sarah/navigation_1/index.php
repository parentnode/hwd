<!DOCTYPE html>
<html>
<head>
	<title>Page title</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<style type="text/css">

/* Style navigation to look like https://www.politico.com/ */
		* {
			font-size: 16px;
		}

		body {
			margin: 0;
		}

		#header {
			height: 56px;
			background: #9e0000;
			border-bottom: 1px solid #6b0000;
		}

		#navigation {
			position: relative;
			top: -1px;
			/* position: absolute; */
			/* top: 55px; */
			/* width: 100%; */
/* To move the navigation block so it covers the border of the header */
		}

		#navigation ul {
			list-style: none;
			background: #840000;
			font-family: Arial,sans-serif;
			font-size: 0px;
			/* width: 1295px; */
			margin: 0 17px 0 0;
			/* padding: 1.6875em; Have to convert to px due to font size 0. */
			padding: 27px;
		}

		#navigation li {
			border-bottom-width: 2px;
			border-bottom-style: solid;
			border-bottom-color: #6b0000;
/* Same as border-bottom: 2px solid #6b0000;*/
			padding-bottom: 0.4em;
/* Same as padding: 0 0 0.4em 0; */
			margin-bottom: 0.4em;
			margin-left: 1.412429378531%;
			width: 15.489642184557%;
			/* width: calc(16.67% - 20px); */
			/* margin-left: 20px; */
			line-height: 1em;
			font-weight: bold;
			display: inline-block;
			/* top: 55px; */
/* To move the navigation block so it covers the border of the header */
		}

		#navigation li:first-child {
			margin-left: 0;
		}

		#navigation a {
			color: #fff;
			text-decoration: none;
		}

														/* UNUSED CODE */
		/* .vertical-group { */
			/* font-size: 24px; */
			/* width: 15.489642184557%; */
		/* } */

		/* .vertical-group:first-child { */
			/* margin-left: 0; */
		}
/* First child of navigation has to have margin-left of 0: .vertical-group:first-child */

		/* For each vertical element: */
		/* width:15.489642184557%; */
		/* margin-left:1.412429378531%; */
		/* float:left; */
		/* border: none */

	</style>
</head>
<body>

<div id="page">
	<div id="header"></div>
	<div id="content"></div>
	<div id="navigation">
		<ul>
			<!-- <div class="vertical-group"> -->
			<li><a href="#">Software license</a></li>
			<!-- </div> -->
			<!-- <div class="vertical-group"> -->
			<li><a href="#">Choosing an Editor</a></li>
			<!-- </div> -->
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
