function assign_cell_listeners() {
    var cOppened = 0;
    document.querySelector('table').addEventListener('click',({target})=>{
        target.style.opacity = 0;
        cOppened += 1
        document.getElementById("cellsOpened").textContent=cOppened;
    })
}

function c(elem) {
    console.log("The image animal is "+document.getElementById("img").src.split('/')[7].split('.')[0]);
    console.log("The user clicked button is "+elem);
    if (elem==document.getElementById("img").src.split('/')[7].split('.')[0]) {
        console.log("Gagné!")
    }
}