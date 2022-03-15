let btn_prev = document.getElementById ('prev')
let btn_next =document.getElementById ('next')

let images = document.querySelectorAll('#gallery .photos img');

let i = 0; // номер текущей картинки, на экране

btn_prev.onclick = function(){
    images[i].style.display = 'none';
    i = i - 1;
    if(i < 0){
        i = images.length - 1;
    }
    images[i].style.display = 'block';
};

btn_next.onclick = function(){
    images[i].style.display = 'none';
    i = i + 1;
    if(i >= images.length){
        i = 0;
    }
    images[i].style.display = 'block';
};




