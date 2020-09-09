"use strict";

const genResult = document.querySelector('#gen-result'); // Контейнер ответа генерации
const retrResult = document.querySelector('#retr-result'); // Контейнер ответа извлечения
const retrError = document.querySelector('#retrieve_error'); // Контейнер с ошибкой об извлечении

const genTxt = document.querySelector('#gen-text'); // Текст ответа генерации
const retrTxt = document.querySelector('#retr-text'); // Текст ответа извлечения
const retrTxtError = document.querySelector('#retr-text-error'); // Текст с ошибкой об извлечении

const genBtn = document.querySelector('#generate_button'); // кнопка генерации
const retrBtn = document.querySelector('#retrieve_button'); // Кнопка извлечения

window.onload = genBtn.addEventListener("click", generate);
window.onload = retrBtn.addEventListener("click", retrieve);

// Генерация
function generate() {
    // Получаем данные от api
    fetch('api/random/generate')
        .then(response => response.json())
        .then(result => {
            genTxt.innerHTML = 'ID: ' + result.id + '<br>' + 'число: ' + result.random;
        })
        .then(function () {
            // Показываем блок с сообщением
            genResult.style.display = "block";
        });

}

// Извлечение
function retrieve() {

    let inputId = document.querySelector('#inputId').value;

    // Проверка введенного значения
    if (inputId == '') {

        alert('Неверный формат ID');
        return;
    }

    let uri = 'api/random/retrieve/' + inputId;

    // Получаем данные от api
    fetch(uri)
        .then(response => response.json())
        .then(function (result) {
            if (result.hasOwnProperty('random')) {
                retrTxt.innerHTML = 'Число: ' + result.random + '<br>' + 'Создано: ' + result.timestamp;
                // Показываем блок с сообщением и скрываем ошибку, если была предыдущая
                retrError.style.display = "none";
                retrResult.style.display = "block";
            } else {
                retrTxtError.innerHTML = 'Код ошибки: ' + result.error + '<br>' + 'Сообщение: ' + result.message;
                // Показываем блок с сообщением
                retrResult.style.display = "none";
                retrError.style.display = "block";
            }
        });
}