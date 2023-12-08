import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const LIST = document.querySelectorAll('#edit li');
console.log(LIST);
LIST.forEach((data) => {
    const CURRENT = data.parentElement.previousElementSibling;
    data.addEventListener('click', () => {
        console.log(CURRENT.children);
        CURRENT.children[0].value = data.value;
        CURRENT.children[2].textContent = data.children[0].textContent;
        CURRENT.children[3].textContent = data.children[1].textContent;
        CURRENT.children[4].textContent = data.children[2].textContent;
        CURRENT.children[5].textContent = data.children[3].textContent;
    });
});