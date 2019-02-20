// M. Kaan Tasbas | mktasbas@gmail.com
// p3/converter.js

var toMphReport = function(mph, kph) {
	document.getElementById("result").innerHTML =
		kph + " km/h = " + mph.toFixed(3) + " mph";
}

var toKphReport = function(mph, kph) {
	document.getElementById("result").innerHTML =
		mph + " mph = " + kph.toFixed(3) + " km/h";
}

document.getElementById("kph_to_mph").onclick = function() {
	var kph = document.getElementById("speed").value;
	toMphReport(kph/1.609, kph);
}

document.getElementById("mph_to_kph").onclick = function() {
	var mph = document.getElementById("speed").value;
	toKphReport(mph, mph*1.609);
}