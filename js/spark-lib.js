/**
 * spark-lib.js 
 * (C) Henri Pihkala 2013
 * Licensed under the MIT License: http://opensource.org/licenses/MIT
 *
 * Requirements: jQuery
 *
 **/

Spark = function(userOptions) {

	var defaultOptions = {
		img: "img/spark.png",
		element: "#banner",
		x: 0,
		y: 0,
		duration: 2000, // ms
		fadeDuration: 2000, // ms
		offset: 15 // half of spark image width, we want (x,y) to refer to to image center
	}

	var options = userOptions || {};
	options = $.extend({}, defaultOptions, options);

	var spark = $("<div class='spark' style='display:none; top:"+(options.y-options.offset)+"px; left: "+(options.x-options.offset)+"px; position:absolute; z-index: 100'><img src='"+options.img+"'/></div>");

	// Check that the parent element has position: relative
	if ($(options.element).css("position") != "relative")
		alert("Spark error: parent element must have position: relative");

	$(options.element).append(spark);	
	

	// Detecting IE
	var oldIE;
	if ($('html').is('.ie6, .ie7, .ie8')) {
		oldIE = true;
	}

	function fadeIn() {
		// No fades on old IE because of a bug in rendering png with alpha channel with css opacity
		if (oldIE) {
			spark.show();
			setTimeout(onFadeOutComplete, options.duration + 2*options.fadeDuration);
		}
		else spark.fadeIn(options.fadeDuration, onFadeInComplete);
	}

	function onFadeInComplete() {
		setTimeout(onDurationComplete, options.duration);
	}

	function onDurationComplete() {
		$(spark).fadeOut(options.fadeDuration, onFadeOutComplete);
	}

	function onFadeOutComplete() {
		$(spark).remove();
	}

	// Autostart the cycle
	fadeIn();
	
};
