/*
* Author:      Marco Kuiper (http://www.marcofolio.net/)
*/

// Speed of the automatic slideshow
var slideshowSpeed = 6000;

// Variable to store the images we need to set as background
// which also includes some text and url's.
var photos = [ {
		"title" : "Dibujos",
		"image" : "dibujofoto2.jpg",
		"url" : "",
//		"firstline" :"Dibujos",
		"color": "#333"
	}, {
		"title" : "Pinturas",
		"image" : "pinturafoto4.jpg",
		"url" : "",
//		"firstline" :"Pinturas",
		"color": "#f2f2f2"		
	}, {
		"title" : "Dibujos",
		"image" : "dibujofoto7.jpg",
		"url" : "",
//		"firstline" : "Drawings",
		"color": "#333"		
//		"secondline" : "active"
	}, {
		"title" : "Paintings",
		"image" : "pinturafoto12.jpg",
		"url" : "",
//		"firstline" : "Paintings",
		"color": "#fff"		
//		"secondline" : "nature"
	}, {
		"title" : "Dibujos",
		"image" : "dibujofoto13.jpg",
		"url" : "",
		"color": "#333"		

	}

];



$(document).ready(function() {
		
	// Backwards navigation
	$("#back").click(function() {
		stopAnimation();
		navigate("back");
	});
	
	// Forward navigation
	$("#next").click(function() {
		stopAnimation();
		navigate("next");
	});
	
	var interval;
	$("#control").toggle(function(){
		stopAnimation();
	}, function() {
		// Change the background image to "pause"
		$(this).css({ "background-image" : "url(imagenes/btn_pause.png)" });
		
		// Show the next image
		navigate("next");
		
		// Start playing the animation
		interval = setInterval(function() {
			navigate("next");
		}, slideshowSpeed);
	});
	
	
	var activeContainer = 1;	
	var currentImg = 0;
	var animating = false;
	var navigate = function(direction) {
		// Check if no animation is running. If it is, prevent the action
		if(animating) {
			return;
		}
		
		// Check which current image we need to show
		if(direction == "next") {
			currentImg++;
			if(currentImg == photos.length + 1) {
				currentImg = 1;
			}
		} else {
			currentImg--;
			if(currentImg == 0) {
				currentImg = photos.length;
			}
		}
		
		// Check which container we need to use
		var currentContainer = activeContainer;
		if(activeContainer == 1) {
			activeContainer = 2;
		} else {
			activeContainer = 1;
		}
		
		showImage(photos[currentImg - 1], currentContainer, activeContainer);
		
	};
	
	var currentZindex = -1;
	var showImage = function(photoObject, currentContainer, activeContainer) {
		animating = true;
		
		// Make sure the new container is always on the background
		currentZindex--;
		
		// Set the background image of the new active container
		$("#headerimg" + activeContainer).css({
			"background-image" : "url(imagenes/index/" + photoObject.image + ")",
			"display" : "block",
			"z-index" : currentZindex,
			//"color" : photoObject.color
		});
		
		// Hide the header text
		$("#headertxt").css({"display" : "none"});
		$(".logo").css ({"color" : photoObject.color})
		
		// Set the new header text
		$("#firstline").html(photoObject.firstline);
		$("#secondline")
			.attr("href", photoObject.url)
			.html(photoObject.secondline);
		$("#pictureduri")
			.attr("href", photoObject.url)
			.html(photoObject.title);
		
		
		// Fade out the current container
		// and display the header text when animation is complete
		$("#headerimg" + currentContainer).fadeOut(function() {
			setTimeout(function() {
				$("#headertxt").css({"display" : "block"});
				animating = false;
			}, 500);
		});
	};
	
	var stopAnimation = function() {
		// Change the background image to "play"
		$("#control").css({ "background-image" : "url(imagenes/btn_play.png)" });
		
		// Clear the interval
		clearInterval(interval);
	};
	
	// We should statically set the first image
	navigate("next");
	
	// Start playing the animation
	interval = setInterval(function() {
		navigate("next");
	}, slideshowSpeed);
	
});
 function externalLinks() {
		if (!document.getElementsByTagName) return;
		var anchors = document.getElementsByTagName("a");
		for (var i=0; i<anchors.length; i++) {
			var anchor = anchors[i];
			if (
				anchor.getAttribute("href") && ( 
				anchor.getAttribute("rel") == "external" || 
				anchor.getAttribute("rel") == "external nofollow" || 
				anchor.getAttribute("rel") == "nofollow external" )
				)
			anchor.target = "_blank";
		}
	}
	window.onload = function() {
		externalLinks();
	}
