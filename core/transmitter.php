<?php

function import($type)
{
    switch ($type) {
         case 'css':
            return require 'settings/css.php';
            break;

        case 'js':
            return require 'settings/js.php';
            break;
        case 'favicon':
            return require 'settings/favicon.php';
            break;

        case 'yolkcss':
               return  require 'settings/yolkcss.php';
                // break;
     }

//     $tag = '<link rel="stylesheet" href="'.Path::rebase('ui/css/bootstrap.min.css').'">
//     <link rel="stylesheet" href="'.Path::rebase('ui/css/all.min.css').'">
//     <link rel="stylesheet" href="'.Path::rebase('ui/css/sweetalert2.min.css').'">
//     <link rel="stylesheet" href="'.Path::rebase('yolkassets/prism.css').'">';
//    $tag .= el::linkcss('yolkassets/style.css');
//                    $tag .= el::linkcustomcss('https://fonts.googleapis.com', 'preconnect');
//                     $tag .=el::linkcustomcss('https://fonts.gstatic.com', 'preconnect');
//                     $tag .=el::linkcustomcss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', 'stylesheet');

//                     return $tag;
}
