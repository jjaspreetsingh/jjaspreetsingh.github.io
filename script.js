// Hacker Terminal - Portfolio Script
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Terminal Typing Effect for Header
    const headerTitle = document.querySelector('h1');
    const originalText = headerTitle.textContent;
    headerTitle.textContent = '';
    let i = 0;

    function typeWriter() {
        if (i < originalText.length) {
            headerTitle.textContent += originalText.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    }
    typeWriter();

    // 2. Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // 3. Subtle Glitch Effect on hover for Section Headers
    const sections = document.querySelectorAll('h2');
    sections.forEach(h2 => {
        h2.addEventListener('mouseover', () => {
            h2.style.textShadow = '2px 0 #003b00, -2px 0 #00ff41';
            setTimeout(() => h2.style.textShadow = 'none', 150);
        });
    });
});
