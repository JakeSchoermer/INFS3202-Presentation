
// CreativeJS for non-coders
// Learn JavaScript the visual way!

// YAY We made a particle system in 3 minutes! 

// More information about CreativeJS workshops : 
// http://seb.ly/training


// now let's make an array and store loads of blobs in it!
// An array is like a list that you can store stuff in.
var blobArray = []; // < that's how you make an empty array.

setInterval(draw, 30); // 30 is the number of mils between
 					   // each time it's called

function draw() { 

	var window_width = $(window).width()
	var window_height = $(window).height()


	// Let's add size as a property
	var blob = { 	x : window_width/2, 
					y : window_height/2, 
					xSpeed : randomRange(-10, 10), 
					ySpeed : randomRange(-10, 10),
					size : 10 };

	// add it on to the end of the array
	blobArray.push(blob); 

	// clear the screen before the square is redrawn
	
	c.clearRect(0, 0, window_width, window_height);
	// YAY! An animated square! 
	
	// and instead of just drawing one blob, we need to
	// draw all of them. We can get to each blob in the array
	// using a loop like this : 
	for(var i = 0; i<blobArray.length; i++) {
	
		blob = blobArray[i]; 
		
		// this code now runs on every blob in the array 
		
		c.fillStyle = 'red'; 
		// and use that size to specify how large to draw
		// the square
		c.fillRect(blob.x, blob.y, blob.size, blob.size);
	
		// add speed to x and y
		blob.x = blob.x + blob.xSpeed;
		blob.y = blob.y + blob.ySpeed; 
		
		// Now each blob has a size, we can make them shrink
		// a little each time... 
		blob.size = blob.size * 0.99;
	}
}