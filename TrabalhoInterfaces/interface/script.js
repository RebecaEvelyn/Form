const darkModeToggle = document.getElementById('dark-mode-toggle');
const fontSizeIncBtn = document.getElementById('font-size-inc');
const fontSizeDecBtn = document.getElementById('font-size-dec');
const body = document.body;

darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const icon = darkModeToggle.querySelector('i');
    icon.classList.toggle('fa-sun');
    icon.classList.toggle('fa-moon');
    darkModeToggle.setAttribute(
        'aria-label',
        body.classList.contains('dark-mode') ? 'Alternar para modo claro' : 'Alternar para modo escuro'
    );
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

