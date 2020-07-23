const images =["top.images/bgimage1.png","top.images/topbg.2.png","top.images/topbg3.png"];

let count = 0;
const slideimage = ()=> {
    if(count >= images.length){
        count = 0;
    }else {
        document.getElementById('slidershow').src = images[count];
        count++;
    }
}

let slideid = 0;
const startstop = () => {
    if(slideid === 0) {
        slideid = setInterval(slideimage, 1000);
    }else {
        clearInterval(slideid);
        slideid = 0;
    }
}

document.getElementById('startstopbtn').onclick = startstop;

/*トップページ大画像スライダー*/

/*ハンバーガーメニュー*/

function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('js-hamburger');
    var blackBg = document.getElementById('js-black-bg');
    
        hamburger.addEventListener('click', function() {
        body.classList.toggle('nav-open');
        });
        blackBg.addEventListener('click', function() {
        body.classList.remove('nav-open');
        });
}
    toggleNav();