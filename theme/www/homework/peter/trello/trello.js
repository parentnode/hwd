// Setting up trello api
var trelloBoard = "aSELHpTm"; // The trello board you wanna get the data from, BOARD NEEDS TO BE PUBLIC OR ELSE YOU'LL NEED TO AUTHORIZE WITH TOKENS
var trelloKey = "bf094877e21908a497e9566e5998a582"; // Your trello api key, this is needed to allow third party sites to access
var trelloToken = ""; // SHOULD NEVER BE USED CLIENT SIDE
var trelloCards = "http://trello.com/1/boards/" + trelloBoard + "/cards?&key=" + trelloKey; // Check the Trello API for specific card fields or boards, action and more.
// http://api.trello.com/1/boards/
// cards?fields=name

// Querying and hiding scene for loading
var scene = document.querySelector('.scene');

// Creating board link, we append it after the cards has been loaded
var boardLink = document.createElement("a");
boardLink.className = "link";
boardLink.innerHTML = "View board";
boardLink.setAttribute("href", "https://trello.com/b/" +trelloBoard);
boardLink.setAttribute("target", "_blank");

// Getting putting cards into site
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
	if (this.readyState == 4) {
		// Json arrays = [item, item...], Json object = {"key":"value"}
		// Json arrays can hold object like this [{"name":"peter"}, {"age":"19"}...]
		var jsonArray = this.response;
		for(var obj in jsonArray) {
			// Extracting json values
			var cardName = jsonArray[obj].name; 
			var cardDesc = jsonArray[obj].desc;
			var cardColor;
			var cardDate = jsonArray[obj].due;

			// Check if the color label exists
			if (jsonArray[obj].labels[0]) {
				cardColor = jsonArray[obj].labels[0].color;
			}
			else {
				cardColor = "grey";
			}

			// Creating cards themselves
			var cardElement = scene.appendChild(document.createElement("a"));
			cardElement.className = "card";
			cardElement.innerHTML =  cardName;
			cardElement.style.borderTop = "5px solid " + cardColor;
			cardElement.style.opacity = "0"; // Hiding cards to animate later

			cardElement.setAttribute("href", jsonArray[obj].shortUrl); // Add corresponding trello link to card
			cardElement.setAttribute("target", "_blank"); // Open link in new tab

			// Check if description exist
			if (cardDesc) {
				var descElement = cardElement.appendChild(document.createElement("p"));
				descElement.className = "description";
				descElement.innerHTML = cardDesc;
			}

			// Check if the card has a due date
			if (cardDate) {
				var dateElement = cardElement.appendChild(document.createElement("p"));
				dateElement.className = "date";
				dateElement.innerHTML = "due: " + cardDate.slice(0, 10);
			}
		}
	}
	// Card loop ends here
	// Start showing cards, gets animation from styles.css
	var cardList = scene.querySelectorAll(".card");
	var timer = 0;
	for(var i = 0; i < cardList.length; i++) {
		cardList[i].style.animation =  "showCards .25s ease " + (timer += .1) + "s 1 normal forwards";
		scene.appendChild(boardLink); // Prevent boardLink from jumping into place by appending from this loop
	}
}
// Opens the trelloCards url and returns the data as json
xhr.responseType = "json";
xhr.open("GET", trelloCards);
xhr.send("");

