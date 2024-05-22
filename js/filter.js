document.addEventListener('DOMContentLoaded', function () {
    const filterItems = document.querySelectorAll('.model_filter-item');
    const clearButton = document.querySelector('.model_filter-clear');

    filterItems.forEach(item => {
        item.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const targetModal = document.getElementById(targetId);
            const openModals = document.querySelectorAll('.filter-pop-up-modal[style="display: block;"]');

            openModals.forEach(modal => {
                modal.style.display = 'none';
            });

            if (targetModal) {
                targetModal.style.display = 'block';
            }
        });
    });

    clearButton.addEventListener('click', function () {
        const openModals = document.querySelectorAll('.filter-pop-up-modal[style="display: block;"]');

        openModals.forEach(modal => {
            modal.style.display = 'none';
        });
    });
});

