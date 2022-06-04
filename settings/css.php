<?php

$css = [
    // el::linkcss('ui/css/all.min.css'),

    // el::linkcss('yolkassets/style.css'),
     el::linkcustomcss('https://fonts.googleapis.com', 'preconnect'),
    el::linkcustomcss('https://fonts.gstatic.com', 'preconnect'),
    el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet'),
    el::linkcustomcss('https://fonts.googleapis.com/css?family=Poppins:600&display=swap', 'stylesheet'),
];

return export($css);
