function mouseOver(i) {
  if (i==0) {
    document.getElementById('polytech').src='images/logo_pops.png';
    document.getElementById("titre").style.color="blue";
    document.getElementById("titre").style.fontStyle="normal";
    document.getElementById("blue").style.fontWeight="bold";
    document.getElementById("red").style.fontWeight="normal";
  }
  if (i==1) {
    document.getElementById('polytech').src='images/logo_rouge.png';
    document.getElementById("titre").style.color="red";
    document.getElementById("titre").style.fontStyle="italic";
    document.getElementById("red").style.fontWeight="bold";
    document.getElementById("blue").style.fontWeight="normal";
  }
}