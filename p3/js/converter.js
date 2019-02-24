// M. Kaan Tasbas | mktasbas@gmail.com
// p3/converter.js

// All conversion math was taken from Google's suggested formulas

// Convert miles per hour to kilometers per hour
function mphToKph(valNum) {
	document.getElementById("outputKph").innerHTML = (valNum * 1.609).toFixed(3);
}

// Convert kilometers per hour to miles per hour
function kphToMph(valNum) {
	document.getElementById("outputMph").innerHTML = (valNum / 1.609).toFixed(3);
}

// Convert feet to meters
function feetToMeters(valNum) {
	document.getElementById("outputMeters").innerHTML = (valNum / 3.281).toFixed(3);
  }

// Convert meters to feet
function metersToFeet(valNum) {
	document.getElementById("outputFeet").innerHTML = (valNum * 3.281).toFixed(3);
}

// Convert pounds to kilograms
function poundsToKilograms(valNum) {
	document.getElementById("outputKilograms").innerHTML = (valNum / 2.205).toFixed(3);
}

// Convert kilograms to pounds
function kilogramsToPounds(valNum) {
	document.getElementById("outputPounds").innerHTML = (valNum * 2.205).toFixed(3);
}