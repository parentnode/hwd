Util.Objects["page"] = new function() {
	this.init = function(page) {
		u.bug("init page");


		// global scroll handler
		page.resized = function() {
			// u.bug("page resized");
			var scene = u.qs(".scene");
			u.ass(scene, {"height":"u.browserH()"});
			console.log(u.browserH());

		}

		// global scroll handler
		page.scrolled = function() {
			// u.bug("page scrolled");

		}

		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
			// u.bug("page ready");
			var scene = u.querySelector(".scene");
			u.a.transition(scene, "All 1s ease-in");
			u.as(scene, "opacity", "1");

			// page is ready to be shown - only initalize if not already shown
			if(!this.is_ready) {

				// page is ready
				this.is_ready = true;

				// Get current scene
				this.scene = u.qs(".scene", this);


				// set resize handler
				u.e.addEvent(window, "resize", this.resized);
				// set scroll handler
				u.e.addEvent(window, "scroll", this.scrolled);


				// initial resize
				this.resized();
			}
		}

		page.ready();
	}
}

// Start initialization on DOMReady
u.e.addDOMReadyEvent(u.init)
