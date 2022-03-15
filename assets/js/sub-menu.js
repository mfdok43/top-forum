let menuElem = document.getElementsByClassName('sub-menu');

for (let i = 0; i < menuElem.length; i++) {
    menuElem[i].addEventListener('mouseover', function () {
        menuElem[i].classList.toggle('open');
    });
}

for (let j = 0; j < menuElem.length; j++) {
    menuElem[i].addEventListener('mouseout', function () {
        menuElem[j].classList.toggle('open');
    });
}


