import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const button = document.querySelectorAll('.dl-button');
button.forEach((data) => {
    data.addEventListener('click', () => {
        window.alert('ダウンロード完了!');
    });
});

document.querySelector('.num3').addEventListener('click', () => {
    window.alert('Sorry! このボタンは機能していません');
});

document.querySelectorAll('.box').forEach((data) => {
    data.addEventListener('click', () => {
        window.alert('Sorry! このボタンは機能していません');
    });
});