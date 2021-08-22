Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		var form = u.qs("form");

		var nodes = [];
		var node;
		var i;
		var delayInMillsec = 1000; 
		var delaySec = delayInMillsec/1000;

		nodes[0] = u.qs("h1"); 
		nodes[1] = u.qs("p"); 
		nodes[2] = u.qs("fieldset"); 
		nodes[3] = u.qs("ul.actions");

		u.f.init(form);
		form.submitted = function(action) {
			console.log("submitted");

			

			for (i = 0; i < nodes.length; i++) {
				console.log("loop"+i);
				node = nodes[i];
				// ? how to use transitioned? 
				node.transitioned = function() {
					console.log("transition ended"+i);
					// i = 4??? wtf?
					if(i == 4){
						console.log(i);
						// why dose this alert come to early?
						// alert("transitioned");
					}
				}
				u.a.transition(node, "all "+delaySec * i+"s ease-in");
				u.ass(node,{"opacity": 0});
				
			}
			setTimeout(function(){ alert("done"); }, nodes.length* delayInMillsec);
		
		}



		for (i = 0; i < nodes.length; i++) {
			node = nodes[i];
			u.ass(node,{"opacity": 0});

		}

		u.ass(scene,{"opacity": 1});

		for (i = 0; i < nodes.length; i++) {
			node = nodes[i];
			u.a.transition(node, "all "+delaySec * i+"s ease-in");
			u.ass(node,{"opacity": 1});
		}
	}
}