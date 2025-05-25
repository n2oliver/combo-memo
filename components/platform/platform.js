
let counter = 0;
let erros = 0;
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
                    } else if(counter == 2) {
                        erros++;
                        document.getElementById("erros").innerText = erros;
                    }
                }
            }
        }, false)
    }
    document.getElementById("btnRestart").addEventListener("click", () => {
        location.reload(); // ou, se quiser reiniciar sem recarregar: zerar o estado e chamar embaralhar()
    });
});