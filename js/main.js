

const MAIN_SLIDE = new Swiper('.main_slide', {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
    }
});




const MAIN_TAB_SLIDE = new Swiper('#mainSlideTab .slide_wrap', {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const MAIN_TAB_SELECT = document.querySelectorAll('#mainSlideTab .tab_select>li');
const MAIN_TAB_CONTENT = document.querySelectorAll('#mainSlideTab .tab_content>.slide_wrap');

MAIN_TAB_SELECT.forEach((it, idx) => {
    it.addEventListener('click', () => {
        MAIN_TAB_SELECT.forEach(it => it.classList.remove('on'));
        MAIN_TAB_SELECT[idx].classList.add('on');
        MAIN_TAB_CONTENT.forEach(it => it.classList.remove('on'));
        MAIN_TAB_CONTENT[idx].classList.add('on')


        console.log(it)
    });
});




























































const TOTOP = document.querySelector('#toTop a');

TOTOP.addEventListener('click', () => {
    window.scroll({
        top: 0,
    });
});