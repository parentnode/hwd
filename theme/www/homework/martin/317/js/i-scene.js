Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		var form = u.qs("form");
		// let form know about its scene, 
		// other wise it could get confused inside submitted function and refering to the wrong scene.nodes
		form.scene = scene; // importent when code gets larger.

		var i,node;
		scene.delayInMillsec = 500;


		scene.nodes = u.qsa("h1, p, fieldset, ul.actions");
		// nodes[0] = u.qs("h1"); 
		// nodes[1] = u.qs("p"); 
		// nodes[2] = u.qs("fieldset"); 
		// nodes[3] = u.qs("ul.actions");

		u.f.init(form);
		// now we are in a form node
		form.submitted = function(action) {
			console.log("submitted");

			var node;
			var i;
			for (i = 0; i < this.scene.nodes.length; i++) {
				console.log("loop"+i);
				node = this.scene.nodes[i];
				
				if(i == this.scene.nodes.length-1){
					node.transitioned = function() {
						alert("done");
					}
				}
				
				u.a.transition(node, "all 0.5s ease-in "+this.scene.delayInMillsec * i +"ms");
				u.ass(node,{"opacity": 0});
				
			}
			// u.t.setTimer(this,function(){ alert("done");},this.scene.nodes.length * this.scene.delayInMillsec);
			// setTimeout(function(){ alert("done"); }, scene.nodes.length* scene.delayInMillsec);
		
		}

		for (i = 0; i < scene.nodes.length; i++) {
			node = scene.nodes[i];
			u.ass(node,{"opacity": 0});
		}

		u.ass(scene,{"opacity": 1});

		for (i = 0; i < scene.nodes.length; i++) {
			node = scene.nodes[i];
			u.a.transition(node, "all 1s ease-in "+scene.delayInMillsec * i+"ms");
			u.ass(node,{"opacity": 1});
		}
	}
}