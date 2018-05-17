// Setting up trello api
var trelloBoard = "aSELHpTm"; // The trello board you wanna get the data from, BOARD NEEDS TO BE PUBLIC OR ELSE YOU'LL NEED TO AUTHORIZE WITH TOKENS
var trelloKey = "bf094877e21908a497e9566e5998a582"; // Your trello api key, this is needed to allow third party sites to access
var trelloCards = "http://api.trello.com/1/boards/" + trelloBoard + "/cards?fields=name&key=" + trelloKey;

var scene = document.querySelector(".scene");
var cardDiv = document.createElement("div");

// Getting putting cards into site
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
	if (this.readyState == 4) {
		var jsonArray = this.response;
		for(var obj in jsonArray) {
			console.log(jsonArray[obj].name);
			// Json arrays = [item, item...], Json object = {"key":"value"}
			// Json arrays can hold object like this [{"name":"peter"}, {"age":"19"}...]
		}
	}
}

// Opens the trelloCards url and returns the data as json
xhr.responseType = "json";
xhr.open("GET", trelloCards);
xhr.send("");