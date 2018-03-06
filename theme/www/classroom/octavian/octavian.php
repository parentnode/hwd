<!DOCTYPE html>
<html lang="en">
<head>
	<title>guid</title>
	<link rel="stylesheet" href="octavian_files/guid1.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
<h1>Installing the parentNode web stack on Windows 10</h1>
<hr>
<p>This guide is currently being updated.</p>
<p>This will guide you through installing the parentNode web stack on Windows 10
The parentNode development environment 
is a full web stack based on Apache,
MariaDB/MySQL and PHP, which enables you to run all the parentNode tools,
as well as most PHP based frameworks and CMS', including WordPress, Joomla or TYPO3.</p>
<h2>Prerequisites</h2>
<p>First it has to have an acount on Github.If not then
make an acount on Github 
login in Github</p>
<p>Download Sourcetree for windows from</p>
<ul>
	<li><a href="https://www.sourcetreeapp.com/"><span class="blink">Download Sourcetree</span></a></li>
</ul>
<hr>
<p>Install bash shell command line for windows 10 by folowing the guid from the below:</p>
<ul> <li><a href="https://www.windowscentral.com/how-install-bash-shell-command-line-Windows-10"><span class="blink">Install bash shell command line for windows 10</span></a></li></ul>
<p>Check for  the “Windows Subsystem for Linux” is avalable in the Windows 10 computer by folowing instructions.Install bash shell command line for windows 10
Run CMD in admin mode by cliking right button on CMD icon. 
type in "bash" in CMD 
Will be the folowing message if is not instaled in the system.
"Windows Subsystem for Linux has no installed distributions. 
Distributions can be installed by visiting the Windows Store: 
"</p> 
<p>Put the abouve link in the browser 
it may complain that does no find the Ubuntu app because the link is old, but it still point to the microsoft app stor.
Then search for “Ubuntu” app on the search field of that page where the link was:
 (“https://aka.ms/wslstoreHYPERLINK "https://aka.ms/wslstore”)"”).</p>
<p>"Put the abouve link in the browser 
it may complain that does no find the Ubuntu app because the link is old, but it still point to the microsoft app stor.
Then search for “Ubuntu” app on the search field of that page where thelink was mooved so red from below: </p>
<div>
	<ul>
		<li><a href="https://docs.microsoft.com/en-us/windows/wsl/install-win10"><span class="blink">Installing guide</span></a></li>
	</ul>
</div>
<hr>
<div>
<hr>
<div class="item">
<img class="resize item" src="octavian_files/ubuntu_f_win.jpg"  alt="" />
<div class="item-overlay top"></div>
</div>
<ol>
	<li><p>Run the Ubuntu app</p></li>
	<li><p>It will install a Ubuntu distribution</p></li>
</ol>

<hr>
</div>
	<ul>
		<li><p>Then will be promt for </p></li>
		<li><p>Enter new UNIX username:</p></li> 
		<li><p>Enter new UNIX password:</p></li>
	</ul>
<p>Accessing the windows drive "C: from bash environment or Ubuntu is made with "cd /mnt/c"</p>
<hr>
<div class="line_endings">
<p>The editor line endings has to be changed to UNIX by for Sublime editor:  "Sublime-> view->line endings-> UNIX"</p>
 </div>
 <hr>
 <div class="item">
 	<img class="resize item" src="octavian_files/sublime_line_end.jpg"  alt="Computer Hope logo small" />
	<div class="item-overlay top"></div>
</div>
	 <p>Optional installing programs like in Linux can be done by:</p>
<p>Installing the chocolatey by executing the following line in  Powershell elevated in administrator mod privilege </p>
<div class="item">
<img class="resize item" src="octavian_files/chocolatey.jpg" alt="chcolatey picture" />
<div class="item-overlay top"></div>
</div>
<p>(run as admin by  mouse click right on the program icon)
then has to click yes on the pop up windows</p>
<p>Copy then paste (click right) the folowing line in the terminal :</p>
<p>Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))</p>
<div class="item">
	<img class="resize item" src="octavian_files/powershell.jpg" alt="powershell picture" />
	<div class="item-overlay top"></div>
</div>
<h2>Installing the Apache</h2>
<hr>
The Apache windows binaries  are avalable at : <a href="http://www.apachelounge.com/download/"><span class="blink">Download Appache fromn www.apachelounge.com</span> </a>
<a href="http://www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win64-VC15.zip"><span class="blink">Download Appache windows</span></a>
<h2>Installing the PHP</h2>
	<a href="http://windows.php.net/download"><span class="blink">Download windows.php </span></a>

<p>The PHP and Apache has to be compiled with the same compiler the redistributed
 pakage VC++ 15 (the latest) downloaded from:</p>
 <a href="https://aka.ms/vs/15/release/VC_redist.x64.exe"><span class="blink">Download Visual C++ run time 2017(15) </span></a>
 <p>The folowing way to install has to be avoided as much as possible because of mentenance and compatibility isues in a long run.</p>
 <hr>
 <ol>
<li><p>choco install php</p></li>
<li><p>choco install ffmpeg</p></li> 
</ol> 
<hr>
<a>href="https://www.wikihow.com/Install-FFmpeg-on-Windows"<span class="blink">Installing FFmpeg
<hr>
</body>
</html>