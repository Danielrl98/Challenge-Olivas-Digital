<?php

/**
 * Plugin name: Olivas digital Lazy Load
 * Description: Plugin responsável por adicionar lazy load em imagens
 * Version: 1.0
 */

add_action('wp_head', function () {
?>
    <script>
        function lazyLoadImage(element) {
            if (!element || !element.getAttribute('data-src')) {
                return;
            }

            var bounding = element.getBoundingClientRect();

            const dataSrc = element.getAttribute('data-src');
            element.setAttribute('style', `background-image:url('${dataSrc}')`)
            element.removeAttribute('data-src');
        }
        document.addEventListener('DOMContentLoaded', function() {
            setInterval(() => {
                var lazyImages = document.querySelectorAll('.lazy-load');
                lazyImages.forEach(function(img) {
                    lazyLoadImage(img);
                });
            }, 500)
        });
    </script>
<?php
})
?>