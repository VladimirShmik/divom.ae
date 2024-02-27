//current-year
const currentYear = new Date().getFullYear();
const yearElement = document.getElementById('currentYear');
yearElement.textContent = currentYear;
//mobile-burger
const burgerIcon = document.querySelector('.burger-icon');
const menu = document.querySelector('.menu-wrap');
const menuBackdrop =document.querySelector('.menu-backdrop');
const body =document.querySelector('body');

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('animate');
    menu.classList.toggle('show-menu');
    body.classList.toggle('body-overflow');
    menuBackdrop.classList.toggle('menu-backdrop--show')
});
function closeMenuAndReset() {
    burgerIcon.classList.remove('animate');
    menu.classList.remove('show-menu');
    body.classList.remove('body-overflow');
    menuBackdrop.classList.remove('menu-backdrop--show');
}
document.addEventListener('click', (event) => {
    // Проверяем, был ли клик вне элемента .mobile-menu и бургер-иконки
    if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
        closeMenuAndReset(); // Закрываем меню и снимаем анимацию
    }
});
const swiper = new Swiper('.swiperMain', {
    autoplay: {
        delay: 3000,
    },
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
    },
});
function isElementInViewport(el) {
    let rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

function isElementInViewport(el) {
    let rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

document.addEventListener("scroll", function () {
    let productionGrid = document.querySelector(".production-grid");

    if (!productionGrid) {
        return;
    }

    let blocks = productionGrid.querySelectorAll(".production-item");

    blocks.forEach(function (block) {
        if (isElementInViewport(block) && !block.classList.contains("visible")) {
            block.classList.add("visible");
        }
    });
});


document.addEventListener("scroll", function () {
    let element = document.querySelector(".advantages-grid");
    let bounding = element.getBoundingClientRect();

    if (bounding.top < window.innerHeight) {
        element.classList.add("advantages-grid--animated");
    } else {
        element.classList.remove("advantages-grid--animated");
    }
});