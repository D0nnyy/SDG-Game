let sdgs = document.getElementsByClassName("sdg");
let shuffledSdgs = Array.from(sdgs).sort(() => Math.random() - 0.5);
let toggle = false;
let backBtn = document.getElementById("backbtn");

for (let i = 0; i < 3; i++) {
  const sdg = shuffledSdgs[i];
  const sdgNum = sdg.id.replace("sdg", "");

  const modal = document.getElementById(`modal-sdg${sdgNum}`);

  backBtn = function() {
    modal.style.display = "none";

    console.log("a")

    for (let i = 0; i < sdgs.length; i++) {
      sdgs[i].style.display = "flex";
    }

    toggle = false
  }

  sdg.onclick = function() {
    if (toggle === false) {
      modal.style.display = "flex";

      for (let i = 0; i < sdgs.length; i++) {
        sdgs[i].style.display = "none";
      }

    } else {
      modal.style.display = "none";

      for (let i = 0; i < sdgs.length; i++) {
        sdgs[i].style.display = "flex";
      }
    }

    toggle = !toggle
  }

  sdg.style.display = "flex";
}
