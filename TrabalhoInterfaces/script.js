const darkModeToggle = document.getElementById('dark-mode-toggle');
const fontSizeIncBtn = document.getElementById('font-size-inc');
const fontSizeDecBtn = document.getElementById('font-size-dec');
const body = document.body;

darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    if (body.classList.contains('dark-mode')) {
        darkModeToggle.textContent = 'Modo Claro';
    } else {
        darkModeToggle.textContent = 'Modo Escuro';
    }
});

fontSizeIncBtn.addEventListener('click', () => {
    changeFontSize(2);
});

fontSizeDecBtn.addEventListener('click', () => {
    changeFontSize(-2);
});

function changeFontSize(changeAmount) {
    const currentFontSize = parseFloat(getComputedStyle(body).fontSize);
    body.style.fontSize = `${currentFontSize + changeAmount}px`;
}

function validateForm() {
    // Aqui você pode adicionar validações específicas se necessário
    return true; // Retorna true se o formulário estiver validado
}


