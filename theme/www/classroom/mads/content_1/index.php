<!DOCTYPE html>
<html>
<head>
	<title>Software Licenses</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Adamina" rel="stylesheet">
	<style type="text/css">
		body {
			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 18px;
			line-height: 33px;
			margin: 0;
		}
		#header {

		}
		#content {
			margin-top: 25px;
		}
		.section {
			max-width: 740px;
			box-sizing: border-box;

			margin: 0 auto;
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 20px;
		}
		.sectionFullWidht {
			width: 100%;
		}
		.articleMeta {
			height: 120px;
			max-width: 740px;
			box-sizing: border-box;

			margin: 0 auto;
			padding-left: 20px;
			padding-right: 20px;
			padding-top: 35px;
			padding-bottom: 5px;
		}
		.authorAvatar {
			display: inline-block;
		}
		.authorInfo {
			display: inline-block;
			vertical-align: top;

			box-sizing: border-box;
			width: 640px;

			padding-left: 15px;

			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 15px;
			line-height: 20px;
		}
		a.authorName {
			text-decoration: none;
			color: #000;
		}
		div.authorDescription {
			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			color: rgba(0, 0, 0, 0.54);
			vertical-align: top;
			
			margin: 0px;
		}
		img.fullWidth {
			width: 100%;
			padding: 0px 0 80px 0;
		}
		img.hr {
			margin-top: 43px;
		}
		img.avatar {
			display: block;
			box-sizing: border-box;
			width: 60px;
			height: 60px;
			border-radius: 30px;
			margin: 10px 0;
		}
		h1 {
			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 42px;
			font-weight: 600px;
			line-height: 44px;
			margin: 0px;
			padding-bottom: 5px;
		}
		h2 {
			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 28px;
			font-weight: 400px;
			line-height: 34px;
			color: rgba(0, 0, 0, 0.54);

			margin: 0;
			padding-bottom: 15px;
		}
		h3 {
			font-family: 'Source Sans Pro',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 24px;
			font-weight: 400px;
			line-height: 34px;

			margin: 0px;
			padding-bottom: 5px;
		}
		p {
			font-family: 'Adamina',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 18px;
			font-weight: 200px;
			line-height: 33px;
			color: rgba(0, 0, 0, 0.84);
			margin: 0px;
			padding-bottom: 30px;

		}
		li {
			font-family: 'Adamina',Georgia,Cambria,"Times New Roman",Times,serif;
			font-size: 18px;
			font-weight: 200px;
			line-height: 33px;
			margin: 0px;
			padding-bottom: 15px;
		}
		a {
			color: rgba(0, 0, 0, 0.84);
		}
		.followBtn {
			display: inline-block;
			border: 1px solid rgb(133, 133, 133);
			border-radius: 5px;
			padding: 0 10px;
			margin: 0 5px; 

			text-decoration: none;
			color: rgb(133, 133, 133);
		}

		.block {
			display: block;
		}
		.horizontalRuler {
			width: 100%;
		}

	</style>
</head>
<body>

