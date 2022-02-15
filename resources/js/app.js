import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
import './clipboard';

// Highlight code blocks
import hljs from 'highlight.js';

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre code').forEach((block) => {
        hljs.highlightBlock(block);
    });
});

// Navigation scroll
import SmoothScroll from 'smooth-scroll';

new SmoothScroll('a[href*="#"]');