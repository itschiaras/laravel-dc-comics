import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = modal.querySelector('button.btn-primary');

        buttonDelete.addEventListener('click', () => {
            button.parentElement.submit();
        });
    });
});
