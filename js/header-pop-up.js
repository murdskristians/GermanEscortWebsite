document.addEventListener("DOMContentLoaded", function () {
    const popUp1 = document.getElementById("profile-pop-up");
    const popUp2 = document.getElementById("profile-pop-up2");
    const languagePopUp = document.getElementById("language-popup");

    const openButtons1 = document.querySelectorAll("[data-target='profile-pop-up']");
    const openButtons2 = document.querySelectorAll("[data-target='profile-pop-up2']");
    const openButtonsLanguage = document.querySelectorAll("[data-target='language-popup']");

    const closeButtons1 = document.querySelectorAll("[data-close='profile-pop-up']");
    const closeButtons2 = document.querySelectorAll("[data-close='profile-pop-up2']");
    const closeButtonsLanguage = document.querySelectorAll("[data-close='language-popup']");

    openButtons1.forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent click from propagating to window
            const isCurrentlyOpen = popUp1.style.display === "block";
            closeAllPopUps();
            if (!isCurrentlyOpen) {
                popUp1.style.display = "block";
            }
        });
    });

    openButtons2.forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent click from propagating to window
            const isCurrentlyOpen = popUp2.style.display === "block";
            closeAllPopUps();
            if (!isCurrentlyOpen) {
                popUp2.style.display = "block";
            }
        });
    });

    openButtonsLanguage.forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent click from propagating to window
            const isCurrentlyOpen = languagePopUp.style.display === "block";
            closeAllPopUps();
            if (!isCurrentlyOpen) {
                languagePopUp.style.display = "block";
            }
        });
    });

    closeButtons1.forEach(button => {
        button.addEventListener("click", function () {
            popUp1.style.display = "none";
        });
    });

    closeButtons2.forEach(button => {
        button.addEventListener("click", function () {
            popUp2.style.display = "none";
        });
    });

    closeButtonsLanguage.forEach(button => {
        button.addEventListener("click", function () {
            languagePopUp.style.display = "none";
        });
    });

    window.addEventListener("click", function (event) {
        if (popUp1.style.display === "block" && !popUp1.contains(event.target)) {
            popUp1.style.display = "none";
        }
        if (popUp2.style.display === "block" && !popUp2.contains(event.target)) {
            popUp2.style.display = "none";
        }
        if (languagePopUp.style.display === "block" && !languagePopUp.contains(event.target)) {
            languagePopUp.style.display = "none";
        }
    });

    function closeAllPopUps() {
        const allPopUps = document.querySelectorAll(".more-options-pop-up-modal, .profile-popup, .language-popup");
        allPopUps.forEach(popUp => {
            popUp.style.display = "none";
        });
    }
});
