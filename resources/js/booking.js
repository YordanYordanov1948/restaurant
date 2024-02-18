document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#booking-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Reset and hide previous messages
        const successMessage = document.getElementById('booking-success');
        const errorsContainer = document.getElementById('booking-errors');
        successMessage.style.display = 'none';
        errorsContainer.innerHTML = '';
        errorsContainer.style.display = 'none';

        const formData = new FormData(form);
        fetch('/api/booking/store', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: formData,
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.errors) {
                // Display validation errors
                Object.keys(data.errors).forEach(function(key) {
                    const error = document.createElement('div');
                    error.innerText = data.errors[key];
                    errorsContainer.appendChild(error);
                });
                errorsContainer.style.display = 'block';
                errorsContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                // Display success message and reset form
                successMessage.innerText = data.message;
                successMessage.style.display = 'block';
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                form.reset();
                // Optionally, hide the success message after a few seconds
                setTimeout(() => { successMessage.style.display = 'none'; }, 5000);
            }
        })
        .catch(error => {
            // Handle network errors
            console.error('Error:', error);
            errorsContainer.innerText = 'An unexpected error occurred. Please try again later.';
            errorsContainer.style.display = 'block';
            errorsContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
});
