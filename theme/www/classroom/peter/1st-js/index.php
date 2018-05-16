<!DOCTYPE html>
<html lang ="en">
<head>
	<title>Development environment</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/includes.css" />
</head>
<body>

<div id="page">
	<div id="header">
		<a class="logo" href="/">KBHFF <span class="highlight">udviklerguide</span></a>
		<ul class="servicenavigation">
			<li class="keynav navigation nofollow"><a href="#navigation">To navigation</a></li>
			<li><a href="/kontakt">Contact</a></li>
			<li><a href="http://kbhff.dk">kbhff.dk</a></li>
		</ul>
	</div>
	<div id="content">

		<h1>Setting up the development environment</h1>

		<div class="section">
			<h2>Installing the webstack</h2>
			<p>
				So what is a webstack? Well it's a collection of software you'll need to have before you can start building anything on the web.
				It's the foundation, we build on.
				The most basic forms of webstack are usually comprised of an Operating systen, a Http-server, an Application-server and a Database server.
			</p>
			<p>
				An example could be the <em>LAMP</em> stack which runs on a Linux operating system and uses the Apache Http-server,
				MariaDB/MySQL database and PHP application server.
			</p>
			<p>Since the project is based on the parentNode webstack, you'll first need to install it.</p>
			<ul>
				<li><a href="https://parentnode.dk/blog/the-parentnode-web-stack">You can read more about the parentNode webstack here.</a></li>
				<li><a href="https://parentnode.dk/blog/installing-web-stack-on-windows-10">Follow this guide to get started on Windows.</a></li>
				<li><a href="https://parentnode.dk/blog/installing-the-web-stack-on-mac-os">Follow this one for Mac.</a></li>
			</ul>
		</div>

		<div class="section">
			<h2>Working with git</h2>
			<p>
				Git is a <em>version control system</em>, it essentially allows multiple people to work on the same project.
				As Git is just a program we will need a host where we can upload our projects, or contribute to existing ones.
			</p>
			<p>
				The hosting platform we will use is <strong>GitHub</strong>, since it's the most popular host around and is completely free.
				This is also where kbhff is hosted.
			</p>
			<ul>
				<li><a href="https://github.com/">The Github homepage, you can access or create an account on github here</a></li>
				<li><a href="https://guides.github.com/activities/hello-world/">How to get started with GitHub</a></li>
			</ul>

			<p>
				Working with GitHub through the browser isn't always what you want so you should download a GitHub client.
				We recommend GitHub desktop starting out as it's free and the simplest way to use Git.
			</p>
			<p>
				Github Desktop is a bit different from the website but there's alot of upsides to using a client, such as easily being able to update and upload your files,
				there are other clients with more features at the expense of usability.
			</p>
			<ul>
				<li><a href="https://desktop.github.com/">Here's a link to GitHub dekstop.</a></li>
				<li><a href="https://help.github.com/desktop/guides/getting-started-with-github-desktop/">If you need help to install and set up the program.</a></li>
				<li><a href="https://help.github.com/desktop/guides/contributing-to-projects/">Here's how to use the client.</a></li>
			</ul>
		</div>
	</div>

	<div id="navigation">
		<ul class="navigation">
			<li><a href="software-license">Software license</a></li>
			<li><a href="choose-editor">Code editors</a></li>
			<li><a href="development-environment">Dev environment</a></li>
			<li><a href="before-you-start-coding">Coding conventions</a></li>
			<li><a href="playground">Set up playground</a></li>
			<li><a href="dictionary">Dictionary</a></li>
		</ul>
	</div>

	<div id="footer">
		<ul class="servicenavigation">
			<li class="copyright">KBHFF, 2018</li>
			<li><a href="/kontakt">Kontakt</a></li>
			<li><a href="http://kbhff.dk">kbhff.dk</a></li>
		</ul>
	</div>

</div>

<script type="text/javascript">
	/**
	 * Creating shortcuts for page, content and navigation.
	 * Using shortcuts to shorten code.
	 */
	var page = document.getElementById("page");
	var content = document.getElementById("content");
	var nav = document.getElementById("navigation");
	
	page.insertBefore(nav, content); //Move navigation between header and content.
	nav.querySelector("ul").classList.add("moved"); //Adding class to ul child of navigation.

	/**
	 * --addClass
	 * Simple, yet flexible syntax.
	 * Fallback commented out in code
	 */
	function addClass(element, newClass) {
		element.classList.add(newClass);
		//element.className += " " + newClass
		console.log("Added the class " + newClass + " to " + element.tagName);
	}

	/**
	 * --removeClass
	 * Gives more feedback via if/else
	 */
	function removeClass(element, existingClass) {
		if (element.classList.contains(existingClass)) {
			element.classList.remove(existingClass);
			console.log("Removed the class " + existingClass + " from " + element.tagName);
		}

		else {
			console.log("Couldn't find specified class on " + element.tagName);
		}
	}

	/**
	 * --setClass
	 * uses the "else if" statement and "!NOT" operator to give more specific feedback
	 */
	function setClass(element, newClass) {
		if (element.classList) {
			console.log("Changing from " + element.classList + " to " + newClass);
			element.className = newClass;
		}
		
		else if (!element.classList) {
			console.log("Setting the class on " + element.tagName + " to " + newClass);
		}
	}

	/**
	 * --changeFontsize
	 * Uses for loop to change fontSize property of each element in returned list from query selector
	 */
	function changeFontsize(elementSelector, newFontSize) {
		var elements = document.querySelectorAll(elementSelector);

		for (i = 0; i < elements.length; i++) {
			elements[i].style.fontSize = newFontSize;
		}
	}


</script>

</body>
</html>
