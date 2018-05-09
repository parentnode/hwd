Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		console.log(scene);
		myForm = u.qs("form.form");
		u.Form.init(myForm);

		scene.fadedElements = u.qsa("h1, p, .form fieldset, .actions");

		myForm.submitted = function(){
			console.log("form submitted");
			for (var i = 0; i < scene.fadedElements.length; i++) {
				var element = scene.fadedElements[i];
				if(i == 0){
					var transitionDelay = 0;
				}
				if(i == (scene.fadedElements.length - 1)){
					u.a.transition(element, "all .5s ease-in " + transitionDelay + "s", function(){
						alert("Congrats!! The form has been submitted");
					});
					u.ass(element, {"opacity":"0"});
					break;											
				}
				u.a.transition(element, "all .5s ease-in " + transitionDelay + "s");
				u.ass(element, {"opacity":"0"});
				transitionDelay += .8;
			}
		}

		for (var i = 0; i < scene.fadedElements.length; i++){
			u.ass(scene.fadedElements[i], {"opacity": "0"});
		}
		scene.style.opacity = 1;
		for (var i = 0; i < scene.fadedElements.length; i++) {
			var element = scene.fadedElements[i];
			if(i == 0){
				var transitionDelay = 0;
			}
			u.a.transition(element, "all .5s ease-in " + transitionDelay + "s");
			u.ass(element, {"opacity":"1"});
			transitionDelay += .8;
		}

	}
}
