import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.querySelector('.d-act').addEventListener('click', () => {
    window.alert('Sorry!このボタンは機能しません');
});

let today = new Date();
if (today.getDay() === 0) 
{
    today.setDate(today.getDate() + 1);
} else if (today.getDay() === 6)
{
    today.setDate(today.getDate() + 2);
}
const days = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日'];
const monday = document.querySelectorAll('.mon');
const tuesday = document.querySelectorAll('.tue');
const wednesday = document.querySelectorAll('.wed');
const thursday = document.querySelectorAll('.thu');
const friday = document.querySelectorAll('.fri');

const now = document.querySelector('.schedule #day');
const month = document.querySelector('#month');
const date = document.querySelector('#date');
month.textContent = (today.getMonth() + 1).toString().padStart(2, '0');
date.textContent = (today.getDate()).toString().padStart(2, '0');
now.textContent = days[today.getDay()];

const change = (hoge) => {
    monday.forEach((data) => {
        data.classList.remove('show');
    });
    tuesday.forEach((data) => {
        data.classList.remove('show');
    });
    wednesday.forEach((data) => {
        data.classList.remove('show');
    });
    thursday.forEach((data) => {
        data.classList.remove('show');
    });
    friday.forEach((data) => {
        data.classList.remove('show');
    });

    switch (hoge) {
        case 1:
            monday.forEach((data) => {
                data.classList.add('show');
            });
            break;
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
}

switch (today.getDay()) {
    case 1:
        monday.forEach((data) => {
            data.classList.add('show');
        });
        break;
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

const prev = document.querySelector('#prev');
const next = document.querySelector('#next');

prev.addEventListener('click', () => {
    if (today.getDay() > 1) {
        today.setDate(today.getDate() - 1);
    }
    else {
        today.setDate(today.getDate() - 3);
    }

    console.log(today.getDay());
    change(today.getDay());
    month.textContent = (today.getMonth() + 1).toString().padStart(2, '0');
    date.textContent = (today.getDate()).toString().padStart(2, '0');
    now.textContent = days[today.getDay()];
    console.log(days[today.getDay()]);
});

next.addEventListener('click', () => {
    if (today.getDay() < 5) {
        today.setDate(today.getDate() + 1);
    } else {
        today.setDate(today.getDate() + 3);
    }
    console.log(today.getDay());
    change(today.getDay());
    month.textContent = (today.getMonth() + 1).toString().padStart(2, '0');
    date.textContent = (today.getDate()).toString().padStart(2, '0');
    now.textContent = days[today.getDay()];
    console.log(days[today.getDay()]);
});

console.log(days[today.getDay()]);