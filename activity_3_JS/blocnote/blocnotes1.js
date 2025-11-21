/* blocnotes1.js */

function init() {
  console.log("lancement");
}

function gestionClicBouton() {
  let textInput = document.getElementById("entreenote");
  let note = textInput.value;

  if (note == "") {
    alert("Veuillez entrer une note");
  }
  else {
    console.log("Ajout de " + note);
    let li = document.createElement("li");
    li.innerHTML = note;
    let ul = document.getElementById("listenotes");
    ul.appendChild(li);
  }
}