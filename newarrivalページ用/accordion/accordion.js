'use strict'

// 値段アコーディオン処理
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('.toggle_switch').addEventListener('click',function(){
        this.classList.toggle('active');
        document.querySelector('.toggle_contents').classList.toggle('active');
    })
});
// カラーアコーディオン処理
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('.filtter_switch').addEventListener('click',function(){
        this.classList.toggle('active');
        document.querySelector('.filtter_box').classList.toggle('active');
    })
});
// notes部分ご利用ガイド処理
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('.notes_switch').addEventListener('click',function(){
        this.classList.toggle('active');
        document.querySelector('.notes_contents').classList.toggle('active');
        document.querySelector('.fa-chevron-right').classList.toggle('active');
    })
});
//notes部分お問い合わせ処理
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('.customer_switch').addEventListener('click',function(){
        this.classList.toggle('active');
        document.querySelector('.customer_contents').classList.toggle('active');
        document.querySelector('.fa-chevron-left').classList.toggle('active');
    })
});
