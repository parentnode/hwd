<!DOCTYPE html>
<html>
<head>
	<title>Before you start coding</title>
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
		<div class="section">
			<h1>Before you start coding</h1>
			<p>
				When lots of people contribute to the same project, things tend to get messy.
				We have different ways of writing code, different levels of understanding and so on.
				Because of this, we have made some basic conventions that put us on the same page
				and serve as best practice for coding.
			</p>
			<p>
				Before you start contributing to the KBHFF-project be sure to read below to
				understand the conventions we follow in this project. If you're a newbie or
				intermediate in HTML and CSS you should read it extra carefully, since a lot of
				the stuff is also about how to be great at writing code.
			</p>
		</div>

		<div class="section">
			<h2>Separation of content and design</h2>
			<p>
				It's important to use the different programming languages for what they are best for.
			</p>
			<p>
				HTML is a markup language. It is used to tell the system what the content is (mark up the content).
				For instance a piece of text could be marked as a header, a subheader or a paragraph, or as a link.
			</p>
			<p>
				When you write HTML try to think about it as meant for a screen reader
				(a program that reads the webpage out loud to people with visual impairments).
				The visually impaired person cannot see the structure of the page or the
				color that seperates headlines from paragraphs, so to her/him it's critical
				that the content is marked up correctly, well structured and easy to remember,
				even without the visual clues.
			</p>
			<p>
				Luckily this doesn't only helps visually impaired people use our website,
				it also helps other programmers make sense of our code since the code itself becomes easier to read.
			</p>
			<p>
				CSS on the other hand is used to create a good looking and user friendly visual representation
				of the content. We can use CSS to place our content on the screen, to add colors or styles and
				even to add animations. Where HTML is all about content. CSS is all about visual design.
			</p>
			<p>
				The distinction between content and visual design is very important because it serves as the
				base logic behind the organization and writing of our code, making it more clear and less
				prone to errors.
			</p>
		</div>

		<div class="section">
			<h2>Dos and don'ts in our HTML</h2>
			<p>
				Introduction to this section...
			</p>
			<ul class="richtext">
				<li>
					<h3>Don't use line breaks (br) as substitute for paragrahps</h3>
					<p>
						the br-tag is a way to force a new line. Its usually considered bad practice
						to use this inside a block of text. Instead divide the text into to paragraphs.
					</p>
				</li>
				<li>
					<h3>Never use two br-tags after each other</h3>
					<p>
						Sometimes you see programmers using to br-tags to create som emtpy lines between elements,
						this is consideres bad practice and should be avoided since it will lead to problems further on.
					</p>
				</li>
				<li>
					<h3>Write code for the screen reader</h3>
					<p>
						People with impaired vision, visiting websites can be hard....
						<a href="">read more about alt attributes.</a>
					</p>
				</li>
				<li>
					<h3>Use of inline and block elements</h3>
					<p>
						Take care to use inline-level elements and block-level elements as they are meant to be used.
						Never put block-level elements inside of inline-level-elements.
					</p>
					<p>
						Read more about block and inline elements:
					</p>
					<ul>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Block-level_elements">Block-level elements (Mozilla)</a></li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Inline_elements">Inline-level elements (Mozilla)</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="section">
			<h2>Dos and don'ts in our CSS</h2>
			<p>
				Introduction to this section...
			</p>

		</div>

		<div class="section">
			<h2>Clean and readable code</h2>
			<p>
				Some text...
			</p>
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

// ------ ADD CLASS FUNCTION  ---------
// thoughts on how to do it
// 1. It should get the existing classes an store them as a string variable
// 2. It should add the name of the new class to the string with a space-separation
// 3. It should add the entire string with old and new class(es) to the node 

function addClass(element, newClass){
	if(element.className == ""){
		element.className = newClass;
		return
	}
	var oldClassValue = element.className;
	var classes = oldClassValue.split(" ");
	var duplicateClass = false;
	classes.forEach(function(item){
		if(item == newClass){
			duplicateClass = true;
			return
		}
	})
	if (duplicateClass != true){
		var newClassValue = oldClassValue + " " + newClass;
		element.className = newClassValue;
	}
}

// ------- REMOVE CLASS FUNCTION  ---------
// thoughts on how to do it
// 1. It should be able to take a ref to an element (node)
// 2. It should be able to take a string with the name of the class to delete
// 3. It should check if the class is on the element
// 4. It should delete the class

// Version 1 using classList
function deleteClass(element, className){
	classes = element.classList;
	classes.remove(className);
	if(element.className == ""){
		element.removeAttribute("class");
	}
	return
}

// Version 2 using className
function deleteClass2(element, className){
	var oldClassValue = element.className;
	var classes = oldClassValue.split(" ");
	classes.forEach(function(item, index){
		if(className == item){
			classes.splice(index, 1);
		}
	})
	var newClassValue = classes.join(" ");
	element.className = newClassValue;
	// if the removed class was the only class then remove the attribute
	if(element.className == ""){
		element.removeAttribute("class");
	}
	return
}

