'use strict';

export const cardClassFunc = () => {
    const mqWidthMd = 600;
    const cardClassChange = () => {
        const bodyWidth = document.body.clientWidth;
        const gmenu = document.querySelector('.l-gmenu');
        const cards = gmenu.querySelectorAll('.c-card');
        if (bodyWidth > mqWidthMd) {
            for (const card of cards) {
                card.classList.remove('c-card--sideway');
                card.classList.remove('u-mt15');
            }
        }
        else {
            for (const card of cards) {
                card.classList.add('c-card--sideway');
                card.classList.add('u-mt15');
            }
        }
    }
    addEventListener('load', e => cardClassChange());
    addEventListener('resize', e => cardClassChange());
}

export const cardBoxHeight = () => {
    const mqWidthMd = 600;
    const aaa = () => {
        const gmenu = document.querySelector('.l-gmenu');
        const artset = gmenu.querySelector('.l-artset');
        const artsetTop = artset.getBoundingClientRect().top;
        const gmenuHeight = gmenu.clientHeight;
        const gmenuHead = () => artsetTop < 0 ? gmenuHeight + artsetTop : artsetTop;
        const pb = parseInt(getComputedStyle(gmenu).paddingBottom);
        const height = gmenuHeight - gmenuHead() - pb;
        artset.style.height = height + 'px';
    }
    addEventListener('load', e => aaa());
    addEventListener('resize', e => aaa());

}