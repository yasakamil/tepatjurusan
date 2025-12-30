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