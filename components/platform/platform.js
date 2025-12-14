
let counter = 0;
let acertos = 0;
let acerto = 0;
let erros = 0;
let ultimaCarta;
let percentual = 0;

document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM completamente carregado e analisado");

    document.getElementById("high-score").innerText = localStorage.combo_memo_high_score || percentual;
    embaralhar();
    for(let card of document.querySelectorAll(".card")){
        card.addEventListener("click", (event) => {
            counter++;
            if(counter > 2) {
                counter = 0;
                esconderTodasAsCartas();
            } else if(!card.classList.contains('inverter')) {
                if(event.target.dataset.acertou) {
                    return;
                }
                if(event.target.dataset.oculto == false) {
                    event.target.dataset.oculto = true;
                    esconderCarta(event.target);
                } else if(event.target.classList.contains("sem-fundo")) {
                    event.target.dataset.oculto = false;
                    virarCarta(event.target);

                    if(counter == 1) {
                        ultimaCarta = event.target;
                    }
                    if(counter == 2 && ultimaCarta && ultimaCarta.style.backgroundImage == event.target.style.backgroundImage) {
                        acertos++;
                        acerto = (acertos/(erros+acertos)*100).toFixed(2);
                        document.getElementById("acerto").innerText = acerto;

                        event.target.dataset.acertou = true;
                        ultimaCarta.dataset.acertou = true;
                        
                        const comemoracao = comemoracoes.sort(() => Math.random() - 0.5);
                        comemorar(comemoracao[0]);

                        if(document.querySelectorAll("[data-acertou=true]").length == 16) {
                            const comemoracaoFinal = comemoracoesFinais.sort(() => Math.random() - 0.5);

                            percentual = (acertos/(erros+acertos)*100).toFixed(2);
                            if(!localStorage.combo_memo_high_score || percentual > localStorage.combo_memo_high_score) {
                                localStorage.setItem("combo_memo_high_score", percentual);
                                document.getElementById("high-score").innerText = percentual;
                            }
                            setTimeout(()=>{
                                comemorar(comemoracaoFinal[0]);
                                setTimeout(()=>{
                                    comemorar("Sua pontuação final foi de " + percentual + "%");
                                }, 5000);
                            }, 5000);
                            
                        }
                    } else if(counter == 2) {
                        erros++;
                        document.getElementById("erros").innerText = erros;
                    }
                }
            }
        }, false)
    }
    document.getElementById("btnRestart").addEventListener("click", () => {
        window.open('https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb', '_blank');
        setTimeout(()=>{
            location.reload(); // ou, se quiser reiniciar sem recarregar: zerar o estado e chamar embaralhar()
        }, 500);
    });
    
    setTimeout(()=>{
        if(location.href.includes('utm_source=popads')) {
        abrirJanela('/jogos/combo-memo/jogo.php', 'https://laxativethem.com/ffga4c7z4?key=9b0193dfd0a136a88071da78968c41eb');
        }
    }, 200);
});