<?php

$favicon = [
    el::linkcustom('yolkassets/default/apple-icon-57x57.png', 'apple-touch-icon', '', 'sizes="57x57"'),
    el::linkcustom('yolkassets/default/apple-icon-60x60.png', 'apple-touch-icon', '', 'sizes="60x60"'),
    el::linkcustom('yolkassets/default/apple-icon-72x72.png', 'apple-touch-icon', '', 'sizes="72x72"'),
    el::linkcustom('yolkassets/default/apple-icon-76x76.png', 'apple-touch-icon', '', 'sizes="76x76"'),
    el::linkcustom('yolkassets/default/apple-icon-114x14.png', 'apple-touch-icon', '', 'sizes="114x114"'),
    el::linkcustom('yolkassets/default/apple-icon-120x1120.png', 'apple-touch-icon', '', 'sizes="120x120"'),
    el::linkcustom('yolkassets/default/apple-icon-144x144.png', 'apple-touch-icon', '', 'sizes="144x144"'),
    el::linkcustom('yolkassets/default/apple-icon-152x152.png', 'apple-touch-icon', '', 'sizes="152x152"'),
    el::linkcustom('yolkassets/default/apple-icon-180x180.png', 'apple-touch-icon', '', 'sizes="180x180"'),
    el::favicon('yolkassets/default/android-icon-192x192.png', 'image/png', 'sizes="192x192"'),
    el::favicon('yolkassets/default/favicon-32x32.png', 'image/png', 'sizes="32x32"'),
    el::favicon('yolkassets/default/favicon-96x96.png', 'image/png', 'sizes="96x96"'),
    el::favicon('yolkassets/default/favicon-16x16.png', 'image/png', 'sizes="16x16"'),
    el::linkmanifest('yolkassets/default/manifest.json'),
    meta::custom('msapplication-TileColor', '#ffffff'),
    meta::custom('msapplication-TileImage', 'yolkassets/default/ms-icon-144x144.png'),
    meta::custom('theme-color', '#ffffff'),
];

return export($favicon);
