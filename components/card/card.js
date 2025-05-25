
const background = {
    0: "abelha",
    1: "coruja",
    2: "elefante",
    3: "golfinho",
    4: "koala",
    5: "macaco",
    6: "pinguim",
    7: "tartaruga",
}
function virarCarta(target) {
    target.classList.remove("inverter");
    target.classList.add("inverter");
    setTimeout(()=>{
        target.classList.remove("sem-fundo");
    }, 300);
}
function esconderCarta(target) {
    target.classList.remove("inverter");
    setTimeout(()=>{
        target.classList.add("sem-fundo");
    }, 300);

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
    for (let i = 0; i < 8; i++) {
        arr.push(i);
        arr.push(i);
    }

    // Embaralha
    arr.sort(() => Math.random() - 0.5);
    console.log(arr);
    let i = 0;
    for(let target of document.querySelectorAll(".card")) {
        target.style.backgroundImage = `url("${APP_URL}components/card/${background[arr[i]]}.png")`;
        i++;
    }
}