// ------- SET CLASS FUNCTION  ---------
// Thoughts on how to do it.
// 1. simply overwrite everything in class attribute with the given value
function setClass(element, newClass){
	element.className = newClass;
}

// ------- ENHANCER FUNCTION EXPERIMENTS -----------
// Enhancing the class-functions by making it able to accept different 
// kinds of selector-methods and accounting for multiple selected elements
// First tell the function if your want to add, delete og set a class by giving 
// a string of either "addClass", "deleteClass" or "setClass" as first argument.
// then tell the function what kind of method you for selecting the element
// choose between "selector", "tag", "class" and "id".
// Then you write the selection-statement as a string
// then give the class you want to add/delete/set
// example: editClass("addClass", "tag", "p", "highlight")
// (the example applies the class "highlight" to all p classes in the document)


function editClass(callback, typeOfRef, elementRef, classString){
	if(typeOfRef == "selector") {
		var elements = document.querySelectorAll(elementRef);
		elements.forEach(function(element) {
			callback(element, classString);
		});
	}
	else if(typeOfRef == "tag"){
		debugger;
		var elements = document.getElementsByTagName(elementRef);
		for (i = 0; i < elements.length; i++) {
			callback(elements.item(i), classString);
		}
	}
	else if(typeOfRef == "class"){
		var elements = document.getElementsByClassName(elementRef);
		for (i = 0; i < elements.length; i++) {
			callback(elements.item(i), classString);
		}
	}
	else if(typeOfRef == "id"){
		var element = document.getElementById(elementRef);
		callback(element, classString);
	}
}

// Ideas for further development:
// Making the entry point of the selection (now 'document') dynamic, 
// by having a fifth argument called eg. 'selectionParent'


// ------- MOVE ELEMENT BY CSS-SELECTOR
function moveElement(elementSelector, refSiblingSelector, newParentSelector) {
	debugger;
	var element = document.querySelector(elementSelector);
	var refSibling = document.querySelector(refSiblingSelector);
	// If we only provide a sibling just get the parent of that sibling.
	if(arguments.length < 3){ 
		var newParent = refSibling.parentElement;
		return newParent.insertBefore(element, refSibling);
	}
	// if we provide null instead of refSiblingSelector then just insert as last element in parent.	
	else if(arguments[1] == null) {
		var newParent = document.querySelector(newParentSelector);
		return newParent.insertBefore(element, null);
	}
 	else {
		var newParent = document.querySelector(newParentSelector);
		return newParent.insertBefore(element, refSibling);
	}
}

// ------- REMOVE ELEMENT BY CSS-SELECTOR
function removeElement(elementSelector){
	var element = document.querySelector(elementSelector);
	element.remove();
}

// ------- ADD ELEMENT BY CSS-SELECTOR
// adding element as last child of parent
function addElement(parentSelector, tag, HTMLstring){
	var parent = document.querySelector(parentSelector);
	var element = document.createElement(tag);
	element.innerHTML = HTMLstring;
	parent.appendChild(element)
}

// ------- ZOOM ELEMENT
function zoomElement(elementSelector, zoomFactor) {
	var element = document.querySelector(elementSelector);
	element.style.transform = "scale("+zoomFactor+", "+zoomFactor+")";
}

// ------- CHANGE FONT SIZE
// Version 1 - use string or number in px
function changeElementFontSize(elementSelector, newFontSize) {
	var element = document.querySelector(elementSelector);
	if(typeof newFontSize == "string") {
		element.style.fontSize = newFontSize;
	}
	else {
		newFontSize = newFontSize.toString();
		newFontSize = newFontSize + "px" 
		element.style.fontSize = newFontSize;
	}
}
// Version 2 - choose unit
function changeElementFontSize2(elementSelector, newFontSize, sizeUnit) {
	var element = document.querySelector(elementSelector);
	if(sizeUnit == "px") {
		newFontSize = newFontSize + "px" 
		element.style.fontSize = newFontSize;
	}
	if(sizeUnit == "em") {
		newFontSize = newFontSize + "em" 
		element.style.fontSize = newFontSize;
	}
	if(sizeUnit == "rem") {
		newFontSize = newFontSize + "rem" 
		element.style.fontSize = newFontSize;
	}
	if(sizeUnit == "%") {
		newFontSize = newFontSize + "%" 
		element.style.fontSize = newFontSize;
	}
	else {
		newFontSize = newFontSize + "px" 
		element.style.fontSize = newFontSize;
	}
}

// ------- CHANGE COLOR ON ELEMENT
function changeElementColor(elementSelector, colorString) {
	var element = document.querySelector(elementSelector);
	element.style.color = colorString;	
}

// ------- CHANGE BACKGROUND COLOR ON ELEMENT
function changeElementColor(elementSelector, colorString) {
	var element = document.querySelector(elementSelector);
	element.style.backgroundColor = colorString;	
}

</script>

</body>
</html>
