Util.Objects["scene"] = new function() {
	this.init = function(scene) {
		console.log("Scene init");
		console.log(scene);
		var form = u.qs(".form")
		u.f.init(form)

		form.submitted = function submitted() {
			for (i = 0; i < disAp.length; i++) {
				u.a.transition(disAp[i], "All 1s ease-in");
				u.as(disAp[i], "opacity", "0");
				u.as(disAp[i], "transitionDelay", "transitionDelay + 2000s");
			}
		}
		var disAp = u.cn(u.qs(".scene")).concat(u.cn(u.qs(".actions")), u.cn(u.qs(".actions")))
		var i =0;
		while (i < disAp.length ) {
			u.as(disAp[i], "opacity", "0")
			i++
		}

		u.as(scene, "opacity", "1")
		var i =0;
		while ( i < disAp.length) {
			u.a.transition(disAp[i], "All 1s ease-in");
			u.as(disAp[i], "opacity", "1");
			u.as(disAp[i], "transitionDelay", "transitionDelay + 4000s");
			i++
		}
	}
}
