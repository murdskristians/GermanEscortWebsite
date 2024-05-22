document.addEventListener("DOMContentLoaded", function () {
    const popUp = document.getElementById("profile-pop-up");
    const openButtons = document.querySelectorAll("[data-target='profile-pop-up']");
    const closeButtons = document.querySelectorAll("[data-close='profile-pop-up']");

    openButtons.forEach(button => {
        button.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent click from propagating to window
            const isCurrentlyOpen = popUp.style.display === "block";
            closeAllPopUps();
            if (!isCurrentlyOpen) {
                popUp.style.display = "block";
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener("click", function () {
            popUp.style.display = "none";
        });
    });

    window.addEventListener("click", function (event) {
        if (popUp.style.display === "block" && !popUp.contains(event.target)) {
            popUp.style.display = "none";
        }
    });

    function closeAllPopUps() {
        const allPopUps = document.querySelectorAll(".more-options-pop-up-modal");
        allPopUps.forEach(popUp => {
            popUp.style.display = "none";
        });
    }
});

