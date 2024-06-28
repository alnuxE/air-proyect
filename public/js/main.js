const btn = document.getElementById('btn');
const menu = document.getElementById('menu');

btn.addEventListener('click', () => {
    menu.classList.toggle('-translate-x-full');
    menu.classList.toggle('translate-x-0');
});


