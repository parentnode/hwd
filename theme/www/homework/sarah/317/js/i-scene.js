Util.Objects["scene"] = new function() {
	this.init = function(scene) {

		console.log("Scene init");
		// console.log(scene);

		// Use manipulator Util.Form.init(node) to initialise Form
		form_div = u.qs(".form");
		fieldset_div = u.cn(form_div)[0];
		// Would have liked to have done scene.form_div = u.qs(".form"), but this does not work.
		// Instead, am not declaring var, which should make it global, even within a function. Doesn't seem ideal to do like this.

		Util.Form.init(form_div);
		// Util.Form.init(u.qs(".form"));

		// Query headline, ps, form elements and buttons
		// h1, p, h3, .field, .actions
		// Set opacity to 0.
		scene_elements_first = u.cn(scene, {"exclude": ".form"});
		scene_elements_second = scene_elements_first.concat(u.cn(fieldset_div));
		scene_elements_all = scene_elements_second.concat(u.cn(form_div, {"exclude": "fieldset"}));

		for (var i=0; i < scene_elements_all.length; i++) {
			u.as(scene_elements_all[i], "opacity", "0");
		}

		// Set opacity of fieldset to 0 to remove border
		u.as(fieldset_div, "opacity", "0");

		// set the opacity of the scene to 1
		u.as(scene, "opacity", "1");

		// Make a loop and add a transition and opacity:1 to each of the elements,
		// while increasing the transition delay value for each iteration.
		// Need to change opacity to 1 also for the fieldset, after index 0 and 1 of scene_elements_all

		for (var j=0; j < scene_elements_all.length; j++) {
			u.a.transition(scene_elements_all[j], "all 1s ease-in " +j+ "s");
			if (j === 2) {
				u.a.transition(fieldset_div, "all 1s ease-in " +j+ "s");
				u.as(fieldset_div, "opacity", "1");
			}
			u.as(scene_elements_all[j], "opacity", "1");
		}

		// Add callback method to form, submitted.
		// In the submitted method, make a loop and fade each of the elements back to opacity:0,
		// again increasing the delay for each iteration.
		// After the final element has faded out, you make an alert announcing that the assignment is complete.

		form_div.submitted = function() {
			for (j = j-1; j >= 0; j--) {
				u.a.transition(scene_elements_all[j], "all 1s ease-in " +(scene_elements_all.length-j)+ "s");
				if (j === 2) {
					u.a.transition(fieldset_div, "all 1s ease-in " +(scene_elements_all.length-j)+ "s");
					u.as(fieldset_div, "opacity", "0");
				}
				u.as(scene_elements_all[j], "opacity", "0");
			}
			Util.Timer.setTimer(form_div, submit_alert, (scene_elements_all.length+1)*1000);
		}

		function submit_alert() {
			alert("You have completed assignment 317!");
		}

	}
}
