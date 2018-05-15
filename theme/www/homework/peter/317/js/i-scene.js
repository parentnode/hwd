Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		u.querySelector("Scene init");
		// u.bug(scene);
		var form = u.querySelector(".form");
		u.f.init(form); // "f" for "form"

		var contentNodeList = u.querySelectorAll("h1, p, .form fieldset, .form ul");
		// Hiding content
		var i;
		for(i = 0; i < contentNodeList.length; i++) {
			u.applyStyles(contentNodeList[i], {"opacity": "0"});
		}

		// Make scene visible after loop is done
		u.applyStyles(scene, {"opacity": "1"})

		// Show content
		for(i = 0; i < contentNodeList.length; i++) {
			u.a.transition(contentNodeList[i], "all 1s ease-in " + i + "s");
			u.a.opacity(contentNodeList[i], 1);
		}

		// Hide content
		form.submitted = function() {
			for(i = 0; i < contentNodeList.length; i++) {
				u.a.transition(contentNodeList[i], "all 1s ease-in " + i + "s");
				u.a.opacity(contentNodeList[i], 0);
			}
		}
	
	}
}