// var test = false;

// if(test) {
// 	//run this code
// 	console.log('yay we got true');
// } else {
// 	console.log('we got false :(');
// }


// ignore these lines for now
// just know that the variable 'color' 
// will end up with a random value from the colors array

var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'violet'; // todo, change this to your favorite color from the list

if (color == 'red') {
	console.log('apples are red');
} else if (color == 'orange') {
	console.log('oranges are orange');
} else if (color == 'yellow') {
	console.log('lemons are yellow');
} else if (color == 'green') {
	console.log('limes are green');
} else if (color == 'blue') {
	console.log('blueberries are blue'); 
} else if (color == favorite) {
	console.log('GASP, violet is my favorite :3');
} else {
	console.log('yay rainbow food!')
}

// todo: Create a block of if/else statements to check
//       for every color except indigo and violet.

// todo: When a color is encountered log a message that
//   	 tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// todo: Have a final else that will catch indigo and violet.
// todo: In the else, log: I do not know anything by that color.

// todo: Using the ternary operator, conditionally log a 
// 	     statement that
//       says whether the random color matches your favorite color.

