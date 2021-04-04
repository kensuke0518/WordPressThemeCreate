'use strict';

export function desc2cellFunc() {
    termClick();
    boxoutClick();
}

const dts = document.getElementsByClassName('c-desc2cell__term');
const outs = document.getElementsByClassName('c-desc2cell__boxout');
const mqWidthMd = 600;

//用語名クリック
function termClick() {
    for (const dt of dts) {
        dt.addEventListener('click', function () { //thisを参照するためアロー関数ではなく通常のfunctionへ
            //レスポンシブ判定用
            const bodyWidth = document.body.clientWidth;
            //要素の取得
            const body = this.closest('.c-desc2cell');
            const box = this.closest('.c-desc2cell__box');
            const dds = body.querySelectorAll('.c-desc2cell__detail');
            const detail = box.querySelector('.c-desc2cell__detail');
            const inner = box.querySelector('.c-desc2cell__detail-inner');
            const height = inner.offsetHeight;
            const fontSize = parseInt(getComputedStyle(inner).fontSize);
            //初期化:is-activeを削除
            const initActive = () => {
                for (const dtAll of dts) dtAll.classList.remove('is-active');
                for (const ddAll of dds) ddAll.classList.remove('is-active');
                body.style.height = '';
            }
            //is-activeの追加
            const addActive = () => {
                this.classList.add('is-active');
                detail.classList.add('is-active');
            }
            //SP用:dtのboxのみis-activeを削除
            const removeActive = () => {
                this.classList.remove('is-active');
                detail.classList.remove('is-active');
            }

            //PCの場合
            if (bodyWidth > mqWidthMd) {
                //トグルクリック
                if (detail.classList.contains('is-active')) {
                    initActive();
                    return;
                }
                //トグル以外
                initActive();
                addActive();
                body.style.height = '800px';
            }
            //SPの場合
            else {
                //トグルクリック
                if (detail.classList.contains('is-active')) {
                    removeActive();
                    detail.style.height = '';
                    return;
                }
                addActive();
                detail.style.height = (height + fontSize*3) + 'px';
            }
        });
    }
}
//バツボタン
function boxoutClick(){
    for (const out of outs) {
        out.addEventListener('click', function(){
            const bodyWidth2 = document.body.clientWidth;
            //要素の取得
            const body = this.closest('.c-desc2cell');
            const box = this.closest('.c-desc2cell__box');
            const term = box.querySelector('.c-desc2cell__term');
            const detail = box.querySelector('.c-desc2cell__detail');
            const removeActive = () => {
                term.classList.remove('is-active');
                detail.classList.remove('is-active');
            }
            if (bodyWidth2 > mqWidthMd) {
                //初期化
                removeActive();
                body.style.height = '';
            }
            else {
                removeActive();
                detail.style.height = '';
            }
        });
    }
}
