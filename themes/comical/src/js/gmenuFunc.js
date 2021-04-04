'use strict';

export function gmenuFunc() {
    const gmenuOpenBtn = document.querySelector('.c-hamburger');
    const gmenu = document.querySelector('.l-gmenu');
    gmenuOpenBtn.addEventListener('click', e => {
        gmenuOpenBtn.classList.toggle('is-open');
        gmenu.classList.toggle('is-open');
        document.body.classList.toggle('gmenu-is-open');
    });
}