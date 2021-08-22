Util.Objects["page"] = new function() {

	// page element is passed as argument in function(page),
	// so the div with class =  i:page, 
	// can be controlled from there on 
	this.init = function(page) {
		console.log("in page");
		// u.bug("init page");

		// global scroll handler 
		page.resized = function() {
			console.log("resized");
			//  u.bug("page resized");

			// scen as high as browser. 
			console.log(this.scene);
			u.ass(this.scene, {"height":"100vh"});


		}

		// global scroll handler 
		page.scrolled = function() {
			console.log("scrolled");
			//  u.bug("page scrolled");

		}

		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
			console.log("page.ready() called");
			//u.bug("page ready");

			// page is ready to be shown - only initalize if not already shown
			if(!this.is_ready) {

				console.log("through ready if gate");
				// page is ready
				this.is_ready = true;

				// Get current scene ,scope "this" =  page
				this.scene = u.qs(".scene", this);


				// set resize handler
				u.e.addEvent(window, "resize", this.resized);
				// set scroll handler
				u.e.addEvent(window, "scroll", this.scrolled);

				u.a.transition(this.scene, "all 1s ease-in");
				u.ass(this.scene, {"opacity": "1"});

				// initial resize
				this.resized();
			}
		}

		page.ready();
	}
}

// Start initialization on DOMReady (same as DOMContentLoaded)
u.e.addDOMReadyEvent(u.init)
