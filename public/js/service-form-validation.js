document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const priceInputs = [
        document.getElementById('regular'),
        document.getElementById('oneDay'),
        document.getElementById('express'),
        document.getElementById('quick')
    ];

    priceInputs.forEach(input => {
        input.addEventListener('input', function () {
            if (this.value < 0) {
                this.value = '';
                alert('Harga tidak boleh negatif!');
            }
        });

        input.addEventListener('keydown', function (e) {
            if (e.key === '-' || e.key === 'Minus') {
                e.preventDefault();
            }
        });
    });

    form.addEventListener('submit', function (event) {
        let isValid = true;
        let firstInvalid = null;

        priceInputs.forEach(input => {
            const value = parseFloat(input.value);
            if (isNaN(value) || value < 0) {
                if (!firstInvalid) firstInvalid = input;
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault();
            alert('Pastikan semua harga bernilai nol atau lebih.');
            if (firstInvalid) firstInvalid.focus();
        }
    });
});
