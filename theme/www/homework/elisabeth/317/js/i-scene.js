Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		console.log(scene);

// initializes the form
		var form = u.qs(".form")
		u.f.init(form)

		form.submitted = function submitted() {
			for (i = 0; i < scene_nodes.length; i++) {
				u.a.transition(scene_nodes[i], "All 1s ease-in");
				u.as(scene_nodes[i], "opacity", "0");
				u.as(scene_nodes[i], "transitionDelay", "transitionDelay + 2000s");
			}
			my_alert = function (event) {
				alert("The assignment is complete!")
			}
			u.e.addEvent(scene_nodes[scene_nodes.length - 1], "transitionend", my_alert())
		}

// shows the scene
		var scene = u.qs(".scene")
		var actions = u.qs(".actions")
		var button_nodes = u.cn(actions)
		var fieldset = u.qs("fieldset")
		var fieldset_nodes = u.cn(fieldset)
		var scene_nodes_temp = u.cn(scene)
		var scene_nodes = scene_nodes_temp.concat(fieldset_nodes, button_nodes)
		for (i = 0; i < scene_nodes.length; i++) {
			u.as(scene_nodes[i], "opacity", "0")
		}

		u.as(scene, "opacity", "1")

		for (i = 0; i < scene_nodes.length; i++) {
			u.a.transition(scene_nodes[i], "All 1s ease-in");
			u.as(scene_nodes[i], "opacity", "1");
			u.as(scene_nodes[i], "transitionDelay", "transitionDelay + 2000s");
		}
	}
}
