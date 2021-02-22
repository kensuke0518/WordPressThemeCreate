'use strict';

export function desc2cellFunc() {
    const dts = document.getElementsByClassName('c-desc2cell__term');
    for (const dt of dts) {
        dt.addEventListener('click', e => {
            //初期化
            dt.classList.remove('is-active');
            const body = dt.closest('.c-desc2cell');
            body.style.height = '800px';
            //初期化
            const actives = document.querySelectorAll('.c-desc2cell__detail');
            for (const active of actives) {
                active.classList.remove('is-active');
            }
            //追加
            const box = dt.parentNode;
            const detail = box.querySelector('.c-desc2cell__detail');
            if (!detail.classList.contains('is-active')) {
                detail.classList.add('is-active');
                dt.classList.add('is-active');
            }
        });
    }
    const outs = document.getElementsByClassName('c-desc2cell__boxout');
    for (const out of outs) {
        out.addEventListener('click', e => {
            //初期化
            const actives = document.querySelectorAll('.c-desc2cell__detail');
            for (const active of actives) {
                active.classList.remove('is-active');
            }
            const body = out.closest('.c-desc2cell');
            body.style.height = 'auto';
        });
    }

}

