<!DOCTYPE html>
<html lang="en">

<head>
	<title>Playground</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/includes.css" />
</head>
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
		<h1>Playground</h1>

		<div class="section">
			<h2>For the secondaries</h2>
			<p>Clone the class-test project from <a href="https://github.com/parentnode/class-test">GitHub</a> by using the GitHub Desktop app. If you have already been added to the class-test repository, you should be able to choose the class-test project from the list, after choosing "Clone Repository" from the File menu. Otherwise, you can also clone by using the url, but you will not be able to commit your changes back to the group until I have added your Git account to the project.</p>
			<p>Some steps are to be followed:</p>
			<ul>
				<li>The project must be cloned to /srv/sites/parentnode/class-test on Mac and to C:\srv\sites\parentnode\class-test on Windows.</li>

				<li>After having cloned the class-test project, enable the site on your computer by following <a href="https://parentnode.dk/blog/enable-a-site">this guide.</a></li>
				<li>Once you have cloned and enabled the site, you can visit <a href="http://class-test.local">class-test </a>in your browser and see the class pages.</li>

				<li>Inside the new class-test project you will find the "HTML"-pages (the ones shown in the browser) in src/www. Though the files are named .php, they actually contain HTML. You can make a copy of "new-participant.php", using your own name - and this will be your personal test page onwards.</li>
				<li>The purpose is for you to have a simple page where you can write your first HTML and see the result in your own browser. It is also a way for you to get some experience with using Git to send your changes back to the group.</li>
				<li>Create your own file, make some changes to your file and commit and push the changes back to Github by using the GitHub account. Look inside the other participant-files for inspiration on HTML.</li>
			</ul>
		</div>
		<div class="section">
			<h2>For everyone</h2>
			<p>Clone and enable the parentnode_dk project, by following the same steps as with the class-test. If you need help to enable the site, look at <a href="https://parentnode.dk/blog/enable-a-site">this guide. </a></p>

			<p>This will allow you to inspect a project which uses the whole parentnode framework on your own computer. This is a prerequisite for coming lectures and assignments.</p>
			<p>After you have cloned and enabled the site, visit <a href="http://parentnode.local/janitor/admin/setup">this </a> to finish the local configuration of your site.</p>

			<p>For the setup, you will have to provide some information.</p>
			<p> Here are some hints:</p>
			<ul>
				<li>Leave pre-filled values as they are "except for System mail", where you enter your private email. Root database password: The one you entered when installing the webstack.</li>
				<li>New Janitor database password - whatever you want.</li>
				<li>Mail username: A Google-based email address.</li>
				<li>Mail password: The password for the Google-based email.</li>
			</ul>
			<p>You cannot complete the setup without completing those steps you can use non-google-mails, but in that case, you'd have to know/find the smtp/imap server name and port yourself. You can also enter dummy data for the mail settings if you don't have a Gmail account.</p>

			<p>Once you have finished the setup successfully, click relaunch, and you should see an almost empty page. This is because the site actually is empty. Use the login link at the top of the page to log in (username: the email you entered), password: 123rotinaj.</p>

			<p>After you log in, you can access the backend through the Janitor link at the top of the page. Please explore a bit by clicking around.</p>

			<p>Note down any problems, questions or comments you have during these assignments. We will use your feedback to improve the process for any new participants in the KBHFF development along the way. If you think something is hard to understand, others are likely to think the same.</p>
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


    // Function is called, return value will end up in x
var a =2;
var b = 5;
function multiply(a, b) {
    return a * b;            // Function returns the product of a and b
}

function add(a, b) {
    return a + b;            // Function returns the product of a and b
}

function substract(a, b) {
    return a - b;            // Function returns the product of a and b
}
function divide(a, b) {
    return a/b;            // Function returns the product of a and b
}
var mul = multiply(a,b)
var add =add(a,b);
var sub = substract(a, b);
var divide = divide(a, b);




// ------- hide element--------
function showElement(elementSelector, hideElement) {
	var element = document.querySelector(elementSelector);
	element.style.hideElement = hideElement;	
}
//
var content = document.getElementById('content');
var navigation = document.getElementById("navigation");
var page = document.getElementById("page");
//page.insertBefore(navigation, content);
moveElement( "#navigation", "#content", "#page" )
// ------- MOVE ELEMENT BY CSS-SELECTOR
function moveElement(elementSelector, refSiblingSelector, newParentSelector) {
	debugger;
	var element = document.querySelector(elementSelector);
	var refSibling = document.querySelector(refSiblingSelector);

	if(arguments.length < 3){ 
		var newParent = refSibling.parentElement;
		return newParent.insertBefore(element, refSibling);
	}
	
 	else {
		var newParent = document.querySelector(newParentSelector);
		return newParent.insertBefore(element, refSibling);
	}
}



function hideShowContent() {
    var x = document.getElementById("content");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
} 
function hideShowNaviagation() {
    var x = document.getElementById("navigation");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
} 
//var selector = document.getElementById("page");
function hideShow(elementSelector) {
 
  var x = document.querySelector(elementSelector);
   
	if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
} 
//hideShow("#navigation");

// editClass("addClass", "tag", "p", "highlight")


/* hideContent();
hidePage(); 
hideNaviagation();
hideNaviagation();*/
 //hideShow(selector);

//console.log("results:", "multiplication:",  mul, "substraction", " addition" ,add, "substraction", sub," divition", divide);
//alert("results mat operations of a,b multiplication", mul,"addition", add," substraction", sub, " divition", divide);

</script>

</body>
</html>
