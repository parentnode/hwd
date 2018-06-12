Util.Objects["page"] = new function() {
	this.init = function(page) {
		u.bug("init page");
		u.bug(page);
		
		// global scroll handler 
		page.resized = function() {
			// u.bug("page resized");
			//console.log(this.scene);
			//console.log("hello");
			//console.log(this.scene);
			u.as(this.scene,"height",u.browserH()+"px");
			console.log(this.scene);
		}

		// global scroll handler 
		page.scrolled = function() {
			// u.bug("page scrolled");
			
		}

		// Page is ready - called from several places, evaluates when page is ready to be shown
		page.ready = function() {
			// u.bug("page ready");

			// page is ready to be shown - only initalize if not already shown
			if(!this.is_ready) {

				// page is ready
				this.is_ready = true;
				
				// Get current scene
				this.scene = u.qs(".scene", this);
				console.log(this.scene);

				// set resize handler
				u.e.addWindowEvent(this, "resize", this.resized);
				// set scroll handler
				u.e.addWindowEvent(this, "scroll", this.scrolled);


				// initial resize
				this.resized();
				if(this.is_ready=true){
					u.a.transition(this.scene,"all 1s ease-in");	
					u.ass(this.scene,"opacity","1");	
					u.a.translate(this.scene,"0","0");
				}
			}
		}
		

		page.ready();
	}
}

// Start initialization on DOMReady
u.e.addDOMReadyEvent(u.init)
