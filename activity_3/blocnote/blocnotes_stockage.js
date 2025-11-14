/* blocnotes_stockage.js */

/* references:
	http://www.w3schools.com/html/html5_webstorage.asp
	https://developer.mozilla.org/en-US/docs/Web/API/Storage
	https://developer.mozilla.org/en-US/docs/Web/API/Web_Storage_API/Using_the_Web_Storage_API
	http://www.w3schools.com/js/js_json_parse.asp
	http://www.w3schools.com/js/js_json_stringify.asp
	http://www.w3schools.com/js/js_array_methods.asp
	http://www.w3schools.com/jsref/jsref_obj_array.asp
*/

function sauve(item) {
	let listenotesTableau = recupSauvegardeTableau("listenotes");
	listenotesTableau.push(item);
	localStorage.setItem("listenotes", JSON.stringify(listenotesTableau));
	console.log(localStorage.getItem("listenotes"));
}

function efface(item) {
	let listenotesTableau = recupSauvegardeTableau("listenotes");
	let position=listenotesTableau.indexOf(item);
	console.log(position);
	listenotesTableau.splice(position,1);
	localStorage.setItem("listenotes", JSON.stringify(listenotesTableau));
	console.log(localStorage.getItem("listenotes"));
}

function chargementListenotes() {
	let listenotesTableau = recupSauvegardeTableau("listenotes");
	let ul = document.getElementById("listenotes");
	if (listenotesTableau != null) {
		for (let i = 0; i < listenotesTableau.length; i++) {
			let li = document.createElement("li");
			li.innerHTML = listenotesTableau[i];
			li.onclick= gestionClicNote;
			ul.appendChild(li);
		}
	}
}

function recupSauvegardeTableau(nomTableau) {
	let listenotesTableau = localStorage.getItem(nomTableau);
	console.log(localStorage.getItem(nomTableau));
	if (listenotesTableau == null || listenotesTableau == "") {
		listenotesTableau = new Array();
	}
	else {
		listenotesTableau = JSON.parse(listenotesTableau);
		console.log(localStorage.getItem(nomTableau));
	}
	return listenotesTableau;
}
