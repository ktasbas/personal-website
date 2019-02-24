function feetToMeters(valNum) {
	document.getElementById("outputMeters").innerHTML = (valNum / 3.281).toFixed(3);
  }

function metersToFeet(valNum) {
	document.getElementById("outputFeet").innerHTML = (valNum * 3.281).toFixed(3);
}