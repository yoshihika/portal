import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const btn = document.querySelector('.pinned');

btn.addEventListener('mouseover', () => {
    btn.value = 'ピンを解除する';
});

btn.addEventListener('mouseleave', () => {
    btn.value = 'ピン留め中';
});