import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const today = new Date()
const days = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日'];
const monday = document.querySelectorAll('.mon');
const tuesday = document.querySelectorAll('.tue');
const wednesday = document.querySelectorAll('.wed');
const thursday = document.querySelectorAll('.thu');
const friday = document.querySelectorAll('.fri');

const now = document.querySelector('.schedule #day');
now.textContent = days[today.getDay()];

switch (today.getDay()) {
    case 1:
        monday.forEach((data) => {
            data.classList.add('show');
        });
    case 2:
        tuesday.forEach((data) => {
            data.classList.add('show');
        });
        break;
    case 3:
        wednesday.forEach((data) => {
            data.classList.add('show');
        });
        break;
    case 4:
        thursday.forEach((data) => {
            data.classList.add('show');
        });
        break;
    case 5:
        friday.forEach((data) => {
            data.classList.add('show');
        });
        break;
}

console.log(days[today.getDay]);