Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		console.log(scene);
		this.form = u.qs(".form");
		u.f.init(this.form);
		var i;
		var j;
		this.test = u.qs(".field .string");
		this.testall = u.qsa("div",this.test);
		this.form.submitted = function(){
			console.log("Submitted");
			for(j= 0; j < this.testall.length; j++)
			{
				u.a.transition(this.testall[j],"all 5s ease-out");
				u.as(this.testall[j],"opacity","0");

			}
		}
		
		for(i= 0; i < this.testall.length; i++){
			console.log(this.testall[i]);
			u.a.transition(this.testall[i],"all 5s ease-out");
			u.as(this.testall[i],"opacity","1");
		}
	}
}