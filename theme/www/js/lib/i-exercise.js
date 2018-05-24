Util.Objects["exercise"] = new function() {
	this.init = function(scene) {


		// Scene resize handler 
		scene.resized = function() {
			// u.bug("scene.resized:", this);
		}

		// Scene scroll handler 
		scene.scrolled = function() {
			// u.bug("scene.scrolled:", this);
		}

		// Scene is ready
		scene.ready = function() {
//			u.bug("scene.ready:", this);

			// scene is ready to be shown - only initalize if not already shown
			if(!this.is_ready) {

				// page is ready
				this.is_ready = true;

				var exercise = location.href.toString().match(/\/exercises\/([\d]+)/);
				if(exercise.length > 1) {
					this.current_exercise = exercise[1];

					this.response = function(response) {

						var i, exercise, prev, next;
						var exercises = u.qsa("li", response);
						var ul = u.ae(page.hN, "ul");
						for(i = 0; i < exercises.length; i++) {
							exercise = exercises[i];
							if(u.cv(exercise, "id") == this.current_exercise) {

								if(i > 0) {
									prev = exercises[i-1];
									console.log(prev);
									li = u.ae(ul, "li");
									u.ae(li, "a", {href:u.qs("a", prev).href, html:u.cv(prev, "id")})
								}

								if(i < exercises.length-1) {
									var next = exercises[i+1];
									if(next) {
										li = u.ae(ul, "li");
										u.ae(li, "a", {href:u.qs("a", next).href, html:u.cv(next, "id")})
									}
								}

							}

						}

					}
					u.request(this, "/exercises");
				}

			}

		}

		// ready to start scene builing process
		scene.ready();
	}
}
