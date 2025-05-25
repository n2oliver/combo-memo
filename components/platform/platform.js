
let counter = 0;
let ultimaCarta;
const background = [
    "abelha",
    "abelha",
    "coruja",
    "coruja",
    "elefante",
    "elefante",
    "golfinho",
    "golfinho",
    "koala",
    "koala",
    "macaco",
    "macaco",
    "pinguim",
    "pinguim",
    "tartaruga",
    "tartaruga",
    "serpente",
    "serpente"
]
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM completamente carregado e analisado");
    embaralhar();
    for(let card of document.querySelectorAll(".card")){
        card.addEventListener("click", (event) => {
            counter++;
            if(counter > 2) {
                counter = 0;
                esconderTodasAsCartas();
            } else {
                if(event.target.dataset.acertou) {
                    return;
                }
                if(event.target.dataset.oculto == false) {
                    event.target.dataset.oculto = true;
                    esconderCarta(event.target);
                } else {
                    event.target.dataset.oculto = false;
                    virarCarta(event.target);

                    if(counter == 1) {
                        ultimaCarta = event.target;
                    }
                    if(counter == 2 && ultimaCarta && ultimaCarta.style.backgroundImage == event.target.style.backgroundImage) {
                        event.target.dataset.acertou = true;
                        ultimaCarta.dataset.acertou = true;
                    }
                }
            }
        }, false)
    }
});
function virarCarta(target) {
    target.classList.remove("inverter");
    target.classList.add("inverter");
    setTimeout(()=>{
        target.classList.remove("sem-fundo");
    }, 800);
}
function esconderCarta(target) {
    target.classList.remove("inverter");
    setTimeout(()=>{
        target.classList.add("sem-fundo");
    }, 800);

    ultimaCarta = null;
}
function esconderTodasAsCartas() {
    for(let target of document.querySelectorAll(".card.inverter")) {
        if(target.dataset.acertou) {
            continue;
        }
        target.classList.remove("inverter");
        target.classList.add("sem-fundo");
    }
}
function embaralhar() {
    let arr = [];

    // Cria dois de cada número
    for (let i = 1; i <= 8; i++) {
        arr.push(i);
        arr.push(i);
    }

    // Embaralha
    arr.sort(() => Math.random() - 0.5);

    let i = 0;
    for(let target of document.querySelectorAll(".card")) {
        target.style.backgroundImage = `url("/components/card/${background[arr[i]]}.png")`;
        i++;
    }
}