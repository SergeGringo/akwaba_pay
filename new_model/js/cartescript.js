const kateri = document.getElementById("kateri");
const papillon = document.getElementById("papillon");
const baleine = document.getElementById("baleine");
const detale = document.getElementById("detale");

function clickcaterie() {
  const detaleDisplay = window.getComputedStyle(detale).display;

  if (detaleDisplay === "block") {
    detale.style.display = "none";
    baleine.style.display = "flex";
    papillon.style.display = "none";
    kateri.classList.remove("kickered");
  } else {
    detale.style.display = "block";
    baleine.style.display = "none";
    papillon.style.display = "flex";
    kateri.classList.add("kickered");
  }
}

kateri.addEventListener("click", clickcaterie);

const keeper = document.getElementById("keeper");
const scolo = document.getElementById("scolo");
const otarie = document.getElementById("otarie");
const filer = document.getElementById("filer");

function clickkeeper() {
  const filerDisplay = window.getComputedStyle(filer).display;

  if (filerDisplay === "block") {
    filer.style.display = "none";
    otarie.style.display = "flex";
    scolo.style.display = "none";
    keeper.classList.remove("kickered");
  } else {
    filer.style.display = "block";
    otarie.style.display = "none";
    scolo.style.display = "flex";
    keeper.classList.add("kickered");
  }
}
keeper.addEventListener("click", clickkeeper);

const kalk = document.getElementById("kalk");
const abeille = document.getElementById("abeille");
const loutre = document.getElementById("loutre");
const fugue = document.getElementById("fugue");

function clickkakl() {
  const fugueDisplay = window.getComputedStyle(fugue).display;

  if (fugueDisplay === "block") {
    fugue.style.display = "none";
    loutre.style.display = "flex";
    abeille.style.display = "none";
    kalk.classList.remove("kickered");
  } else {
    fugue.style.display = "block";
    loutre.style.display = "none";
    abeille.style.display = "flex";
    kalk.classList.add("kickered");
  }
}
kalk.addEventListener("click", clickkakl);

