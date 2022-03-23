let menuElem = document.getElementsByClassName('menu-item-has-children');

let subMenu = document.querySelectorAll('.menu-item-has-children span')
let subMenu1 = document.querySelectorAll('.submenu-item span')

// let burger = document.getElementById('burger').addEventListener('click',function (e){
//     burger.style.display = 'none'
// })

const isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (
            isMobile.Android() ||
            isMobile.BlackBerry() ||
            isMobile.iOS() ||
            isMobile.Opera() ||
            isMobile.Windows())
    }
};



for (let j=0; j < subMenu.length; j++) {
    subMenu[j].classList.toggle('sub-menu-button')
}

for (let i=0; i < subMenu1.length; i++) {
    subMenu1[i].classList.toggle('sub-menu-button-open')
}


if (isMobile.any()) {
 document.body.classList.add('touch')
    let menuArrows = document.querySelectorAll('.arrow-span')
    if (menuArrows.length>0) {
        for (let h = 0; h < menuArrows.length; h++) {
            const menuArrow = menuArrows[h]
            menuArrow.addEventListener('click',function (e){
                menuArrow.parentElement.classList.toggle('_active')
            })
        }
    }
}else {
    document.body.classList.add('pc')
    for (let i = 0; i < menuElem.length; i++) {
        menuElem[i].addEventListener('mouseover', function () {
            menuElem[i].classList.toggle('open');
        });
    }

    for (let j = 0; j < menuElem.length; j++) {
        menuElem[i].addEventListener('mouseout', function () {
            menuElem[j].classList.remove('open');
        });
    }
}

let iconMenu = document.querySelector('.menu__icon')
let menuBody = document.querySelector('.header__menu')
let iconClose = document.querySelector('.close_burger')

if (iconMenu) {
    let menuBody = document.querySelector('.header__menu')
    iconMenu.addEventListener('click', function () {
        // document.body.classList.toggle('_lock')
        menuBody.classList.toggle('_active');
    })
}


if (iconClose) {
    iconClose.addEventListener('click', function () {
        menuBody.classList.remove('_active');
    })
}

