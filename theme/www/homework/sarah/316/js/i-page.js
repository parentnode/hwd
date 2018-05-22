Util.Objects["page"] = new function() {
	this.init = function(page) {
		u.bug("init page");


// SARAH:The scene should always be as high as the browser.
// Set the scene height in page.resized, using u.ass, so that it will automatically be updated on every browser resize event.

		// *** Not necessary to query scene_div, as have queried it in page.ready function.
		// *** So can call this.scene instead, which is equal to page.scene.
		// *** And scene_div is on Util.Objects..., not on window or page. Instead use page. or window. Lucky that it still works...!
		// *** Should use browserH, from manipulator.

		var scene_div = document.querySelector(".scene");
		// console.log(document.querySelector("scene"));
		// global resized handler
		page.resized = function() {
			// u.bug("page resized");
			u.ass(scene_div, {"height": window.innerHeight+"px"});
		}

		// global scroll handler
		page.scrolled = function() {
			// u.bug("page scrolled");
			console.log("scrolled function called");
		}

		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
			// u.bug("page ready");
			// SARAH: Why does the above not work? Results in undefined.

			// u.a.transition(u.qs(".scene", this), "all 1s ease-in", function () {
				// u.ass(this.scene, {opacity: 1});
			// })

			// u.a.transition(scene_div, "all 1s ease-in", scene_fade_in);
			// console.log(scene_div);

// *** scene_fade_in is only called as callback after transition is done. Is not property that is amended in the transition.
// *** So to fix, need to call u.ass immediately after transition, not as part of the callback function.
			//
			// function scene_fade_in() {
			// 	console.log("show page");
			// 	u.ass(scene_div, {opacity: 1});
			// }

			// page is ready to be shown - only initalize if not already shown
			// *** I.e. is there to make sure the rest of the function is only run once.
			// *** is_ready is undefined / does not exist before the function is run the first time
			if(!this.is_ready) {
				console.log("in if loop");
				// page is ready
				this.is_ready = true;

				// Get current scene
				this.scene = u.qs(".scene", this);
				// console.log(this);
				// console.log(this.scene);

// The scene should be shown only when the page is ready.
// Add a transition, using u.a.transition and change the opacity to 1, using u.ass to make the page fade up, when it is ready.

				u.a.transition(this.scene, "all 1s ease-in")
				u.ass(this.scene, {"opacity": "1"});
			}


			// set resize handler
			u.e.addEvent(window, "resize", this.resized);
			// set scroll handler
			u.e.addEvent(window, "scroll", this.scrolled);


			// initial resize
			this.resized();
		}

		page.ready();
		// console.log(this.scene);
		// u.a.transition(scene_div, "all 1s ease-in", scene_fade_in);
		console.log(scene_div);

		// function scene_fade_in() {
		// 	console.log("show page");
		// 	u.ass(scene_div, {opacity: 1});
		// }
	}
}

	// function scene_fade_in() {
	// 	console.log("show page");
	// 	u.ass(this.scene, {opacity: 1});
	// }

// Start initialization on DOMReady
// This is adding an event listener, which will call this.init function when DOM is ready.
u.e.addDOMReadyEvent(u.init);

// SARAH: This qs does not work, returns scene_div2 is null. Why?
// console.log(this);
// var scene_div2 = document.querySelector(".scene");
// console.log(scene_div2);
// u.t.setTimer(this, fade_scene, 3000);
// console.log(scene_div2);
// function fade_scene() {
// 	u.ass(scene_div2, {opacity: 1});
// }
