Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		console.log(scene);

		// Use manipulator Util.Form.init(node) to initialise Form
		var form_div = u.qs(".form");
		Util.Form.init(form_div);
		// Util.Form.init(u.qs(".form"));

		// Add callback method to form, submitted.
		form_div.submitted = function() {
		}

		// Query headline, ps, form elements and buttons
		// h1, p, h3, .field, .actions
		// Set opacity to 0.
		var scene_elements = u.cn(form_div);
		console.log(scene_elements);


		// set the opacity of the scene to 1




	}
}
