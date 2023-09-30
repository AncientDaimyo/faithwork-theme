const el = document.getElementsByTagName('button')[0];
function burger() {
    el.classList.toggle('active');
}

if (el) {
    el.addEventListener('click', burger);
}

