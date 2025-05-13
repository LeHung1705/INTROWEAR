
    // Show/hide sidebar when screen is minimized (responsive)
    function toggleSummary() {
        const sidebar = document.querySelector('.checkout-sidebar');
        const text = document.querySelector('.toggle-summary-text');

        sidebar.classList.toggle('hidden');

        if (sidebar.classList.contains('hidden')) {
            text.textContent = 'Hiển thị thông tin đơn hàng';
        } else {
            text.textContent = 'Ẩn thông tin đơn hàng';
        }
    }

    // Show sidebar when screen return to maximimum
    window.addEventListener('resize', function() {
        const sidebar = document.querySelector('.checkout-sidebar');
        const text = document.querySelector('.toggle-summary-text');
        const arrow = document.querySelector('.arrow-icon');

        if (window.innerWidth > 768) {
            sidebar.classList.remove('hidden');
            text.textContent = 'Ẩn thông tin đơn hàng';
        }
    });