
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
    console.log(arr);
    let i = 0;
    for(let target of document.querySelectorAll(".card")) {
        target.style.backgroundImage = `url("/jogos/combo-memo/components/card/${background[arr[i]]}.png")`;
        i++;
    }
}