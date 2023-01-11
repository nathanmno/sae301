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
//Effet décompte des chiffres
const counters = document.querySelectorAll(".chiffres");
const speed = 300;
function chiffresAnim() {
  counters.forEach((counter) => {
    const animate = () => {
      const value = +counter.getAttribute("number");
      const data = +counter.innerText;

      const time = value / speed;
      if (data < value) {
        counter.innerText = Math.ceil(data + time);
        setTimeout(animate, 100);
      } else {
        counter.innerText = value;
      }
    };
    animate();
  });
}
window.addEventListener(
  "scroll",
  () => {
    if (window.scrollY >= 320) chiffresAnim();
  },
  true,
  setTimeout(1000)
);
