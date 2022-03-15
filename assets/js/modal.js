const modal = document.getElementById("myModal"); // Получить модальный

const btn = document.getElementById("open-modal"); // Получить кнопку, которая открывает модальный

const span = document.getElementsByClassName("close")[0]; // Получить элемент <span>, который закрывает модальный

btn.onclick = function() { // Когда пользователь нажимает на кнопку, откройте модальный
    modal.style.display = "block";
}

span.onclick = function() { // Когда пользователь нажимает на <span> (x), закройте модальное окно
    modal.style.display = "none";
}

window.onclick = function(event) { // Когда пользователь щелкает в любом месте за пределами модального, закройте его
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
