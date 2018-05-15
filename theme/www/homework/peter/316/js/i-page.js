Util.Objects["page"] = new function() {
	this.init = function(page) {
		u.bug("init page");


		// global scroll handler 
		page.resized = function() {
			u.bug("page resized");

			// Setting scene to window height
			u.applyStyles(page.scene, {"height": (window.innerHeight + "px")});
		}

		// global scroll handler 
		page.scrolled = function() {
			u.bug("page scrolled");

		}

		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
			u.bug("page ready");

			// page is ready to be shown - only initalize if not already shown
			if(!this.is_ready) {

				// page is ready
				this.is_ready = true;

				// Get current scene
				this.scene = u.qs(".scene", this); // querySelect ".scene" on node


				// set resize handler
				u.e.addEvent(window, "resize", this.resized);
				// set scroll handler
				u.e.addEvent(window, "scroll", this.scrolled);


				// initial resize
				this.resized();

				// Animate scene
				u.a.transition(page.scene, "all 1s ease-in"); // "a" for "Animation"
				u.applyStyles(page.scene, {"opacity": "1"});
			}
		}

		page.ready();
	}
}

// Start initialization on DOMReady
u.e.addDOMReadyEvent(u.init)
