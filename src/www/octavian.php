<!DOCTYPE html>
<html>
<head>
	<title>guid</title>
	<link rel="stylesheet" href="octavian_files/guid1.css">
</head>
<body>

<h1>Installing the parentNode web stack on Windows 10</h1>
<hr .linia >
<p>This guide is currently being updated.</p>
<p>This will guide you through installing the parentNode web stack on Windows 10
The parentNode development environment 
is a full web stack based on Apache,
MariaDB/MySQL and PHP, which enables you to run all the parentNode tools,
as well as most PHP based frameworks and CMS', including WordPress, Joomla or TYPO3.
</p>
<h2>Prerequisites</h2>
<p>First it has to have an acount on Github.If not then
make an acount on Github 
login in Github</p>
<p>Download Sourcetree for windows from</p>
<ul>
	<li><a href="https://www.sourcetreeapp.com/">Download Sourcetree</a></li>
</ul>
<hr .linia >
Install bash shell command line for windows 10 by folowing the guid from the below:
	<ul> <li><a href="https://www.windowscentral.com/how-install-bash-shell-command-line-Windows-10">Install bash shell command line for windows 10</a></li></ul>
<p>Check for  the “Windows Subsystem for Linux” is avalable in the Windows 10 computer by folowing instructions.
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
		<li><a href="https://docs.microsoft.com/en-us/windows/wsl/install-win10">Installing guid </a></li>
	</ul>
</div>
<hr .linia >
<div>
<hr .linia >
<img class="resize" src="octavian_files/ubuntu_f_win.jpg" >
<ol>
	<li><p>Run the Ubuntu app</p></li>
	<li><p>It will install a Ubuntu distribution</p></li>
</ol>
<hr .linia >
</div>
	<ul>
		<li><p>Then will be promt for </p></li>
		<li><p>Enter new UNIX username:</p></li> 
		<li><p>Enter new UNIX password:</p></li>
	</ul>
<li><p>Accessing the windows drive "C: from bash environment or Ubuntu is made with "cd /mnt/c" </p></li>
<hr .linia >
<div class="line_endings">
	The editor line endings has to be changed to UNIX by for Sublime editor:  "Sublime-> view->line endings-> UNIX"
 </div>
 <hr .linia >
 <img class="resize" src="octavian_files/sublime_line_end.jpg"  alt="Computer Hope logo small"/S>
<p>Optional installing programs like in Linux can be done by:</p>
<p>Installing the chocolatey by executing the following line in  Powershell elevated in administrator mod privilege </p>
<img class="resize" src="octavian_files/chocolatey.jpg" >
<p>(run as admin by  mouse click right on the program icon)</p>
then has to click yes on the pop up windows</p>
<p>Copy then paste (click right) the folowing line in the terminal :
<p>Set-ExecutionPolicy Bypass -Scope Process -Force; iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))</p>
</p><img class="resize" src="octavian_files/powershell.jpg" ><p>
<h2>Installing the Apache</h2>
<hr .linia >
<p>The Apache windows binaries  are avalable at : <a href="http://www.apachelounge.com/download/">http://www.apachelounge.com/download/ </a </p>
<p>
	<a href="http://www.apachelounge.com/download/VC15/binaries/httpd-2.4.29-Win64-VC15.zip">download link: </a>
</p>
	<h2>Installing the PHP</h2>
<p>
	<a href="http://windows.php.net/download">http://windows.php.net/download </a
</p>
<hr .linia >
<p>The PHP and Apache has to be compiled with the same compiler the redistributed
 pakage VC++ 15 (the latest) downloaded from:</p>
 <a href="https://aka.ms/vs/15/release/VC_redist.x64.exe">https://aka.ms/vs/15/release/VC_redist.x64.exe </a>
 <p>The folowing way to install has to be avoided as much as possible because of mentenance and compatibility isues in a long run.</p>
 <hr .linia >
 <ol>
<li><p>choco install php</p></li>
<li><p>choco install ffmpeg</p></li> 
</ol> 
<hr .linia >
https://www.wikihow.com/Install-FFmpeg-on-Windows
</body>
</html>