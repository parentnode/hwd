Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		var form = u.qs('form');
		Util.Form.init(form);
				
		var getElements = u.qsa('h1, p, form fieldset, form ul');
		for(var i=0; i<getElements.length; i++){
			u.ass(getElements[i], {'opacity':'0'});
		}

		u.ass(scene, {'opacity':'1'});
		
		var timer = 0;
		for(var i=0; i<getElements.length; i++){
			
			u.a.transition(getElements[i], 'all 1s ease ' + timer + 's');
			u.ass(getElements[i], {'opacity':'1'});
			console.log(getElements[i].style.transitionDelay);
			timer = timer + 1;
		}
		
		form.submitted = function(form){
			timer = 0;
			for(var i=getElements.length-1; i>=0; i--){
				console.log(getElements[i]);
				u.a.transition(getElements[i], 'all 1s ease ' + timer + 's');
				u.ass(getElements[i], {'opacity':'0'});
				timer++;
			}
			
		}

		console.log("Scene init");
		console.log(scene);

	}
}