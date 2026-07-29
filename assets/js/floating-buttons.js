// Same animation as back-to-top button - appears when scrolling down
(function() {
    const floatingButtons = document.getElementById('floatingButtons');
    let scrollTimeout;
    
    function checkScroll() {
        if (!floatingButtons) return;
        
        // Show buttons when scrolled down more than 300px (adjustable)
        if (window.scrollY > 300) {
            floatingButtons.classList.add('show');
        } else {
            floatingButtons.classList.remove('show');
        }
    }
    
    // Check on scroll with throttle for performance
    window.addEventListener('scroll', function() {
        if (scrollTimeout) {
            window.cancelAnimationFrame(scrollTimeout);
        }
        scrollTimeout = window.requestAnimationFrame(function() {
            checkScroll();
        });
    });
    
    // Check on page load
    document.addEventListener('DOMContentLoaded', checkScroll);
    
    // Also check on page load in case of delayed content
    window.addEventListener('load', checkScroll);
})();
