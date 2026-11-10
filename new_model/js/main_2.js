// FONCTION POUR LA LISTE D'INFORMATIONS DEROULANTE

const kicker = document.getElementById("kicker");
const cafard = document.getElementById("cafard");
const crevette = document.getElementById("crevette");
const hidor = document.getElementById("hidor");

function clickcaisse() {
  const hidorDisplay = window.getComputedStyle(hidor).display;

  // kicker.classList.toggle("kickered");

  if (hidorDisplay === "block") {
    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");
  } else {
    hidor.style.display = "block";
    crevette.style.display = "none";
    cafard.style.display = "flex";
    kicker.classList.add("kickered");

    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");

    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");

    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");

    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");

    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");
  }
}
kicker.addEventListener("click", clickcaisse);

const kiloo = document.getElementById("kiloo");
const moustique = document.getElementById("moustique");
const thon = document.getElementById("thon");
const zahlen = document.getElementById("zahlen");

function clickterminal() {
  const zahlenDisplay = window.getComputedStyle(zahlen).display;

  // kiloo.classList.toggle("kickered");

  if (zahlenDisplay === "block") {
    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");
  } else {
    zahlen.style.display = "block";
    thon.style.display = "none";
    moustique.style.display = "flex";
    kiloo.classList.add("kickered");

    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");

    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");

    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");

    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");

    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");
  }
}
kiloo.addEventListener("click", clickterminal);

const kilalot = document.getElementById("kilalot");
const fourmie = document.getElementById("fourmie");
const carpe = document.getElementById("carpe");
const fiah = document.getElementById("fiah");

function clickios() {
  const fiahDisplay = window.getComputedStyle(fiah).display;

  // kilalot.classList.toggle("kickered");

  if (fiahDisplay === "block") {
    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");
  } else {
    fiah.style.display = "block";
    carpe.style.display = "none";
    fourmie.style.display = "flex";
    kilalot.classList.add("kickered");

    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");

    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");

    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");

    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");

    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");
  }
}
kilalot.addEventListener("click", clickios);

const kakarot = document.getElementById("kakarot");
const mouche = document.getElementById("mouche");
const macro = document.getElementById("macro");
const bli = document.getElementById("bli");

function clickdroid() {
  const bliDisplay = window.getComputedStyle(bli).display;

  // kakarot.classList.toggle("kickered");

  if (bliDisplay === "block") {
    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");
  } else {
    bli.style.display = "block";
    macro.style.display = "none";
    mouche.style.display = "flex";
    kakarot.classList.add("kickered");

    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");

    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");

    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");

    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");

    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");
  }
}
kakarot.addEventListener("click", clickdroid);

const kaaris = document.getElementById("kaaris");
const scarabet = document.getElementById("scarabet");
const requin = document.getElementById("requin");
const wandi = document.getElementById("wandi");

function clickconsequence() {
  const wandiDisplay = window.getComputedStyle(wandi).display;

  // kaaris.classList.toggle("kickered");

  if (wandiDisplay === "block") {
    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");
  } else {
    wandi.style.display = "block";
    requin.style.display = "none";
    scarabet.style.display = "flex";
    kaaris.classList.add("kickered");

    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");

    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");

    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");

    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");

    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");
  }
}
kaaris.addEventListener("click", clickconsequence);

const kalash = document.getElementById("kalash");
const luciole = document.getElementById("luciole");
const dophin = document.getElementById("dophin");
const bonu = document.getElementById("bonu");

function clickhistorique() {
  const bonuDisplay = window.getComputedStyle(bonu).display;

  // kalash.classList.toggle("kickered");

  if (bonuDisplay === "block") {
    bonu.style.display = "none";
    dophin.style.display = "flex";
    luciole.style.display = "none";
    kalash.classList.remove("kickered");
  } else {
    bonu.style.display = "block";
    dophin.style.display = "none";
    luciole.style.display = "flex";
    kalash.classList.add("kickered");

    wandi.style.display = "none";
    requin.style.display = "flex";
    scarabet.style.display = "none";
    kaaris.classList.remove("kickered");

    hidor.style.display = "none";
    crevette.style.display = "flex";
    cafard.style.display = "none";
    kicker.classList.remove("kickered");

    zahlen.style.display = "none";
    thon.style.display = "flex";
    moustique.style.display = "none";
    kiloo.classList.remove("kickered");

    fiah.style.display = "none";
    carpe.style.display = "flex";
    fourmie.style.display = "none";
    kilalot.classList.remove("kickered");

    bli.style.display = "none";
    macro.style.display = "flex";
    mouche.style.display = "none";
    kakarot.classList.remove("kickered");
  }
}
kalash.addEventListener("click", clickhistorique);


// souligneur header

document.addEventListener('DOMContentLoaded', function () {
  const links = document.querySelectorAll('.nav-link');

  links.forEach(link => {
      link.addEventListener('click', function () {
          // Supprimer la classe 'souligne' de tous les liens
          links.forEach(l => l.classList.remove('souligne'));
          
          // Ajouter la classe 'souligne' à l'élément cliqué
          this.classList.add('souligne');
      });
  });
});




