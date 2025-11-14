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
    li.onclick = gestionClicNote;
    li.innerHTML = note;
    let ul = document.getElementById("listenotes");
    ul.appendChild(li);
  }
}

function gestionClicNote(evenement) {
  let note = evenement.target;
  let ul = document.getElementById("listenotes");
  ul.removeChild(note);
}