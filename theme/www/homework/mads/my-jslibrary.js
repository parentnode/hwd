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