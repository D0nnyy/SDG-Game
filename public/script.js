let sdgs = document.getElementsByClassName("sdg");
let shuffledSdgs = Array.from(sdgs).sort(() => Math.random() - 0.5);

for (let i = 0; i < 3; i++) {
  shuffledSdgs[i].style.display = "flex";
}
