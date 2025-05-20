document.addEventListener('DOMContentLoaded', function() {
    // Get the form elements
    const serviceTypeSelect = document.getElementById('service_type');
    const serviceItemSelect = document.getElementById('service_item');
    const serviceSpeedSelect = document.getElementById('service_speed');
    
    // Get the data from the hidden div
    const dataElement = document.getElementById('layanan-data');
    const dailyData = JSON.parse(dataElement.getAttribute('data-daily'));
    const satuanData = JSON.parse(dataElement.getAttribute('data-satuan'));
    
    // Function to populate the service item dropdown based on service type
    function populateServiceItems(serviceType) {
        // Clear existing options
        serviceItemSelect.innerHTML = '<option value="">Pilih jenis layanan</option>';
        
        // Enable the dropdown
        serviceItemSelect.disabled = false;
        
        if (serviceType === 'daily') {
            // Populate with daily kiloan options
            dailyData.forEach(item => {
                const option = document.createElement('option');
                option.value = item.Layanan;
                option.textContent = item.Layanan;
                serviceItemSelect.appendChild(option);
            });
        } else if (serviceType === 'satuan') {
            // Populate with satuan options
            satuanData.forEach(item => {
                const option = document.createElement('option');
                option.value = item.Tipe;
                option.textContent = item.Tipe;
                serviceItemSelect.appendChild(option);
            });
        }
        
        // Enable the service speed dropdown if an item is selected
        serviceSpeedSelect.disabled = !serviceItemSelect.value;
    }
    
    // Event listener for service type change
    serviceTypeSelect.addEventListener('change', function() {
        const serviceType = this.value;
        
        if (serviceType) {
            populateServiceItems(serviceType);
        } else {
            // Disable the dependent dropdowns if no service type is selected
            serviceItemSelect.disabled = true;
            serviceSpeedSelect.disabled = true;
        }
    });
    
    // Event listener for service item change
    serviceItemSelect.addEventListener('change', function() {
        // Enable/disable the service speed dropdown based on whether an item is selected
        serviceSpeedSelect.disabled = !this.value;
    });
    
    // Initialize the form based on any existing values (e.g., after validation errors)
    if (serviceTypeSelect.value) {
        populateServiceItems(serviceTypeSelect.value);
        
        // If there's a previously selected service item, re-select it
        const previousServiceItem = serviceItemSelect.getAttribute('data-previous-value');
        if (previousServiceItem) {
            serviceItemSelect.value = previousServiceItem;
        }
        
        // Enable the service speed dropdown if an item is selected
        serviceSpeedSelect.disabled = !serviceItemSelect.value;
    }
});