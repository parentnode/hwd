// Setting up trello api
var trelloBoard = "aSELHpTm"; // The trello board you wanna get the data from, BOARD NEEDS TO BE PUBLIC OR ELSE YOU'LL NEED TO AUTHORIZE WITH TOKENS
var trelloKey = "bf094877e21908a497e9566e5998a582"; // Your trello api key, this is needed to allow third party sites to access
var trelloToken = ""; // SHOULD NEVER BE USED CLIENT SIDE
var trelloCards = "http://api.trello.com/1/boards/" + trelloBoard + "/cards?&key=" + trelloKey; // Check the Trello API for specific card fields or boards, action and more.

// Querying and initial variables
var scene = document.querySelector('.scene');

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

			// Check if the color label exists
			if (jsonArray[obj].labels[0]) {
				var cardColor = jsonArray[obj].labels[0].color;
			}
			else {
				cardColor = "grey";
			}

			// Creating cards themselves
			var cardDiv = scene.appendChild(document.createElement("a"));
			cardDiv.className = "card";
			cardDiv.innerHTML =  cardName;
			cardDiv.style.borderLeft = "5px solid " + cardColor;

			cardDiv.setAttribute("href", jsonArray[obj].shortUrl); // Add corresponding trello link to card
			cardDiv.setAttribute("target", "_blank"); // Open link in new tab

			if (jsonArray[obj].desc) {
				var descDiv = cardDiv.appendChild(document.createElement("p"));
				descDiv.className = "description";
				descDiv.innerHTML = cardDesc;
				// descDiv.style.fontSize = "12px";
			}
		}
	}
}
// Opens the trelloCards url and returns the data as json
xhr.responseType = "json";
xhr.open("GET", trelloCards);
xhr.send("");