function feetToMeters(valNum) {
	document.getElementById("outputMeters").innerHTML = (valNum / 3.281).toFixed(3);
  }

function metersToFeet(valNum) {
	document.getElementById("outputFeet").innerHTML = (valNum * 3.281).toFixed(3);
}

function poundsToKilograms(valNum) {
	document.getElementById("outputKilograms").innerHTML = (valNum / 2.205).toFixed(3);
}

function kilogramsToPounds(valNum) {
	document.getElementById("outputPounds").innerHTML = (valNum * 2.205).toFixed(3);
}