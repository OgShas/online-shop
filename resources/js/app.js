import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('weatherForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();  // stop normal form submit
            const country = this.country.value.trim();
            if (country) {
                // redirect to /weather/{country}
                window.location.href = `/weather/${encodeURIComponent(country)}`;
            }
        });
    } else {
        console.error('Form #weatherForm not found!');
    }
});
