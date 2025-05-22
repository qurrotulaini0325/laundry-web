document.addEventListener('DOMContentLoaded', function() {
    // Toggle sidebar
    const menuToggle = document.getElementById('menu-toggle');
    const wrapper = document.getElementById('wrapper');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            wrapper.classList.toggle('toggled');
            
            // Add class to hide sidebar
            const sidebar = document.getElementById('sidebar-wrapper');
            if (sidebar) {
                if (wrapper.classList.contains('toggled')) {
                    sidebar.style.marginLeft = '-250px';
                } else {
                    sidebar.style.marginLeft = '0';
                }
            }
        });
    }

    // Add active class to current menu item
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.list-group-item');
    
    menuItems.forEach(item => {
        if (item.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });
}));