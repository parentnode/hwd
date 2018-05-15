Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		console.log("Scene init");
		
		var form = u.qs("form");
		u.f.init(form);
		
		var fadeElements = u.qsa("h1, p, fieldset, .actions", scene);		
		
		for (var i = 0; i < fadeElements.length; i++){
			u.ass(fadeElements[i], {"opacity":"0"})
		}

		for (var i = 0; i < fadeElements.length; i++){
			console.log(fadeElements[i]);
			u.a.transition(fadeElements[i],`opacity 1s ease-in ${i}s`)
			u.ass(fadeElements[i], {"opacity":"1"})
		}

		form.submitted = function() {
			for (var i = 0; i < fadeElements.length; i++){
				console.log(fadeElements[i]);
				u.a.transition(fadeElements[i],`opacity 1s ease-in ${i}s`)
				u.ass(fadeElements[i], {"opacity":"0"})
			}
		}

	}
}

