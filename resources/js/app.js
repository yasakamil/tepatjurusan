import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
        const timers = document.querySelectorAll('[data-countdown]');
        
        timers.forEach(timer => {
            const endTime = new Date(timer.getAttribute('data-countdown')).getTime();
            const textSpan = timer.querySelector('.countdown-text');
            
            const updateTimer = () => {
                const now = new Date().getTime();
                const distance = endTime - now;

                if (distance < 0) {
                    textSpan.innerHTML = "EXPIRED";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Format biar 01:05:09 (pake padStart)
                let display = "";
                if(days > 0) display += days + "d ";
                display += String(hours).padStart(2, '0') + ":";
                display += String(minutes).padStart(2, '0') + ":";
                display += String(seconds).padStart(2, '0');

                textSpan.innerHTML = display;
            };

            setInterval(updateTimer, 1000);
            updateTimer(); // Jalanin sekali pas load biar ga nunggu 1 detik
        });
    });

document.addEventListener('DOMContentLoaded', function() {
        const menuToggleBtn = document.getElementById('menu-toggle-btn');
        const menuCloseBtn = document.getElementById('menu-close-btn');
        const offcanvasMenu = document.getElementById('offcanvas-menu');
        const menuBackdrop = document.getElementById('menu-backdrop');
        const menuPanel = document.getElementById('menu-panel');

        function openMenu() {
            offcanvasMenu.classList.remove('hidden');
            setTimeout(() => {
                menuBackdrop.classList.remove('opacity-0');
                menuBackdrop.classList.add('opacity-100');
                menuPanel.classList.remove('translate-x-full');
                menuPanel.classList.add('translate-x-0');
            }, 20);
        }

        function closeMenu() {
            menuBackdrop.classList.remove('opacity-100');
            menuBackdrop.classList.add('opacity-0');
            menuPanel.classList.remove('translate-x-0');
            menuPanel.classList.add('translate-x-full');
            setTimeout(() => {
                offcanvasMenu.classList.add('hidden');
            }, 300);
        }

        if(menuToggleBtn) menuToggleBtn.addEventListener('click', openMenu);
        if(menuCloseBtn) menuCloseBtn.addEventListener('click', closeMenu);
        if(menuBackdrop) menuBackdrop.addEventListener('click', closeMenu);
    });

    document.addEventListener('DOMContentLoaded', function () {
            const countdowns = document.querySelectorAll('[data-countdown]');
            
            setInterval(() => {
                const now = new Date().getTime();
                
                countdowns.forEach(timer => {
                    const endTime = new Date(timer.dataset.countdown).getTime();
                    const distance = endTime - now;
                    
                    if (distance < 0) {
                        timer.innerHTML = "Expired";
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    // Format biar selalu 2 digit (09, 08, dst)
                    timer.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                });
            }, 1000);
        });