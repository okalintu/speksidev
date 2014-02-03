// var positions = [];

//function writePositions() {
//	$("body").append("<div id='debug'>"+JSON.stringify({positions:positions})+"</div>");
//}

$(document).ready(function() {

	var positions = [[129,45],[423,147],[615,168],[741,138],[522,172],[366,136],[89,48],[147,129],[101,168],[208,165],[284,169],[320,165],[522,170],[684,162],[772,164],[237,140],[467,172],[569,135],[698,182],[787,135],[424,144],[313,134],[349,166],[163,71],[112,88],[746,180],[120,138],[110,91],[102,5],[127,160],[82,195],[5,193],[52,9],[130,158],[11,140],[53,221],[301,145],[527,179],[257,162],[187,150],[767,190],[145,66],[540,168]];

	
	function randomBetween(a,b) {
		return (b-a)*Math.random() + a;
	}
	
	setInterval(function () {
		if (positions.length>0) {
			var pos = positions[Math.floor(randomBetween(0,positions.length))];
			new Spark({x:pos[0], y:pos[1]});
		}
	}, 400);
	
	// Helper to add new positions for the sparks by clicking
	$("#banner").click(function(event) {
		//console.log("Clicked at "+event.offsetX+", "+event.offsetY);
		positions.push([event.offsetX, event.offsetY]);
	});

});