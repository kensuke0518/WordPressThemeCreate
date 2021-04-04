'use strict';

export const searchFunc = () => {
    const outside = document.querySelector('.l-frontRows');
    const searchInput = document.querySelector('.c-search');
    const nothingCheck = [];
    let searchElms;
    searchInput.addEventListener('focus', e => {
        searchElms = document.querySelectorAll('.c-cardSideway');
    });
    searchInput.addEventListener('input', e => {
        const inputWords = e.target.value;
        searchElms.forEach(elm => {
            const elmText = elm.querySelector('.c-card__title');
            const searchText = elmText.textContent;
            const nothingFunc = (disp, pushNum) => {
                elm.style.display = disp;
                nothingCheck.push(pushNum);
            }
            searchText.includes(inputWords) ? nothingFunc('', 0) : nothingFunc('none', 1);
        });
        if (!nothingCheck.includes(0) && inputWords !== '') {
            const nothingElm = document.createElement('p');
            const nothingText = document.createTextNode('検索結果はありません');
            nothingElm.appendChild(nothingText);
            nothingElm.id = 'nothing';
            if (!outside.querySelector('#nothing')) {
                outside.appendChild(nothingElm);
            }
        } else if (nothingCheck.includes(0)) {
                const no = outside.querySelector('#nothing')
                if(no) no.remove();
            }
    });
}