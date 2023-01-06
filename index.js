//Affichage de la page anglais/francais

let btnAnglais = document.querySelector(".btn-english-nav");
let btnFrancais = document.querySelector(".btn-french-nav");

btnAnglais.addEventListener("click", AfficheBtnFrench);

function AfficheBtnFrench() {
  document.querySelector(".french-version").style.display = "none";
  document.querySelector(".english-version").style.display = "block";
}

btnFrancais.addEventListener("click", AfficheBtnEnglish);

function AfficheBtnEnglish() {
  document.querySelector(".english-version").style.display = "none";
  document.querySelector(".french-version").style.display = "block";
}
