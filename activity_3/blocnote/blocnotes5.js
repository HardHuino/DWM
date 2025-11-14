/* blocnotes1.js */

function init() {
  console.log("lancement");
  chargementListenotes();
}

function gestionClicBouton() {
  let textInput = document.getElementById("entreenote");
  let note = textInput.value;

  if (note == "") {
    alert("Veuillez entrer une note");
  }
  else {
    
    if (document.getElementById("listenotes").innerHTML.indexOf(note)==-1){
      console.log("Ajout de " + note);
      let li = document.createElement("li");
      li.onclick = gestionClicNote;
      li.innerHTML = note;
      sauve(note);
      let ul = document.getElementById("listenotes");
      ul.appendChild(li);
    } else {
      alert("Note identique déjà presente dans la liste")
    }
  }
}

function gestionClicNote(evenement) {
  if (confirm("Êtes-vous sur de vouloir supprimmer cette note ?")) {
    let note = evenement.target;
    efface(note);
    let ul = document.getElementById("listenotes");
    ul.removeChild(note);
  }
}