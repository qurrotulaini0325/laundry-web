document.addEventListener('DOMContentLoaded', function() {
    const serviceTypeSelect = document.getElementById('service_type');
    const serviceItemSelect = document.getElementById('service_item');
    const serviceSpeedSelect = document.getElementById('service_speed');
    const layananData = document.getElementById('layanan-data');
    const form = document.querySelector('.reservation-form');
    const phoneInput = document.getElementById('phone');
    const dateInput = document.getElementById('pickup_date');

    
    // Parse the JSON data from the hidden div
    const dailyServices = JSON.parse(layananData.dataset.daily);
    const satuanServices = JSON.parse(layananData.dataset.satuan);

    // Function to update service items based on service type
    function updateServiceItems(serviceType) {
        // Clear current options
        serviceItemSelect.innerHTML = '<option value="">Pilih jenis layanan</option>';
        
        if (!serviceType) return;

        const services = serviceType === 'daily' ? dailyServices : satuanServices;
        const field = serviceType === 'daily' ? 'Layanan' : 'Tipe';

        services.forEach(service => {
            const option = document.createElement('option');
            option.value = service[field];
            option.textContent = service[field];
            serviceItemSelect.appendChild(option);
        });

        // If there's an old value, select it
        const oldValue = serviceItemSelect.dataset.oldValue;
        if (oldValue) {
            serviceItemSelect.value = oldValue;
        }
    }

    // Event listener for service type change
    serviceTypeSelect.addEventListener('change', function() {
        updateServiceItems(this.value);
    });

    // Initialize service items if service type is pre-selected
    if (serviceTypeSelect.value) {
        updateServiceItems(serviceTypeSelect.value);
    }

    form.addEventListener('submit', function (event) {
        let valid = true;

        // Validasi nomor telepon: hanya angka
        const phoneValue = phoneInput.value.trim();
        if (!/^\d+$/.test(phoneValue)) {
            alert('Nomor telepon hanya boleh berisi angka.');
            phoneInput.focus();
            valid = false;
        }

        // Validasi tanggal: minimal hari ini
        const selectedDate = new Date(dateInput.value);
        const today = new Date();
        today.setHours(0, 0, 0, 0); // Hilangkan jam agar validasi hanya berdasarkan tanggal

        if (selectedDate < today) {
            alert('Tanggal pengambilan tidak boleh sebelum hari ini.');
            dateInput.focus();
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); // Hentikan submit form
        }
    });

});