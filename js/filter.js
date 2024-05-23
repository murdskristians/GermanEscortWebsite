document.addEventListener('DOMContentLoaded', function () {
    const filterItems = document.querySelectorAll('.model_filter-item');
    const clearButton = document.querySelector('.model_filter-clear');
    const modals = document.querySelectorAll('.filter-pop-up-modal');

    filterItems.forEach(item => {
        item.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent click event from propagating to the window

            const targetId = this.getAttribute('data-target');
            const targetModal = document.getElementById(targetId);
            const isCurrentlyOpen = targetModal.style.display === 'block';

            // Close all open modals
            modals.forEach(modal => {
                modal.style.display = 'none';
            });

            // Toggle the target modal
            if (!isCurrentlyOpen) {
                targetModal.style.display = 'block';
            }
        });
    });

    clearButton.addEventListener('click', function () {
        modals.forEach(modal => {
            modal.style.display = 'none';
        });
    });

    window.addEventListener('click', function (event) {
        modals.forEach(modal => {
            if (modal.style.display === 'block' && !modal.contains(event.target)) {
                modal.style.display = 'none';
            }
        });
    });

    // Stop propagation to window when clicking inside the modal
    modals.forEach(modal => {
        modal.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});