<div id="page">
	<div id="header">
		<div class="articleMeta">
			<div class="authorAvatar"><a href="#" class="block"><img src="author-avatar.jpg" class="avatar" /></a></div><div class="authorInfo">
				<a href="#" class="authorName">Mads Ringblom</a><a href="#" class="followBtn">follow</a>
				<div class="authorDescription">
					Copenhagen-based UX-designer and front-end devloper. Founder at meetr.dk<br />
					Email me at madsringblom@gmail.com <br />
					Mar 6 &#183; 7 min read
				</div>
			</div>
		</div>
	</div>
	<div id="content">

		<div class="section">
			<h1>Software license</h1>
			<h2>Free as in 'freedom' not as in 'free beer'</h2>
		</div>
		<div class="sectionFullWidth">
			<img class="fullWidth" src="license-hero.jpg" />
		</div>
		<div class="section">
			<h2>Introduction</h2>
			<p>In the first week of the Holistic Web Development Course, we discussed software licenses: what open- and closed-source means, what the pros and cons of different license types are and what license type we should recommend for the KBHFF project. This page outlines our findings.</p>
		</div>

		<div class="section">
			<h2>Understanding license types</h2>
			<h3>What is opensource?</h3>
			<p>"Open Source Software is software that can be freely used, changed, and shared (in modified or unmodified form) by anyone." The Open Source Software term was coined by <a href="https://opensource.com/article/18/2/coining-term-open-source-software">Christine Peterson</a> in 1998.</p>
			<p>Closed source is the opposite: software whose code is not published or otherwise made publicly available.</p>
			<h3>Examples of open source licenses</h3>
			<p>We looked at a number of different open source licenses. You can read further about them here:</p>
			<ul>
				<li><a href="https://www.gnu.org/licenses/gpl.html">The GNU General Public License (GPL)</a> is a "copyleft" form of opensource licence which allows anyone to access and modify source code and use the (modified or otherwise) source code for either commercial or non-commercial purposes. Any uses of the software/code must also be put into the public domain under the same conditions (i.e. they must also allow further modification).</li>
				<li> <a href="https://www.gnu.org/licenses/lgpl.html">The GNU Lesser General Public License (LGPL)</a> is less restrictive than the GPL license because it allows software licensed under LGPL to be used in or by closed source software, as long as the original LGPL-licensed software remains in the public domain. Unlike in the GPL, the closed source software will not need to be made open source, even though it utilises some software licensed under LGPL.</li>
				<li> <a href=https://en.wikipedia.org/wiki/Permissive_software_licence>Permissive Licenses</a>, such as the MIT license, Apache license and Apple Public Source Licence, allow any use of the software and source code, including modifying the original source code and releasing the result under a closed source licence.</li>
			</ul>
			<p>Looking for different kinds of open source software on your computers showed that most of the open source software had been installed by the user. However, it was interesting to find that notepad.exe is in fact open source. There are more examples deeper in the operating systems, but we also see that the adoption of open source projects is done when it is in the interest of the software producer and less so as an act of idealism. We won’t find any GPL licensed software embedded in the operating system, as this would then require the whole operating system to be GPL’d. The exercise also showed that it can sometimes be very hard to identify the license of an application.</p>
			<p>A good example of open source software is the Adblock browser extension. In particular when it comes to browser extensions, which essentially have the power to monitor every move you make on the internet and sell your private data, the open source aspect is important, as that is the only way to scrutinise the source code and ensure your privacy.</p>
			<h3>Further reading</h3>
			<p>In addition to the links already provided, we have collated some relevant links where you can read more about different license types:</p>
			<ul>
				<li><a href="https://opensource.org/">Open Source Initiative (OSI)</a>
					<blockquote cite="https://opensource.org/">
						"As a global non-profit, the OSI protects and promotes open source software, development and communities, championing software freedom in society through education, collaboration, and infrastructure, stewarding the Open Source Definition (OSD), and preventing abuse of the ideals and ethos inherent to the open source movement."
					</blockquote></li>
				<li><a href="https://creativecommons.org/">Creative Commons</a>
					<blockquote cite="https://creativecommons.org/about/">
						"Creative Commons provides free, easy-to-use copyright licenses to make a simple and standardized way to give the public permission to share and use [others'] creative work – on conditions of the [author's] choice."
					</blockquote></li>
				<li><a href="https://www.fsf.org/">Free Software Foundation</a>
					<blockquote cite="https://www.fsf.org/about/">
						"The Free Software Foundation (FSF) is a nonprofit with a worldwide mission to promote computer user freedom. We defend the rights of all software users."
					</blockquote></li>
				<li><a href="https://tldrlegal.com/">Software Licenses in Plain English</a>: Summarises popular software license "at-a-glance".</li>
			</ul>
			<img class="horizontalRuler" src="hr.png" />
		</div>

		<div class="section">
			<h2>License for KBHFF</h2>
			<p>The <strong>Open Source GPLv3 license</strong> has been chosen for the KBHFF-IT project for the following reasons:</p>
			<ul>
				<li>The GPLv3 license is in alignment with the core values of KBHFF, e.g. transparency, support a working community, sharing and collaborating.</li>
				<li>KBHFF makes a clear statement using this license. Other Open source licenses, such as the MIT license are easier to use for others, but don’t enforce transparency and sharing source code and thereby giving back to the community.</li>
				<li>KBHFF cannot control what others use the code developed in KBHFF-IT for, but with the GPLv3 license ensures modifications to the code are shared and freely available for others to use under the same license.</li>
				<li>The GPLv3 limits the KBHFF-IT project (and future modifications made by KBHFF or others) in that “closed” source code cannot be used as part of the project. The project can for example not use a sms plugin unless it is licensed under MIT, GPLv3 or other Open Source license variants.</li>
			</ul>
		</div>

		<div class="section">
			<h2>Installing the webstack</h2>
			<p>
				So what is a webstack? Well it's a collection of software you'll need to have before you can start building anything on the web.
				It's the foundation, we build on.
			</p>
			<p>The most basic forms of webstack are usually comprised of an Operating systen, a Http-server, an Application-server and a Database server.</p>
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
			<p>Git is a <em>version control system</em>, it essentially allows multiple people to work on the same project.</p>
			<p>As Git is just a program we will need a host where we can upload our projects, or contribute to existing ones.</p>
			<p>
				The hosting platform we will use is <strong>GitHub</strong>, since it's the most popular host around and is completely free!
				This is also where kbhff is hosted.
			</p>
			<p><a href="https://guides.github.com/activities/hello-world/">Here's how to get started with GitHub</a></p>
			<p>Working with GitHub through the browser isn't always what you want so you should download a GitHub client</p>
			<p>We recommend GitHub desktop starting out as it's free and the simplest way to use Git.</p>
			<p>
				Github Desktop is a bit different from the website but there's alot of upsides to using a client, such as easily being able to update and upload your files,
				there are other clients with more features at the expense of usability.
			</p>
			<ul>
				<li><a href="https://desktop.github.com/">Here's a link to GitHub dekstop.</a></li>
				<li><a href="https://help.github.com/desktop/guides/getting-started-with-github-desktop/">If you need help to install and set up the program.</li>
				<li><a href="https://help.github.com/desktop/guides/contributing-to-projects/">Here's how to use the client.</li>
			</ul>
		</div>

	</div>
	<div id="navigation"></div>
	<div id="footer"></div>
</div>

</body>
</html>
