let menuElem = document.getElementsByClassName('sub-menu');

for (let i = 0; i < menuElem.length; i++) {
    menuElem[i].addEventListener('mouseover', function () {
        menuElem[i].classList.toggle('open');
    });
}

for (let j = 0; j < menuElem.length; j++) {
    menuElem[i].addEventListener('mouseout', function () {
        menuElem[j].classList.remove('open');
        if (menuElem[j].children) {
            console.log('dfgdg')
        }
    });
}

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

if (isMobile.any()) {
 document.body.classList.add('touch')
}else {
    document.body.classList.add('pc')
}


