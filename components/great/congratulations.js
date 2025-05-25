
let mensagemAtiva = null;
let timeoutId = null;
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
    const animacoes = ['anim-fadeOut', 'anim-slideUp', 'anim-zoomOut'];
    const animSelecionada = animacoes[Math.floor(Math.random() * animacoes.length)];

    // Se já existe, remove classes antigas
    if (!mensagemAtiva) {
    mensagemAtiva = document.createElement('div');
    mensagemAtiva.className = 'mensagem-central';
    document.body.appendChild(mensagemAtiva);
    }

    mensagemAtiva.textContent = texto + ' 🎉';

    // Resetar classes e forçar reflow
    mensagemAtiva.classList.remove('anim-fadeOut', 'anim-slideUp', 'anim-zoomOut');
    void mensagemAtiva.offsetWidth;
    mensagemAtiva.classList.add(animSelecionada);

    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => {
        mensagemAtiva.remove();
        mensagemAtiva = null;
    }, 5000);

    // Confetes
    for (let i = 0; i < 60; i++) {
    let confete = document.createElement('div');
    confete.className = 'confete';
    confete.style.left = Math.random() * window.innerWidth + 'px';
    confete.style.top = '-20px';
    confete.style.background = `hsl(${Math.random() * 360}, 100%, 50%)`;
    confete.style.animationDuration = (Math.random() * 1 + 2) + 's';
    document.body.appendChild(confete);
    setTimeout(() => confete.remove(), 3000);
    }
}