Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		console.log(scene);
		scene.form = u.qs("form");
		u.f.init(scene.form);
		scene.show = function (){
			for(var i= 0; i < scene.testall.length; i++){
				console.log(scene.testall[i]);
				u.a.transition(scene.testall[i],"all 5s ease-out");
				u.as(scene.testall[i],"opacity","1");
			}
		}
		scene.hide = function (){
			for(var i= 0; i < scene.testall.length; i++){
				console.log(scene.testall[i]);
				u.a.transition(scene.testall[i],"all 5s ease-out");
				u.as(scene.testall[i],"opacity","0");
			}
		}
		scene.test = u.qs(".field .string");
		scene.testall = u.qsa("div",scene.test);
		scene.show();
		scene.form.submitted = function(){
			console.log("Submitted");
			scene.hide();
		}	
		
	}
}