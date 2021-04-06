'use strict';

export const adBlockFunc = () => {
    const aaa = () => {
        const divs = document.querySelectorAll('div');
        const ad = divs[divs.length - 1];
        ad.style.display = 'none';
    }
    setTimeout(aaa, 2000);
    setInterval(aaa, 3000);
}