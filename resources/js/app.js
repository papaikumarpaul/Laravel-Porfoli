import './bootstrap';
import * as bootstrap from 'bootstrap'
import Typed from 'typed.js';

document.addEventListener('DOMContentLoaded', () => {
    new Typed('#typed-text', {
        strings: [
            "Web Developer",
            "Wordpress Developer",
            "Software Engineer"

        ],
        typeSpeed: 50,
        backSpeed: 30,
        loop: true,
        smartBackspace: true,
        backDelay: 1500,
        showCursor: false
    });
});
