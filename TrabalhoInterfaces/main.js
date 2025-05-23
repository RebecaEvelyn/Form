let trilho = document.getElementById('trilho');

let h1 = document.querySelector('h1');
let form = document.querySelector('form');
let navigation = document.getElementById('navigation');
const fontSizeIncBtn = document.getElementById('font-size-inc');
const fontSizeDecBtn = document.getElementById('font-size-dec');
const body = document.body;


trilho.addEventListener('click', ()=>{
    trilho.classList.toggle('dark')
    body.classList.toggle('dark')
    h1.classList.toggle('dark')
    form.classList.toggle('dark')
    navigation.classList.toggle('dark')
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

