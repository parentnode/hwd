Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		var form = u.qs('form');
		Util.Form.init(form);
		form.submitted = function(form){
			//functionality will be added later
		}

		var getElements = u.qsa('h1, fieldset h3, fieldset div.');
		console.log("Scene init");
		console.log(scene);

	}
}