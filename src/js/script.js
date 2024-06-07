// Модальное окно
// Открытие модального окна
document.querySelectorAll(".btn-open-form-modal").forEach(button => {
    button.addEventListener("click", function () {
        document.getElementById("form-modal").classList.add("modal--open");
    });
});

// Закрытие модального окна с помощью кнопки
document.getElementById("close-form-modal-btn").addEventListener("click", function () {
    document.getElementById("form-modal").classList.remove("modal--open");
});

// Закрытие модального окна с помощью Esc
window.addEventListener('keydown', (e) => {
    if (e.key === "Escape") {
        document.getElementById("form-modal").classList.remove("modal--open");
    }
});

// Закрытие модального окна при клике вне его
document.querySelector("#form-modal .modal__box").addEventListener('click', event => {
    event._isClickWithInModal = true;
});
document.getElementById("form-modal").addEventListener('click', event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('modal--open');
});