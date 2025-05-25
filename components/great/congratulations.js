const comemoracoes = [
    'Parabéns!',
    'Você é um gênio!',
    'Sensacional!',
    'Estou gostando de ver!',
    'Você está mandando bem!',
    'Que incrível!',
    'Continue assim!',
    'Onde eu esqueci o seu troféu?'
];
const comemoracoesFinais = [
    'Parabéns! Você conseguiu!',
    'ÊêêêêÊ! Você abriu todas as cartas! Parabéns!',
    'Parabéns! Você conseguiu acertar todas!',
    'Parabéns! Você achou todas as combinações!',
]
function comemorar(texto) {
    // Criar e exibir mensagem central
    const msg = document.createElement('div');
    msg.className = 'mensagem-central';
    msg.innerText = texto + ' 🎉';
    document.body.appendChild(msg);

    // Remover após 3 segundos
    setTimeout(() => {
    msg.remove();
    }, 3000);

    // Criar confetes
    for (let i = 0; i < 60; i++) {
    let confete = document.createElement('div');
    confete.className = 'confete';
    confete.style.left = Math.random() * window.innerWidth + 'px';
    confete.style.top = '-20px';
    confete.style.background = `hsl(${Math.random() * 360}, 100%, 50%)`;
    confete.style.animationDuration = (Math.random() * 1 + 2) + 's';
    document.body.appendChild(confete);

    // Remover depois de 3 segundos
    setTimeout(() => {
        confete.remove();
    }, 3000);
    }
}